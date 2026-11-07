# updateNewEphemeralMessage

**Layer** : 233

```tl
updateNewEphemeralMessage#20bcbba1 message:EphemeralMessage = Update;
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
$update = $client->updateNewEphemeralMessage(
	message : $client->ephemeralMessage(
		out : true,
		welcome_template : true,
		invert_media : true,
		noforwards : true,
		id : 62,
		from_id : $client->peerUser(
			user_id : 200299435268426347,
		),
		peer_id : $client->peerUser(
			user_id : 3006514392654568441,
		),
		receiver_id : 8288148707222350502,
		top_msg_id : 36,
		date : 94,
		message : 'CTdzrIUel61aoL0b',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 91,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 35,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 32,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 24,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 87,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 61,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 38,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 98,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 80,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 29,
				language : 'TQwCgVrsGj6FPB1M',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 80,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 79,
				user_id : -7707368475620757382,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 2,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 78,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 48,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 2,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 34,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 63,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 10,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 78,
				document_id : -9202501906727808412,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 85,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 72,
				date : 32,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 66,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 17,
				old_text : 'yJQMPkYiBgEAmeGh',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 92,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 15,
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
			reply_to_msg_id : 40,
			reply_to_peer_id : $client->peerUser(
				user_id : -8337771937818981975,
			),
			reply_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(...),
				from_name : 'dDQMfHybSq7cAW9r',
				date : 17,
				channel_post : 18,
				post_author : 'ASWrPmDnTENG7q1d',
				saved_from_peer : $client->peerUser(...),
				saved_from_msg_id : 53,
				saved_from_id : $client->peerUser(...),
				saved_from_name : '15rvmDgbMGC3NY62',
				saved_date : 58,
				psa_type : 'zDnh0RHil4YjKro8',
			),
			reply_media : $client->messageMediaEmpty(),
			reply_to_top_id : 64,
			quote_text : 'BH9ZjOgu1lAomdKF',
			quote_entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 9,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 10,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 25,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 8,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 67,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 91,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 63,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 56,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 88,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 70,
					language : '3FLtCfGqSJhgnErx',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 76,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 75,
					user_id : -2441368912219941799,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 93,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 1,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 52,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 56,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 35,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 69,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 97,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 42,
					document_id : -3575674322544453056,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 52,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 12,
					date : 83,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 12,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 92,
					old_text : 'fmpkDnsg8vCiPGOJ',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 96,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 4,
				),
			),
			quote_offset : 51,
			todo_item_id : 25,
			poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			quote_rich : array(
				$client->textEmpty(),
				$client->textPlain(
					text : 'SNBbnwHvE0tpI7sz',
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
					webpage_id : 5255288141102326513,
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
					document_id : -5641892201521511592,
					w : 67,
					h : 92,
				),
				$client->textAnchor(
					text : $client->textEmpty(...),
					name : 'BL2YtD9wWFHlr58z',
				),
				$client->textMath(
					source : 'aSz0JtN3Pq6rZhML',
				),
				$client->textCustomEmoji(
					document_id : 3754816000516645497,
					alt : 'Z2hIrMzSUNc4HKPJ',
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
					user_id : 3104984072881100872,
				),
				$client->textDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					text : $client->textEmpty(...),
					date : 33,
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
					published_date : 72,
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
					language : 'WvZz6O21wpiME5SN',
				),
				$client->pageBlockFooter(
					text : $client->textEmpty(...),
				),
				$client->pageBlockDivider(),
				$client->pageBlockAnchor(
					name : 'gJX8bYtUz40fZrhN',
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
					photo_id : -5443573210848906603,
					caption : $client->pageCaption(...),
					url : 'https://docs.liveproto.dev',
					webpage_id : 1291387241763428556,
				),
				$client->pageBlockVideo(
					autoplay : true,
					loop : true,
					spoiler : true,
					video_id : 2807156749780967833,
					caption : $client->pageCaption(...),
				),
				$client->pageBlockCover(
					cover : $client->pageBlockUnsupported(...),
				),
				$client->pageBlockEmbed(
					full_width : true,
					allow_scrolling : true,
					url : 'https://docs.liveproto.dev',
					html : '1fVoN72EZ4OkCtqP',
					poster_photo_id : -4385372044579373554,
					w : 69,
					h : 31,
					caption : $client->pageCaption(...),
				),
				$client->pageBlockEmbedPost(
					url : 'https://docs.liveproto.dev',
					webpage_id : -7987086781791523170,
					author_photo_id : 7930241347143700977,
					author : 'FLs6JPHif20u5tV4',
					date : 44,
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
					audio_id : 5876758147308819215,
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
					start : 24,
					type : '7BRk4VyCJWqSIe2p',
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
					zoom : 4,
					w : 34,
					h : 99,
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
					source : 'EtCOVuA8Bedg3wbH',
				),
				$client->pageBlockThinking(
					text : $client->textEmpty(...),
				),
				$client->inputPageBlockMap(
					geo : $client->inputGeoPointEmpty(...),
					zoom : 38,
					w : 37,
					h : 79,
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
					document_id : 9014818821111220476,
					caption : $client->pageCaption(...),
				),
			),
			photos : array(
				$client->photoEmpty(
					id : 8605879865052012372,
				),
				$client->photo(
					has_stickers : true,
					id : -1595389687473598782,
					access_hash : -3720896317040880945,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 32,
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
					dc_id : 32,
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 2055831111081201970,
				),
				$client->document(
					id : -8667506120295818593,
					access_hash : -2655711486330561248,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 1,
					mime_type : 'EhAq3ofjgtiLOWdb',
					size : 3923697703836029220,
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
					dc_id : 54,
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
		chat_instance : 1272647336078842683,
		anchor_msg_id : 4,
	),
);
```