# pageBlockOrderedList

**Description** : *Ordered list of IV blocks*

**Layer** : 214

```tl
pageBlockOrderedList#9a8ae1e1 items:Vector<PageListOrderedItem> = PageBlock;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>items</mark> | [`Vector<PageListOrderedItem>`](type/PageListOrderedItem) | List items |

---

## Type

[PageBlock](type/PageBlock)

---

## Example

```php
$pageBlock = $client->pageBlockOrderedList(
	items : array(
		$client->pageListOrderedItemText(
			num : 'F7qVd0ApZ3SOcURK',
			text : $client->textEmpty(),
		),
		$client->pageListOrderedItemBlocks(
			num : 'ta5n4pcmdew3gLir',
			blocks : array(
				$client->pageBlockUnsupported(),
				$client->pageBlockTitle(
					text : $client->textEmpty(...),
				),
				$client->pageBlockSubtitle(
					text : $client->textEmpty(...),
				),
				$client->pageBlockAuthorDate(
					author : $client->textEmpty(...),
					published_date : 84,
				),
				$client->pageBlockHeader(
					text : $client->textEmpty(...),
				),
				$client->pageBlockSubheader(
					text : $client->textEmpty(...),
				),
				$client->pageBlockParagraph(
					text : $client->textEmpty(...),
				),
				$client->pageBlockPreformatted(
					text : $client->textEmpty(...),
					language : '0xvjHbJMl8k2LV5P',
				),
				$client->pageBlockFooter(
					text : $client->textEmpty(...),
				),
				$client->pageBlockDivider(),
				$client->pageBlockAnchor(
					name : 'Qu18zimjdrEsplgo',
				),
				$client->pageBlockList(
					items : array(
						$client->pageListItemText(...),
						$client->pageListItemBlocks(...),
					),
				),
				$client->pageBlockBlockquote(
					text : $client->textEmpty(...),
					caption : $client->textEmpty(...),
				),
				$client->pageBlockPullquote(
					text : $client->textEmpty(...),
					caption : $client->textEmpty(...),
				),
				$client->pageBlockPhoto(
					photo_id : -531620155711097553,
					caption : $client->pageCaption(...),
					url : 'https://docs.liveproto.dev',
					webpage_id : -2103865071231505159,
				),
				$client->pageBlockVideo(
					autoplay : true,
					loop : true,
					video_id : 977779916225491536,
					caption : $client->pageCaption(...),
				),
				$client->pageBlockCover(
					cover : $client->pageBlockUnsupported(...),
				),
				$client->pageBlockEmbed(
					full_width : true,
					allow_scrolling : true,
					url : 'https://docs.liveproto.dev',
					html : 'mHryqdj2RI3TJL9k',
					poster_photo_id : -5349369442976362402,
					w : 21,
					h : 50,
					caption : $client->pageCaption(...),
				),
				$client->pageBlockEmbedPost(
					url : 'https://docs.liveproto.dev',
					webpage_id : -5247525881734893069,
					author_photo_id : -1597791691282632443,
					author : 'Y4elUpamAkdhE6KQ',
					date : 76,
					blocks : array(
						$client->pageBlockUnsupported(...),
						$client->pageBlockTitle(...),
						$client->pageBlockSubtitle(...),
						$client->pageBlockAuthorDate(...),
						$client->pageBlockHeader(...),
						$client->pageBlockSubheader(...),
						$client->pageBlockParagraph(...),
						$client->pageBlockPreformatted(...),
						$client->pageBlockFooter(...),
						$client->pageBlockDivider(...),
						$client->pageBlockAnchor(...),
						$client->pageBlockList(...),
						$client->pageBlockBlockquote(...),
						$client->pageBlockPullquote(...),
						$client->pageBlockPhoto(...),
						$client->pageBlockVideo(...),
						$client->pageBlockCover(...),
						$client->pageBlockEmbed(...),
						$client->pageBlockEmbedPost(...),
						$client->pageBlockCollage(...),
						$client->pageBlockSlideshow(...),
						$client->pageBlockChannel(...),
						$client->pageBlockAudio(...),
						$client->pageBlockKicker(...),
						$client->pageBlockTable(...),
						$client->pageBlockOrderedList(...),
						$client->pageBlockDetails(...),
						$client->pageBlockRelatedArticles(...),
						$client->pageBlockMap(...),
					),
					caption : $client->pageCaption(...),
				),
				$client->pageBlockCollage(
					items : array(
						$client->pageBlockUnsupported(...),
						$client->pageBlockTitle(...),
						$client->pageBlockSubtitle(...),
						$client->pageBlockAuthorDate(...),
						$client->pageBlockHeader(...),
						$client->pageBlockSubheader(...),
						$client->pageBlockParagraph(...),
						$client->pageBlockPreformatted(...),
						$client->pageBlockFooter(...),
						$client->pageBlockDivider(...),
						$client->pageBlockAnchor(...),
						$client->pageBlockList(...),
						$client->pageBlockBlockquote(...),
						$client->pageBlockPullquote(...),
						$client->pageBlockPhoto(...),
						$client->pageBlockVideo(...),
						$client->pageBlockCover(...),
						$client->pageBlockEmbed(...),
						$client->pageBlockEmbedPost(...),
						$client->pageBlockCollage(...),
						$client->pageBlockSlideshow(...),
						$client->pageBlockChannel(...),
						$client->pageBlockAudio(...),
						$client->pageBlockKicker(...),
						$client->pageBlockTable(...),
						$client->pageBlockOrderedList(...),
						$client->pageBlockDetails(...),
						$client->pageBlockRelatedArticles(...),
						$client->pageBlockMap(...),
					),
					caption : $client->pageCaption(...),
				),
				$client->pageBlockSlideshow(
					items : array(
						$client->pageBlockUnsupported(...),
						$client->pageBlockTitle(...),
						$client->pageBlockSubtitle(...),
						$client->pageBlockAuthorDate(...),
						$client->pageBlockHeader(...),
						$client->pageBlockSubheader(...),
						$client->pageBlockParagraph(...),
						$client->pageBlockPreformatted(...),
						$client->pageBlockFooter(...),
						$client->pageBlockDivider(...),
						$client->pageBlockAnchor(...),
						$client->pageBlockList(...),
						$client->pageBlockBlockquote(...),
						$client->pageBlockPullquote(...),
						$client->pageBlockPhoto(...),
						$client->pageBlockVideo(...),
						$client->pageBlockCover(...),
						$client->pageBlockEmbed(...),
						$client->pageBlockEmbedPost(...),
						$client->pageBlockCollage(...),
						$client->pageBlockSlideshow(...),
						$client->pageBlockChannel(...),
						$client->pageBlockAudio(...),
						$client->pageBlockKicker(...),
						$client->pageBlockTable(...),
						$client->pageBlockOrderedList(...),
						$client->pageBlockDetails(...),
						$client->pageBlockRelatedArticles(...),
						$client->pageBlockMap(...),
					),
					caption : $client->pageCaption(...),
				),
				$client->pageBlockChannel(
					channel : $client->chatEmpty(...),
				),
				$client->pageBlockAudio(
					audio_id : -2111072165140400791,
					caption : $client->pageCaption(...),
				),
				$client->pageBlockKicker(
					text : $client->textEmpty(...),
				),
				$client->pageBlockTable(
					bordered : true,
					striped : true,
					title : $client->textEmpty(...),
					rows : array(
						$client->pageTableRow(...),
					),
				),
				$client->pageBlockOrderedList(
					items : array(
						$client->pageListOrderedItemText(...),
						$client->pageListOrderedItemBlocks(...),
					),
				),
				$client->pageBlockDetails(
					open : true,
					blocks : array(
						$client->pageBlockUnsupported(...),
						$client->pageBlockTitle(...),
						$client->pageBlockSubtitle(...),
						$client->pageBlockAuthorDate(...),
						$client->pageBlockHeader(...),
						$client->pageBlockSubheader(...),
						$client->pageBlockParagraph(...),
						$client->pageBlockPreformatted(...),
						$client->pageBlockFooter(...),
						$client->pageBlockDivider(...),
						$client->pageBlockAnchor(...),
						$client->pageBlockList(...),
						$client->pageBlockBlockquote(...),
						$client->pageBlockPullquote(...),
						$client->pageBlockPhoto(...),
						$client->pageBlockVideo(...),
						$client->pageBlockCover(...),
						$client->pageBlockEmbed(...),
						$client->pageBlockEmbedPost(...),
						$client->pageBlockCollage(...),
						$client->pageBlockSlideshow(...),
						$client->pageBlockChannel(...),
						$client->pageBlockAudio(...),
						$client->pageBlockKicker(...),
						$client->pageBlockTable(...),
						$client->pageBlockOrderedList(...),
						$client->pageBlockDetails(...),
						$client->pageBlockRelatedArticles(...),
						$client->pageBlockMap(...),
					),
					title : $client->textEmpty(...),
				),
				$client->pageBlockRelatedArticles(
					title : $client->textEmpty(...),
					articles : array(
						$client->pageRelatedArticle(...),
					),
				),
				$client->pageBlockMap(
					geo : $client->geoPointEmpty(...),
					zoom : 60,
					w : 16,
					h : 60,
					caption : $client->pageCaption(...),
				),
			),
		),
	),
);
```