<?php

//echo  'Here will be news';

//require_once '../includes/functions.php';

$news = ['Lorem1'=> ['text' => '<p>Lorem ipsum 
                    dolor sit amet, consectetur adipisicing elit.
                     Alias aperiam deleniti ducimus explicabo ipsam magni nisi nobis 
                    obcaecati officia possimus quis quod repellat, sint tempora ullam unde voluptas
                     voluptatem voluptatum?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur
                      blanditiis dolor ea exercitationem in, incidunt maiores minima modi mollitia provident repellat
                       repellendus rerum tempora unde vero vitae. Incidunt, repellat.aperiam deleniti ducimus explicabo
                        ipsam magni nisi nobis 
                    obcaecati officia possimus quis quod repellat, sint tempora ullam unde voluptas
                     voluptatem voluptatum?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur
                      blanditiis dolor ea exercitationem in, incidunt maiores minima modi mollitia provident repellat
                       repellendus rerum tempora unde vero vitae. Incidunt, repellat.</p>', 'date' => '01.01.2001',
                        'source' => 'https://www.obozrevatel.com/'],
    'Lorem2' => ['text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad architecto atque dolore 
                    earum eligendi expedita explicabo laborum maiores aperiam deleniti ducimus explicabo ipsam magni 
                    nisi nobis 
                    obcaecati officia possimus quis quod repellat, sint tempora ullam unde voluptas
                     voluptatem voluptatum?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur
                      blanditiis dolor ea exercitationem in, incidunt maiores minima modi mollitia provident repellat
                       repellendus rerum tempora unde vero vitae. Incidunt, repellat.aperiam deleniti ducimus explicabo
                        ipsam magni nisi nobis 
                    obcaecati officia possimus quis quod repellat, sint tempora ullam unde voluptas
                     voluptatem voluptatum?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur
                      blanditiis dolor ea exercitationem in, incidunt maiores minima modi mollitia provident repellat
                       repellendus rerum tempora unde vero vitae. Incidunt, repellat.nemo obcaecati odit omnis
                        perferendis porro quae 
                     reiciendis, rem rerum sequi, ullam?</p>','date' => ' 02.02.2002 ',
                    'source' => 'https://www.unian.net/'],
     'Lorem3' => ['text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad architecto atque dolore 
                    earum eligendi expedita explicabo laborum maiores aperiam deleniti ducimus explicabo ipsam magni 
                    nisi nobis 
                    obcaecati officia possimus quis quod repellat, sint tempora ullam unde voluptas
                     voluptatem voluptatum?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur
                      blanditiis dolor ea exercitationem in, incidunt maiores minima modi mollitia provident repellat
                       repellendus rerum tempora unde vero vitae. Incidunt, repellat.aperiam deleniti ducimus explicabo
                        ipsam magni nisi nobis 
                    obcaecati officia possimus quis quod repellat, sint tempora ullam unde voluptas
                     voluptatem voluptatum?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur
                      blanditiis dolor ea exercitationem in, incidunt maiores minima modi mollitia provident repellat
                       repellendus rerum tempora unde vero vitae. Incidunt, repellat.nemo obcaecati odit omnis
                        perferendis porro quae 
                     reiciendis, rem rerum sequi, ullam?</p>','date' => ' 03.03.2003',
                    'source' => 'https://korrespondent.net/']
];
//echo '<pre>';
//print_r($news);
//echo '</pre>';
newslist($news);

$newstxt = fopen("template/news.txt", "a");
$sernews = serialize($news);
fwrite($newstxt, $sernews);
//
//onenews($name);
//
//allnews();