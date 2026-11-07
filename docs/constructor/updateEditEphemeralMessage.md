# updateEditEphemeralMessage

**Layer** : 233

```tl
updateEditEphemeralMessage#4bbb8f01 message:EphemeralMessage = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>message</mark> | [`EphemeralMessage`](type/EphemeralMessage) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateEditEphemeralMessage(
	message : $client->ephemeralMessage(
		out : true,
		welcome_template : true,
		invert_media : true,
		noforwards : true,
		id : 61,
		from_id : $client->peerUser(
			user_id : -6424592338399718668,
		),
		peer_id : $client->peerUser(
			user_id : 80848687748817818,
		),
		receiver_id : -1221371867746295437,
		top_msg_id : 75,
		date : 95,
		message : '5auc1qr08XmzihZp',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 37,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 30,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 73,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 79,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 38,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 80,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 27,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 92,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 18,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 10,
				language : 'x7FJGd64r3iBHans',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 56,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 30,
				user_id : -4585655936523140156,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 100,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 25,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 96,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 12,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 54,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 32,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 4,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 16,
				document_id : 4361259139656985710,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 67,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 10,
				date : 15,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 43,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 53,
				old_text : '6wC4HqOSpxDWZK2X',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 59,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 23,
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
			reply_to_msg_id : 45,
			reply_to_peer_id : $client->peerUser(
				user_id : -8855123401027604181,
			),
			reply_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(...),
				from_name : 'yzk0fLiTK4oXhF3s',
				date : 34,
				channel_post : 18,
				post_author : 'u0AKc9btZ7dSVzDR',
				saved_from_peer : $client->peerUser(...),
				saved_from_msg_id : 48,
				saved_from_id : $client->peerUser(...),
				saved_from_name : 'fveWKRpGJFcytPzg',
				saved_date : 17,
				psa_type : 'eIMHm978x2P1zlGO',
			),
			reply_media : $client->messageMediaEmpty(),
			reply_to_top_id : 25,
			quote_text : 'YGSJ3dBwzK4Afyi5',
			quote_entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 98,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 32,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 78,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 51,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 22,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 5,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 31,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 87,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 82,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 50,
					language : 'JxUPzVHuXCjmF8gc',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 4,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 45,
					user_id : -8679589402183411268,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 29,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 77,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 25,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 3,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 58,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 17,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 6,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 80,
					document_id : 1371440168668798875,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 62,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 2,
					date : 42,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 85,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 2,
					old_text : 'Oa89oMQygHWkLmTB',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 77,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 39,
				),
			),
			quote_offset : 55,
			todo_item_id : 12,
			poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			quote_rich : array(
				$client->textEmpty(),
				$client->textPlain(
					text : 'eIZqNS2sE0zgJrLn',
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
					webpage_id : 585282088370277994,
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
					document_id : 3926949886070082830,
					w : 24,
					h : 26,
				),
				$client->textAnchor(
					text : $client->textEmpty(...),
					name : '5Msixa034nY2WQSN',
				),
				$client->textMath(
					source : 'XkjTd98FzbL6HtoW',
				),
				$client->textCustomEmoji(
					document_id : -8603164036279857652,
					alt : 'pUsLTba6ECHkNm8I',
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
					user_id : 6677237254974559436,
				),
				$client->textDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					text : $client->textEmpty(...),
					date : 81,
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
					published_date : 80,
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
					language : 'NZxurVyLdGwESm2k',
				),
				$client->pageBlockFooter(
					text : $client->textEmpty(...),
				),
				$client->pageBlockDivider(),
				$client->pageBlockAnchor(
					name : 'x0u8kLCfWpmP5e3D',
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
					photo_id : -4063422666368971397,
					caption : $client->pageCaption(...),
					url : 'https://docs.liveproto.dev',
					webpage_id : -4514226172354993610,
				),
				$client->pageBlockVideo(
					autoplay : true,
					loop : true,
					spoiler : true,
					video_id : 6278875419243536340,
					caption : $client->pageCaption(...),
				),
				$client->pageBlockCover(
					cover : $client->pageBlockUnsupported(...),
				),
				$client->pageBlockEmbed(
					full_width : true,
					allow_scrolling : true,
					url : 'https://docs.liveproto.dev',
					html : '41MvLclEB9ybKYVa',
					poster_photo_id : -2410926405677061954,
					w : 51,
					h : 16,
					caption : $client->pageCaption(...),
				),
				$client->pageBlockEmbedPost(
					url : 'https://docs.liveproto.dev',
					webpage_id : -9045289599783956279,
					author_photo_id : 7634144666075011734,
					author : 'n0ovc9qGUQYs8X1u',
					date : 15,
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
					audio_id : 2118464487385338546,
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
					start : 33,
					type : 'yj3l5G40ouiBTUQY',
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
					zoom : 47,
					w : 69,
					h : 55,
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
					source : '21p4HDtdmzLnNoJI',
				),
				$client->pageBlockThinking(
					text : $client->textEmpty(...),
				),
				$client->inputPageBlockMap(
					geo : $client->inputGeoPointEmpty(...),
					zoom : 66,
					w : 91,
					h : 84,
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
					document_id : 8051745414441310931,
					caption : $client->pageCaption(...),
				),
			),
			photos : array(
				$client->photoEmpty(
					id : 309593738281135078,
				),
				$client->photo(
					has_stickers : true,
					id : -8784929836306338485,
					access_hash : -4304209750674771232,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 39,
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
					dc_id : 43,
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -5999851563222837147,
				),
				$client->document(
					id : -3385794567065792210,
					access_hash : 31103430323911870,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 81,
					mime_type : 'EOhqbwtBfcC3Vl4o',
					size : -493366445339202400,
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
					dc_id : 0,
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
		chat_instance : -5834453608426029908,
		anchor_msg_id : 35,
	),
);
```