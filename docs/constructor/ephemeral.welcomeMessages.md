# ephemeral.welcomeMessages

**Layer** : 233

```tl
ephemeral.welcomeMessages#104fc872 hash:long messages:Vector<EphemeralMessage> = ephemeral.WelcomeMessages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | NOTHING |
| <mark>messages</mark> | [`Vector<EphemeralMessage>`](type/EphemeralMessage) | NOTHING |

---

## Type

[ephemeral.WelcomeMessages](type/ephemeral.WelcomeMessages)

---

## Example

```php
$ephemeralWelcomeMessages = $client->ephemeral->welcomeMessages(
	hash : 0,
	messages : array(
		$client->ephemeralMessage(
			out : true,
			welcome_template : true,
			invert_media : true,
			noforwards : true,
			id : 48,
			from_id : $client->peerUser(
				user_id : 7435172721400307156,
			),
			peer_id : $client->peerUser(
				user_id : -804833148266088286,
			),
			receiver_id : -6016889026021454356,
			top_msg_id : 65,
			date : 79,
			message : '8VtTxrSd0ME9X1Ub',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 25,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 32,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 62,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 20,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 68,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 96,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 70,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 53,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 9,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 17,
					language : 'T32xyjAMKGrpLBZk',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 1,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 67,
					user_id : -64646116099325462,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 7,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 9,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 66,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 47,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 98,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 77,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 73,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 16,
					document_id : 4794354677538995320,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 65,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 30,
					date : 24,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 2,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 19,
					old_text : 'F243ZBJMwdLvK0Sg',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 76,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 60,
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
				reply_to_msg_id : 53,
				reply_to_peer_id : $client->peerUser(
					user_id : -368527028632944946,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'KXHBoSh1YQJxgAmq',
					date : 65,
					channel_post : 44,
					post_author : '4BrwmAZNJH0SGezl',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 69,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'nxjLMluDiXvpm4c0',
					saved_date : 29,
					psa_type : 'NYk9jXqvD5aUeCtu',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 78,
				quote_text : '6RAyTYfOtMgxFwmu',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 34,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 88,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 29,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 53,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 47,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 77,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 79,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 40,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 32,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 19,
						language : 'GnqPliwNhDQsYZdS',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 91,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 16,
						user_id : -6621585605016607329,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 92,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 20,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 77,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 77,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 95,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 45,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 1,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 40,
						document_id : 1992139821758406589,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 76,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 32,
						date : 51,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 17,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 96,
						old_text : 'EJc9ibYasxCV0hRz',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 30,
					),
					$client->messageEntityTonAddress(
						offset : 0,
						length : 89,
					),
				),
				quote_offset : 90,
				todo_item_id : 10,
				poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				quote_rich : array(
					$client->textEmpty(),
					$client->textPlain(
						text : '7DPcoAaHwqOb3kvs',
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
						webpage_id : 6657108215988209754,
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
						document_id : 6053827984771873108,
						w : 5,
						h : 60,
					),
					$client->textAnchor(
						text : $client->textEmpty(...),
						name : 'PhBeJQ7USnq3sg1u',
					),
					$client->textMath(
						source : 'qu3BYdQMLnJWilXh',
					),
					$client->textCustomEmoji(
						document_id : 2719144105304027406,
						alt : 'DjNqvu80Z7ESA4g2',
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
						user_id : -7846620406195794153,
					),
					$client->textDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						text : $client->textEmpty(...),
						date : 23,
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
						published_date : 69,
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
						language : 'FfhpS6KmR8rDOyEC',
					),
					$client->pageBlockFooter(
						text : $client->textEmpty(...),
					),
					$client->pageBlockDivider(),
					$client->pageBlockAnchor(
						name : 'FiJdlKmpMftPOjb3',
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
						photo_id : -4844430056304097643,
						caption : $client->pageCaption(...),
						url : 'https://docs.liveproto.dev',
						webpage_id : 845278875044443839,
					),
					$client->pageBlockVideo(
						autoplay : true,
						loop : true,
						spoiler : true,
						video_id : -5127776894188194147,
						caption : $client->pageCaption(...),
					),
					$client->pageBlockCover(
						cover : $client->pageBlockUnsupported(...),
					),
					$client->pageBlockEmbed(
						full_width : true,
						allow_scrolling : true,
						url : 'https://docs.liveproto.dev',
						html : 'p0dN8XfjlJBETbrq',
						poster_photo_id : 612042935465520364,
						w : 76,
						h : 48,
						caption : $client->pageCaption(...),
					),
					$client->pageBlockEmbedPost(
						url : 'https://docs.liveproto.dev',
						webpage_id : -2831969573974286110,
						author_photo_id : 5525787230064357792,
						author : 'Mvx21aPFsCQhyYr6',
						date : 80,
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
						audio_id : 2717209957120143133,
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
						start : 17,
						type : 'HonmbdC5cEF4f7yp',
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
						zoom : 18,
						w : 82,
						h : 43,
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
						source : '1c05GAa8It4hmXRn',
					),
					$client->pageBlockThinking(
						text : $client->textEmpty(...),
					),
					$client->inputPageBlockMap(
						geo : $client->inputGeoPointEmpty(...),
						zoom : 24,
						w : 96,
						h : 83,
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
						document_id : 7030418358148546188,
						caption : $client->pageCaption(...),
					),
				),
				photos : array(
					$client->photoEmpty(
						id : -5829808026335383807,
					),
					$client->photo(
						has_stickers : true,
						id : 3833228099997613729,
						access_hash : 5042064411720323245,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 23,
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
						dc_id : 1,
					),
				),
				documents : array(
					$client->documentEmpty(
						id : -4405060516100116336,
					),
					$client->document(
						id : -6523137048922627974,
						access_hash : 4393932796664591269,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 33,
						mime_type : 'cu8GLZvfwxAWSmzM',
						size : 2522786280417939174,
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
						dc_id : 48,
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
			chat_instance : 4337072789044331035,
			anchor_msg_id : 41,
		),
	),
);
```