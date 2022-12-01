<?php
require_once __DIR__.'/../vendor/autoload.php';
session_start();

use Lib\App\Controller\BookController;
use Lib\App\Controller\LibrarianController;
use Lib\App\Controller\MemberController;
use Lib\App\Controller\MemberTrxController;
use Lib\App\Controller\SubscriptionController;
use Lib\App\Core\Router;
use Lib\App\Middleware\Auth;
use Lib\App\Middleware\Guest;


// Login
Router::addRoute('GET','/login', LibrarianController::class, 'login',[Guest::class]);
Router::addRoute('POST','/login/post', LibrarianController::class, 'postLogin', [Guest::class]);
Router::addRoute('GET','/logout', LibrarianController::class, 'logout', [Auth::class]);

// Librarians
Router::addRoute('GET','/librarians', LibrarianController::class, 'index',[Auth::class]);
Router::addRoute('GET','/librarians/add', LibrarianController::class, 'add', [Auth::class]);
Router::addRoute('POST','/librarians/add/save', LibrarianController::class, 'save', [Auth::class]);
Router::addRoute('GET','/librarians/delete/:id', LibrarianController::class, 'delete', [Auth::class]);
Router::addRoute('GET','/librarians/update/:id', LibrarianController::class, 'update', [Auth::class]);
Router::addRoute('POST','/librarians/update/:id/save', LibrarianController::class, 'saveUpdate', [Auth::class]);

// Books
Router::addRoute('GET', '/books', BookController::class, 'index', []);
Router::addRoute('GET', '/books/add', BookController::class, 'add', []);
Router::addRoute('POST', '/books/add/save', BookController::class, 'save', []);
Router::addRoute('GET', '/books/delete/:id', BookController::class, 'delete', []);
Router::addRoute('GET', '/books/update/:id', BookController::class, 'update', []);
Router::addRoute('POST', '/books/update/:id/save', BookController::class, 'saveUpdate', []);


// Members
Router::addRoute('GET', '/members', MemberController::class, 'index', []);
Router::addRoute('GET', '/members/add', MemberController::class, 'add', []);
Router::addRoute('POST', '/members/add/save', MemberController::class, 'save', []);
Router::addRoute('GET', '/members/update/:id', MemberController::class, 'update', []);
Router::addRoute('GET', '/members/delete/:id', MemberController::class, 'delete', []);
Router::addRoute('POST', '/members/update/:id/save', MemberController::class, 'saveUpdate', []);

// Subcriptions
Router::addRoute('GET', '/subscriptions', SubscriptionController::class, 'index', []);
Router::addRoute('GET', '/subscriptions/add', SubscriptionController::class, 'add', []);
Router::addRoute('POST', '/subscriptions/add/save', SubscriptionController::class, 'save', []);
Router::addRoute('GET', '/subscriptions/update/:id', SubscriptionController::class, 'update', []);
Router::addRoute('GET', '/subscriptions/delete/:id', SubscriptionController::class, 'delete', []);
Router::addRoute('POST', '/subscriptions/update/:id/save', SubscriptionController::class, 'saveUpdate', []);

Router::addRoute('GET', '/subsmember', MemberTrxController::class, 'index', []);
Router::addRoute('GET', '/subsmember/add', MemberTrxController::class, 'add', []);
Router::addRoute('POST', '/subsmember/add/save', MemberTrxController::class, 'save', []);
Router::addRoute('GET', '/subsmember/update/:id', MemberTrxController::class, 'update', []);
Router::addRoute('GET', '/subsmember/delete/:id', MemberTrxController::class, 'delete', []);
Router::addRoute('POST', '/subsmember/update/:id/save', MemberTrxController::class, 'saveUpdate', []);


Router::run();


