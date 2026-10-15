# updateEphemeralBotCallbackQuery

**Layer** : 229

```tl
updateEphemeralBotCallbackQuery#7c1079d6 flags:# query_id:long user_id:long peer:flags.0?Peer msg_id:int data:bytes chat_instance:flags.1?long message:EphemeralMessage = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>query_id</mark> | [`long`](type/long) | NOTHING |
| <mark>user_id</mark> | [`long`](type/long) | NOTHING |
| **peer** | [`flags.0?Peer`](type/Peer) | NOTHING |
| <mark>msg_id</mark> | [`int`](type/int) | NOTHING |
| <mark>data</mark> | [`bytes`](type/bytes) | NOTHING |
| **chat_instance** | [`flags.1?long`](type/long) | NOTHING |
| <mark>message</mark> | [`EphemeralMessage`](type/EphemeralMessage) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateEphemeralBotCallbackQuery(
	query_id : 5035855062489972745,
	user_id : 121540875522056024,
	peer : $client->peerUser(
		user_id : 3677580548192870295,
	),
	msg_id : 38,
	data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	chat_instance : -3599765841699802609,
	message : $client->ephemeralMessage(
		out : true,
		welcome_template : true,
		invert_media : true,
		noforwards : true,
		id : 37,
		from_id : $client->peerUser(
			user_id : -5863407689825940200,
		),
		peer_id : $client->peerUser(
			user_id : -1381436953605124459,
		),
		receiver_id : -2931050957614340185,
		top_msg_id : 44,
		date : 16,
		message : 'kcJ5uejP6QWfUAiC',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 38,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 68,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 64,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 65,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 73,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 15,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 24,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 23,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 76,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 56,
				language : 'uTzc8ZnlvOg9MPaJ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 75,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 17,
				user_id : 3984333894852737225,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 11,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 100,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 59,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 76,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 17,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 31,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 96,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 80,
				document_id : -1122721967779564629,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 39,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 9,
				date : 83,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 36,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 74,
				old_text : 'JF1coIyaeD5vrdkQ',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 50,
			),
		),
		media : $client->messageMediaEmpty(),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
		reply_to : $client->messageReplyHeader(
			reply_to_scheduled : true,
			forum_topic : true,
			quote : true,
			reply_to_ephemeral : true,
			reply_to_msg_id : 25,
			reply_to_peer_id : $client->peerUser(
				user_id : -1329132724579521864,
			),
			reply_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(...),
				from_name : '0hvXDuioOWfEJ3de',
				date : 59,
				channel_post : 80,
				post_author : 'HE1SA4xfgFOYraLc',
				saved_from_peer : $client->peerUser(...),
				saved_from_msg_id : 28,
				saved_from_id : $client->peerUser(...),
				saved_from_name : 'qQnaoOvhjwugf9D5',
				saved_date : 10,
				psa_type : 'dwVfkqvJumsE4OU8',
			),
			reply_media : $client->messageMediaEmpty(),
			reply_to_top_id : 80,
			quote_text : 'f2dHBSMYkX3ub0oI',
			quote_entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 30,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 8,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 48,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 4,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 41,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 2,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 21,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 64,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 60,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 10,
					language : 'tU9RjOslpaI4WC7h',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 47,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 99,
					user_id : -7652257308787853853,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 27,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 34,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 37,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 93,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 58,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 66,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 9,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 32,
					document_id : 16592853205481430,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 22,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 78,
					date : 28,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 91,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 87,
					old_text : 'PdkA0UahX8wxfN5T',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 42,
				),
			),
			quote_offset : 24,
			todo_item_id : 38,
			poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		rich_message : $client->richMessage(
			rtl : true,
			part : true,
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
					published_date : 68,
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
					language : 'OFMuGQYD9KokE4fh',
				),
				$client->pageBlockFooter(
					text : $client->textEmpty(...),
				),
				$client->pageBlockDivider(),
				$client->pageBlockAnchor(
					name : 'wnWhkobQVcxK6rJv',
				),
				$client->pageBlockList(
					items : array(
						$client->pageListItemText(...),
						$client->pageListItemBlocks(...),
					),
				),
				$client->pageBlockBlockquote(
					collapsed : true,
					text : $client->textEmpty(...),
					caption : $client->textEmpty(...),
				),
				$client->pageBlockPullquote(
					text : $client->textEmpty(...),
					caption : $client->textEmpty(...),
				),
				$client->pageBlockPhoto(
					spoiler : true,
					photo_id : 1586597948085498934,
					caption : $client->pageCaption(...),
					url : 'https://docs.liveproto.dev',
					webpage_id : -243278387729656088,
				),
				$client->pageBlockVideo(
					autoplay : true,
					loop : true,
					spoiler : true,
					video_id : 1936490472153122216,
					caption : $client->pageCaption(...),
				),
				$client->pageBlockCover(
					cover : $client->pageBlockUnsupported(...),
				),
				$client->pageBlockEmbed(
					full_width : true,
					allow_scrolling : true,
					url : 'https://docs.liveproto.dev',
					html : 'sV3MkmCEdgezOtli',
					poster_photo_id : -8021360502055634698,
					w : 33,
					h : 100,
					caption : $client->pageCaption(...),
				),
				$client->pageBlockEmbedPost(
					url : 'https://docs.liveproto.dev',
					webpage_id : -2130318643849192106,
					author_photo_id : 3204672452660891693,
					author : 'ywXlGsa9oA2hVtYc',
					date : 48,
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
						$client->pageBlockHeading1(...),
						$client->pageBlockHeading2(...),
						$client->pageBlockHeading3(...),
						$client->pageBlockHeading4(...),
						$client->pageBlockHeading5(...),
						$client->pageBlockHeading6(...),
						$client->pageBlockMath(...),
						$client->pageBlockThinking(...),
						$client->inputPageBlockMap(...),
						$client->pageBlockBlockquoteBlocks(...),
						$client->pageBlockButtonRow(...),
						$client->pageBlockDocument(...),
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
						$client->pageBlockHeading1(...),
						$client->pageBlockHeading2(...),
						$client->pageBlockHeading3(...),
						$client->pageBlockHeading4(...),
						$client->pageBlockHeading5(...),
						$client->pageBlockHeading6(...),
						$client->pageBlockMath(...),
						$client->pageBlockThinking(...),
						$client->inputPageBlockMap(...),
						$client->pageBlockBlockquoteBlocks(...),
						$client->pageBlockButtonRow(...),
						$client->pageBlockDocument(...),
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
						$client->pageBlockHeading1(...),
						$client->pageBlockHeading2(...),
						$client->pageBlockHeading3(...),
						$client->pageBlockHeading4(...),
						$client->pageBlockHeading5(...),
						$client->pageBlockHeading6(...),
						$client->pageBlockMath(...),
						$client->pageBlockThinking(...),
						$client->inputPageBlockMap(...),
						$client->pageBlockBlockquoteBlocks(...),
						$client->pageBlockButtonRow(...),
						$client->pageBlockDocument(...),
					),
					caption : $client->pageCaption(...),
				),
				$client->pageBlockChannel(
					channel : $client->chatEmpty(...),
				),
				$client->pageBlockAudio(
					audio_id : 6624297891695555987,
					caption : $client->pageCaption(...),
				),
				$client->pageBlockKicker(
					text : $client->textEmpty(...),
				),
				$client->pageBlockTable(
					bordered : true,
					striped : true,
					compact : true,
					title : $client->textEmpty(...),
					rows : array(
						$client->pageTableRow(...),
					),
				),
				$client->pageBlockOrderedList(
					reversed : true,
					items : array(
						$client->pageListOrderedItemText(...),
						$client->pageListOrderedItemBlocks(...),
					),
					start : 53,
					type : 'AYd1vTs8IGb2SKD4',
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
						$client->pageBlockHeading1(...),
						$client->pageBlockHeading2(...),
						$client->pageBlockHeading3(...),
						$client->pageBlockHeading4(...),
						$client->pageBlockHeading5(...),
						$client->pageBlockHeading6(...),
						$client->pageBlockMath(...),
						$client->pageBlockThinking(...),
						$client->inputPageBlockMap(...),
						$client->pageBlockBlockquoteBlocks(...),
						$client->pageBlockButtonRow(...),
						$client->pageBlockDocument(...),
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
					zoom : 77,
					w : 54,
					h : 1,
					caption : $client->pageCaption(...),
				),
				$client->pageBlockHeading1(
					text : $client->textEmpty(...),
				),
				$client->pageBlockHeading2(
					text : $client->textEmpty(...),
				),
				$client->pageBlockHeading3(
					text : $client->textEmpty(...),
				),
				$client->pageBlockHeading4(
					text : $client->textEmpty(...),
				),
				$client->pageBlockHeading5(
					text : $client->textEmpty(...),
				),
				$client->pageBlockHeading6(
					text : $client->textEmpty(...),
				),
				$client->pageBlockMath(
					source : '1XKrZ6zRHc7stAx2',
				),
				$client->pageBlockThinking(
					text : $client->textEmpty(...),
				),
				$client->inputPageBlockMap(
					geo : $client->inputGeoPointEmpty(...),
					zoom : 20,
					w : 16,
					h : 4,
					caption : $client->pageCaption(...),
				),
				$client->pageBlockBlockquoteBlocks(
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
						$client->pageBlockHeading1(...),
						$client->pageBlockHeading2(...),
						$client->pageBlockHeading3(...),
						$client->pageBlockHeading4(...),
						$client->pageBlockHeading5(...),
						$client->pageBlockHeading6(...),
						$client->pageBlockMath(...),
						$client->pageBlockThinking(...),
						$client->inputPageBlockMap(...),
						$client->pageBlockBlockquoteBlocks(...),
						$client->pageBlockButtonRow(...),
						$client->pageBlockDocument(...),
					),
					caption : $client->textEmpty(...),
				),
				$client->pageBlockButtonRow(
					align_left : true,
					align_center : true,
					align_right : true,
					buttons : array(
						$client->pageButton(...),
					),
				),
				$client->pageBlockDocument(
					document_id : -7587817196950902720,
					caption : $client->pageCaption(...),
				),
			),
			photos : array(
				$client->photoEmpty(
					id : -5157617356229315146,
				),
				$client->photo(
					has_stickers : true,
					id : 1646708436947740297,
					access_hash : -6409815091772206778,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 79,
					sizes : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					video_sizes : array(
						$client->videoSize(...),
						$client->videoSizeEmojiMarkup(...),
						$client->videoSizeStickerMarkup(...),
					),
					dc_id : 84,
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -2182611983748819964,
				),
				$client->document(
					id : -891053058103202966,
					access_hash : -2835716095026299643,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 42,
					mime_type : 'HYmtNp4DFgwqrVvW',
					size : -2080360698470719361,
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					video_thumbs : array(
						$client->videoSize(...),
						$client->videoSizeEmojiMarkup(...),
						$client->videoSizeStickerMarkup(...),
					),
					dc_id : 63,
					attributes : array(
						$client->documentAttributeImageSize(...),
						$client->documentAttributeAnimated(...),
						$client->documentAttributeSticker(...),
						$client->documentAttributeVideo(...),
						$client->documentAttributeAudio(...),
						$client->documentAttributeFilename(...),
						$client->documentAttributeHasStickers(...),
						$client->documentAttributeCustomEmoji(...),
					),
				),
			),
		),
		chat_instance : 6533879925054219665,
		anchor_msg_id : 51,
	),
);
```