<?php



// Home page
$app->get('/', function () use ($app) {
    //$articles = $app['dao.article']->findAll();
    return $app['twig']->render('index.html.twig'/*, array('articles' => $articles)*/);
})->bind('home');


// Article details with comments
$app->get('/article/{id}', function ($id) use ($app) {
    $article = $app['dao.article']->find($id);
    $comments = $app['dao.comment']->findAllByArticle($id);
    return $app['twig']->render('article.html.twig', array('article' => $article, 'comments' => $comments));
})->bind('article');



use Symfony\Component\HttpFoundation\Request;
$request = Request::createFromGlobals();


$app->post('/', function(Request $request) use ($app) {



	// the URI being requested (e.g. /about) minus any query parameters
	$request->getPathInfo();

	// retrieve $_GET and $_POST variables respectively
	$data = $request->request->get('nom');
    $nom = $request->request->get('nom');
    $email = $request->request->get('email');
    $message = $request->request->get('message');

    $app['dao.contact']->saveContact($nom, $email, $message);

    return $app['twig']->render('index.html.twig');
	//->bind('home');


    // Further processing
});