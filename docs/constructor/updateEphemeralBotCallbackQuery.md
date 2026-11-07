# updateEphemeralBotCallbackQuery

**Layer** : 233

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
	query_id : 2610714176893180516,
	user_id : 8678891345813343309,
	peer : $client->peerUser(
		user_id : -5527800529633141132,
	),
	msg_id : 80,
	data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	chat_instance : 8247480406206239156,
	message : $client->ephemeralMessage(
		out : true,
		welcome_template : true,
		invert_media : true,
		noforwards : true,
		id : 52,
		from_id : $client->peerUser(
			user_id : -6901174906577952558,
		),
		peer_id : $client->peerUser(
			user_id : -2253909758765454902,
		),
		receiver_id : 1144453184222591451,
		top_msg_id : 75,
		date : 7,
		message : 'DIHgZsfkRPQi2XjY',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 51,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 9,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 45,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 93,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 20,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 71,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 18,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 62,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 18,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 37,
				language : '6QGEIjVg7ZuoBqrh',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 39,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 52,
				user_id : 355225470479027268,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 99,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 21,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 3,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 58,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 7,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 46,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 49,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 70,
				document_id : 1092349121140339716,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 97,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 71,
				date : 20,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 0,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 84,
				old_text : 's4iVyYJBeMZxQ2aU',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 25,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 56,
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
			reply_to_msg_id : 4,
			reply_to_peer_id : $client->peerUser(
				user_id : 3284203340702743267,
			),
			reply_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(...),
				from_name : 'S6iEWZyewr25Yuls',
				date : 32,
				channel_post : 19,
				post_author : '0oIehycrWXSmGAFp',
				saved_from_peer : $client->peerUser(...),
				saved_from_msg_id : 71,
				saved_from_id : $client->peerUser(...),
				saved_from_name : 'qrBKDzt0fxg8FbGv',
				saved_date : 19,
				psa_type : 'HX9ZaMFPR2ANJgOI',
			),
			reply_media : $client->messageMediaEmpty(),
			reply_to_top_id : 17,
			quote_text : 'J5SsIvbBcP2jutF8',
			quote_entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 92,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 64,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 54,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 16,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 65,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 14,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 27,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 73,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 77,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 24,
					language : 'KYUSfWrvziHdjhNG',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 34,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 69,
					user_id : 5048538990436301398,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 44,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 77,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 48,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 22,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 88,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 61,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 19,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 37,
					document_id : -3162429471796127039,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 40,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 77,
					date : 45,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 2,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 2,
					old_text : 'cL3rXgxOSTRUblFQ',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 49,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 54,
				),
			),
			quote_offset : 43,
			todo_item_id : 15,
			poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			quote_rich : array(
				$client->textEmpty(),
				$client->textPlain(
					text : '2Lk9DS6NYhXCpMjz',
				),
				$client->textBold(
					text : $client->textEmpty(...),
				),
				$client->textItalic(
					text : $client->textEmpty(...),
				),
				$client->textUnderline(
					text : $client->textEmpty(...),
				),
				$client->textStrike(
					text : $client->textEmpty(...),
				),
				$client->textFixed(
					text : $client->textEmpty(...),
				),
				$client->textUrl(
					text : $client->textEmpty(...),
					url : 'https://docs.liveproto.dev',
					webpage_id : 5155310297444189257,
				),
				$client->textEmail(
					text : $client->textEmpty(...),
					email : 'reply@liveproto.dev',
				),
				$client->textConcat(
					texts : array(
						$client->textEmpty(...),
						$client->textPlain(...),
						$client->textBold(...),
						$client->textItalic(...),
						$client->textUnderline(...),
						$client->textStrike(...),
						$client->textFixed(...),
						$client->textUrl(...),
						$client->textEmail(...),
						$client->textConcat(...),
						$client->textSubscript(...),
						$client->textSuperscript(...),
						$client->textMarked(...),
						$client->textPhone(...),
						$client->textImage(...),
						$client->textAnchor(...),
						$client->textMath(...),
						$client->textCustomEmoji(...),
						$client->textSpoiler(...),
						$client->textMention(...),
						$client->textHashtag(...),
						$client->textBotCommand(...),
						$client->textCashtag(...),
						$client->textAutoUrl(...),
						$client->textAutoEmail(...),
						$client->textAutoPhone(...),
						$client->textBankCard(...),
						$client->textMentionName(...),
						$client->textDate(...),
						$client->textDiff(...),
						$client->textButton(...),
						$client->textTonAddress(...),
					),
				),
				$client->textSubscript(
					text : $client->textEmpty(...),
				),
				$client->textSuperscript(
					text : $client->textEmpty(...),
				),
				$client->textMarked(
					text : $client->textEmpty(...),
				),
				$client->textPhone(
					text : $client->textEmpty(...),
					phone : '+1234567890',
				),
				$client->textImage(
					document_id : 8796056028161575065,
					w : 36,
					h : 4,
				),
				$client->textAnchor(
					text : $client->textEmpty(...),
					name : 'mpD4YLWIJBx0Swdt',
				),
				$client->textMath(
					source : '3XyPLV07fOnJcjpW',
				),
				$client->textCustomEmoji(
					document_id : 6142892974908395112,
					alt : 'fajwHlx6I7QUNy1E',
				),
				$client->textSpoiler(
					text : $client->textEmpty(...),
				),
				$client->textMention(
					text : $client->textEmpty(...),
				),
				$client->textHashtag(
					text : $client->textEmpty(...),
				),
				$client->textBotCommand(
					text : $client->textEmpty(...),
				),
				$client->textCashtag(
					text : $client->textEmpty(...),
				),
				$client->textAutoUrl(
					text : $client->textEmpty(...),
				),
				$client->textAutoEmail(
					text : $client->textEmpty(...),
				),
				$client->textAutoPhone(
					text : $client->textEmpty(...),
				),
				$client->textBankCard(
					text : $client->textEmpty(...),
				),
				$client->textMentionName(
					text : $client->textEmpty(...),
					user_id : -51452167081273902,
				),
				$client->textDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					text : $client->textEmpty(...),
					date : 3,
				),
				$client->textDiff(
					text : $client->textEmpty(...),
					old_text : $client->textEmpty(...),
				),
				$client->textButton(
					text : $client->textEmpty(...),
					type : $client->inlineButtonTypeUrl(...),
					style : $client->richButtonStyle(...),
				),
				$client->textTonAddress(
					text : $client->textEmpty(...),
				),
			),
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
					published_date : 50,
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
					language : 'rcAGuiOKTC0MXHtD',
				),
				$client->pageBlockFooter(
					text : $client->textEmpty(...),
				),
				$client->pageBlockDivider(),
				$client->pageBlockAnchor(
					name : 'kt5j7SvU4xsZro1p',
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
					photo_id : 5201914809320844903,
					caption : $client->pageCaption(...),
					url : 'https://docs.liveproto.dev',
					webpage_id : -6836464406589907133,
				),
				$client->pageBlockVideo(
					autoplay : true,
					loop : true,
					spoiler : true,
					video_id : 3724260084503053912,
					caption : $client->pageCaption(...),
				),
				$client->pageBlockCover(
					cover : $client->pageBlockUnsupported(...),
				),
				$client->pageBlockEmbed(
					full_width : true,
					allow_scrolling : true,
					url : 'https://docs.liveproto.dev',
					html : 'z6bGnxLiPH9lSwu2',
					poster_photo_id : -8659892974076790398,
					w : 26,
					h : 44,
					caption : $client->pageCaption(...),
				),
				$client->pageBlockEmbedPost(
					url : 'https://docs.liveproto.dev',
					webpage_id : 7351092272931001146,
					author_photo_id : -1647725270835296446,
					author : '89kqnEUcup2zbDyN',
					date : 3,
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
					audio_id : -5651480887735504017,
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
					start : 39,
					type : 'yOe9BSdK3YZ0faDc',
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
					zoom : 30,
					w : 100,
					h : 59,
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
					source : '8HJfexMhaw0Okiby',
				),
				$client->pageBlockThinking(
					text : $client->textEmpty(...),
				),
				$client->inputPageBlockMap(
					geo : $client->inputGeoPointEmpty(...),
					zoom : 50,
					w : 44,
					h : 66,
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
					document_id : 2952349682166588753,
					caption : $client->pageCaption(...),
				),
			),
			photos : array(
				$client->photoEmpty(
					id : 7482509111138573282,
				),
				$client->photo(
					has_stickers : true,
					id : -4068133331170911201,
					access_hash : 3200054674800371697,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 82,
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
					dc_id : 30,
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 2787953067555546238,
				),
				$client->document(
					id : -3052072411994629447,
					access_hash : 6109480622763834661,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 84,
					mime_type : 'F2nReSNBEW1dfCLp',
					size : -37377189389729356,
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
					dc_id : 72,
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
		chat_instance : -5207419629692004789,
		anchor_msg_id : 82,
	),
);
```