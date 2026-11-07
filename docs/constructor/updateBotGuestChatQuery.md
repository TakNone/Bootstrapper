# updateBotGuestChatQuery

**Description** : *Sent to guest bots &raquo; when a user invokes the bot as a guest in a chat\. The bot should reply by invoking messages\.setBotGuestChatResult, see here &raquo; for more info*

**Layer** : 233

```tl
updateBotGuestChatQuery#cdd4093d flags:# query_id:long message:Message reference_messages:flags.0?Vector<Message> qts:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>query_id</mark> | [`long`](type/long) | Query identifier, to be passed to messages.setBotGuestChatResult when replying |
| <mark>message</mark> | [`Message`](type/Message) | The message that triggered the query |
| **reference_messages** | [`flags.0?Vector<Message>`](type/Message) | Additional context messages referenced by the triggering message (for example replied-to messages) |
| <mark>qts</mark> | [`int`](type/int) | Persistent timestamp (qts) of the update, used by bots to receive updates of this type |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotGuestChatQuery(
	query_id : 7564307751917241945,
	message : $client->messageEmpty(
		id : 88,
		peer_id : $client->peerUser(
			user_id : 9107866542685809349,
		),
	),
	reference_messages : array(
		$client->messageEmpty(
			id : 6,
			peer_id : $client->peerUser(
				user_id : 7450044478159779256,
			),
		),
		$client->message(
			out : true,
			mentioned : true,
			media_unread : true,
			silent : true,
			post : true,
			from_scheduled : true,
			legacy : true,
			edit_hide : true,
			pinned : true,
			noforwards : true,
			invert_media : true,
			offline : true,
			video_processing_pending : true,
			paid_suggested_post_stars : true,
			paid_suggested_post_ton : true,
			id : 23,
			from_id : $client->peerUser(
				user_id : 2410559251736604804,
			),
			from_boosts_applied : 57,
			from_rank : 'yXndGIsYzZheROq3',
			peer_id : $client->peerUser(
				user_id : -2553900912263420231,
			),
			saved_peer_id : $client->peerUser(
				user_id : -553842022090674366,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 48772065100803591,
				),
				from_name : 'UtPx72CEziYA0FMj',
				date : 50,
				channel_post : 20,
				post_author : '1owIHaYKA3RtchLV',
				saved_from_peer : $client->peerUser(
					user_id : 1171657659632233490,
				),
				saved_from_msg_id : 65,
				saved_from_id : $client->peerUser(
					user_id : -6352282391933357059,
				),
				saved_from_name : 'RIODdGhZ0HytXUfi',
				saved_date : 15,
				psa_type : 'H6tjiL4pMecvVs2o',
			),
			via_bot_id : 558114224293621304,
			via_business_bot_id : 7354567414142813262,
			guestchat_via_from : $client->peerUser(
				user_id : 637943900552768078,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_ephemeral : true,
				reply_to_msg_id : 35,
				reply_to_peer_id : $client->peerUser(
					user_id : -7040964252526896724,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'j54NJSqUA2QcraOs',
					date : 46,
					channel_post : 91,
					post_author : 'zKZ1RBcjaNhUeGEx',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 32,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'zlCBv74wKHdGSNx2',
					saved_date : 65,
					psa_type : 'FU0ExvVSkRwMuIr5',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 70,
				quote_text : '7XOtLW5nb4jvYEek',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 17,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 5,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 96,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 95,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 57,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 48,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 40,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 89,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 98,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 81,
						language : '61YbFeoB0GLPrSMT',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 31,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 15,
						user_id : 8163590031572373833,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 71,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 2,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 90,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 39,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 69,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 33,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 42,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 40,
						document_id : 5003090941621763538,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 26,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 88,
						date : 76,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 52,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 24,
						old_text : 'YajPpWOwnLGQmz2g',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 1,
					),
					$client->messageEntityTonAddress(
						offset : 0,
						length : 67,
					),
				),
				quote_offset : 91,
				todo_item_id : 27,
				poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				quote_rich : array(
					$client->textEmpty(),
					$client->textPlain(
						text : 'LWDVrm9ckEp6Ue8O',
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
						webpage_id : 8432673062189403901,
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
						document_id : 1839937204223520031,
						w : 55,
						h : 52,
					),
					$client->textAnchor(
						text : $client->textEmpty(...),
						name : '58IlUL1QxmvfM30b',
					),
					$client->textMath(
						source : 'JeWATNfzawk2K5nS',
					),
					$client->textCustomEmoji(
						document_id : -8243580805037882875,
						alt : 'DrTF0PsaBXnLeOV8',
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
						user_id : -6371380875847212133,
					),
					$client->textDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						text : $client->textEmpty(...),
						date : 17,
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
			date : 32,
			message : 'raCXnh4TxyjlKk8i',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 26,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 62,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 13,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 17,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 96,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 20,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 85,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 26,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 27,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 64,
					language : 'bjzpH8lgfvmxPe5k',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 32,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 23,
					user_id : -4719918954006210659,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 74,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 92,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 13,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 94,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 60,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 52,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 56,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 80,
					document_id : 837490773907696039,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 50,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 42,
					date : 60,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 92,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 82,
					old_text : 'yN5O2fZuE4bWxRSA',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 97,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 68,
				),
			),
			views : 62,
			forwards : 31,
			replies : $client->messageReplies(
				comments : true,
				replies : 91,
				replies_pts : 39,
				recent_repliers : array(
					$client->peerUser(
						user_id : -2292388271588250327,
					),
					$client->peerChat(
						chat_id : 1464320388015730987,
					),
					$client->peerChannel(
						channel_id : -4375623689976305473,
					),
				),
				channel_id : -7102518402882688170,
				max_id : 87,
				read_max_id : 70,
			),
			edit_date : 57,
			post_author : '4jdgn6Eb7htl08KS',
			grouped_id : -2351956426094423583,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 4,
						reaction : $client->reactionEmpty(...),
						count : 37,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 31,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 62,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'jCMaBAV3F1O4kbdv',
					reason : 'ZwrRhjAVofCDBleH',
					text : 'NhzqX3GSTKgbx0dp',
				),
			),
			ttl_period : 46,
			quick_reply_shortcut_id : 4,
			effect : -793040066425756106,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'jxdypKm3G4hs8FBi',
				text : $client->textWithEntities(
					text : 'WKZ3hbwEj74dMk6y',
					entities : array(
						$client->messageEntityUnknown(...),
						$client->messageEntityMention(...),
						$client->messageEntityHashtag(...),
						$client->messageEntityBotCommand(...),
						$client->messageEntityUrl(...),
						$client->messageEntityEmail(...),
						$client->messageEntityBold(...),
						$client->messageEntityItalic(...),
						$client->messageEntityCode(...),
						$client->messageEntityPre(...),
						$client->messageEntityTextUrl(...),
						$client->messageEntityMentionName(...),
						$client->inputMessageEntityMentionName(...),
						$client->messageEntityPhone(...),
						$client->messageEntityCashtag(...),
						$client->messageEntityUnderline(...),
						$client->messageEntityStrike(...),
						$client->messageEntityBankCard(...),
						$client->messageEntitySpoiler(...),
						$client->messageEntityCustomEmoji(...),
						$client->messageEntityBlockquote(...),
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
						$client->messageEntityTonAddress(...),
					),
				),
				hash : 0,
			),
			report_delivery_until_date : 60,
			paid_message_stars : -6183523699588773608,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 7953190540628462773,
					nanos : 12,
				),
				schedule_date : 24,
			),
			schedule_repeat_period : 39,
			summary_from_language : 'j6KVY3LlDrHuJdPp',
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
						published_date : 87,
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
						language : '0R7nid53fLyaIpkA',
					),
					$client->pageBlockFooter(
						text : $client->textEmpty(...),
					),
					$client->pageBlockDivider(),
					$client->pageBlockAnchor(
						name : 'iwdmM1b9ejrvJHkn',
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
						photo_id : 6930405940628451749,
						caption : $client->pageCaption(...),
						url : 'https://docs.liveproto.dev',
						webpage_id : -6992362259727073030,
					),
					$client->pageBlockVideo(
						autoplay : true,
						loop : true,
						spoiler : true,
						video_id : 8065737318007522371,
						caption : $client->pageCaption(...),
					),
					$client->pageBlockCover(
						cover : $client->pageBlockUnsupported(...),
					),
					$client->pageBlockEmbed(
						full_width : true,
						allow_scrolling : true,
						url : 'https://docs.liveproto.dev',
						html : 'd7OiqvXK5gw0xe6V',
						poster_photo_id : 1480040096829104552,
						w : 52,
						h : 85,
						caption : $client->pageCaption(...),
					),
					$client->pageBlockEmbedPost(
						url : 'https://docs.liveproto.dev',
						webpage_id : 7455845814021968262,
						author_photo_id : -2674440169143790493,
						author : 'HbSf2QiUuEw3yq69',
						date : 95,
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
						audio_id : -6928460863611704941,
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
						start : 13,
						type : 'zOGN6xfBJdKigsLC',
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
						zoom : 24,
						w : 29,
						h : 26,
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
						source : 'DvrlR0U8fTz5B1kS',
					),
					$client->pageBlockThinking(
						text : $client->textEmpty(...),
					),
					$client->inputPageBlockMap(
						geo : $client->inputGeoPointEmpty(...),
						zoom : 88,
						w : 35,
						h : 39,
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
						document_id : 7884082769477802943,
						caption : $client->pageCaption(...),
					),
				),
				photos : array(
					$client->photoEmpty(
						id : 124201862457316242,
					),
					$client->photo(
						has_stickers : true,
						id : -13104424053149274,
						access_hash : 5509896758190710021,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 6,
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
						dc_id : 86,
					),
				),
				documents : array(
					$client->documentEmpty(
						id : 5078309248201553185,
					),
					$client->document(
						id : 5234998306573013008,
						access_hash : -5420370720003558680,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 66,
						mime_type : 'JcZ4h01R2WpLAxr5',
						size : -2194604221118460599,
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
						dc_id : 26,
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
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 54,
			from_id : $client->peerUser(
				user_id : -2835569279777918930,
			),
			peer_id : $client->peerUser(
				user_id : -1823727177286775813,
			),
			saved_peer_id : $client->peerUser(
				user_id : -7365360068863738576,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_ephemeral : true,
				reply_to_msg_id : 36,
				reply_to_peer_id : $client->peerUser(
					user_id : -9054825076370275558,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '40nJU3C5E2QLpPX7',
					date : 19,
					channel_post : 37,
					post_author : 'Ufh74EM0QSL9x1aR',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 58,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'Cv8qKcB1Gly3HXNV',
					saved_date : 21,
					psa_type : '0xfLq53r6cmXTAKi',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 46,
				quote_text : 'YFzEaiMoPCrjpUh1',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 74,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 67,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 30,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 56,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 44,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 84,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 16,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 87,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 21,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 78,
						language : 'rpgPDi6oj7f5vUcO',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 2,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 40,
						user_id : 7448985652856018186,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 97,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 40,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 99,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 47,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 29,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 24,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 33,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 60,
						document_id : 1821112445099961235,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 8,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 85,
						date : 33,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 13,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 59,
						old_text : 'gVlSmA25drH1uLek',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 65,
					),
					$client->messageEntityTonAddress(
						offset : 0,
						length : 3,
					),
				),
				quote_offset : 21,
				todo_item_id : 77,
				poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				quote_rich : array(
					$client->textEmpty(),
					$client->textPlain(
						text : 'ixAaIjPTWe2cN3EH',
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
						webpage_id : 3483048355748591648,
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
						document_id : -211813382637265629,
						w : 26,
						h : 92,
					),
					$client->textAnchor(
						text : $client->textEmpty(...),
						name : 'WA0uRKvp3I9jOozH',
					),
					$client->textMath(
						source : 'RUqW7JQSsL9fiduO',
					),
					$client->textCustomEmoji(
						document_id : -6587021620150487963,
						alt : '2rMV50GWB7wyFzZt',
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
						user_id : -5018527107991650733,
					),
					$client->textDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						text : $client->textEmpty(...),
						date : 11,
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
			date : 99,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 69,
						reaction : $client->reactionEmpty(...),
						count : 52,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 17,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 12,
					),
				),
			),
			ttl_period : 25,
		),
	),
	qts : 8,
);
```