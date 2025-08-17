# updates.channelDifference

**Description** : *The new updates*

**Layer** : 211

```tl
updates.channelDifference#2064674e flags:# final:flags.0?true pts:int timeout:flags.1?int new_messages:Vector<Message> other_updates:Vector<Update> chats:Vector<Chat> users:Vector<User> = updates.ChannelDifference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **final** | [`flags.0?true`](type/true) | Whether there are more updates to be fetched using getDifference, starting from the provided pts |
| <mark>pts</mark> | [`int`](type/int) | The PTS from which to start getting updates the next time |
| **timeout** | [`flags.1?int`](type/int) | Clients are supposed to refetch the channel difference after timeout seconds have elapsed, if the user is currently viewing the chat, see here » for more info |
| <mark>new_messages</mark> | [`Vector<Message>`](type/Message) | New messages |
| <mark>other_updates</mark> | [`Vector<Update>`](type/Update) | Other updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[updates.ChannelDifference](type/updates.ChannelDifference)

---

## Example

```php
$updatesChannelDifference = $client->updates->channelDifference(
	final : true,
	pts : 29,
	timeout : 69,
	new_messages : array(
		$client->messageEmpty(
			id : 46,
			peer_id : $client->peerUser(
				user_id : -1018674364224102431,
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
			id : 100,
			from_id : $client->peerUser(
				user_id : 7007714739607544826,
			),
			from_boosts_applied : 100,
			peer_id : $client->peerUser(
				user_id : 1413488999910486483,
			),
			saved_peer_id : $client->peerUser(
				user_id : 8081568858480622901,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(...),
				from_name : 'Sb3unjQ0EMgDiYOU',
				date : 6,
				channel_post : 59,
				post_author : 'JaTv7RCfmLl09M2V',
				saved_from_peer : $client->peerUser(...),
				saved_from_msg_id : 44,
				saved_from_id : $client->peerUser(...),
				saved_from_name : 'pM6UbBu97NXn4fvO',
				saved_date : 61,
				psa_type : 'HK8hOCAGsa34FDbw',
			),
			via_bot_id : 8513556166753346495,
			via_business_bot_id : 7026688236678855145,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 100,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 93,
				quote_text : 'zfNpbPtAQEqMC4gv',
				quote_entities : array(
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
				),
				quote_offset : 46,
				todo_item_id : 61,
			),
			date : 91,
			message : 'uB53vQirVEmGpq6N',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 18,
					length : 19,
				),
				$client->messageEntityMention(
					offset : 60,
					length : 39,
				),
				$client->messageEntityHashtag(
					offset : 57,
					length : 61,
				),
				$client->messageEntityBotCommand(
					offset : 80,
					length : 7,
				),
				$client->messageEntityUrl(
					offset : 58,
					length : 29,
				),
				$client->messageEntityEmail(
					offset : 41,
					length : 61,
				),
				$client->messageEntityBold(
					offset : 3,
					length : 57,
				),
				$client->messageEntityItalic(
					offset : 53,
					length : 2,
				),
				$client->messageEntityCode(
					offset : 79,
					length : 2,
				),
				$client->messageEntityPre(
					offset : 34,
					length : 64,
					language : 'xu2PjhXzcSnFkAUH',
				),
				$client->messageEntityTextUrl(
					offset : 17,
					length : 52,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 12,
					length : 94,
					user_id : -4912672628494018645,
				),
				$client->inputMessageEntityMentionName(
					offset : 31,
					length : 15,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 71,
					length : 2,
				),
				$client->messageEntityCashtag(
					offset : 23,
					length : 76,
				),
				$client->messageEntityUnderline(
					offset : 41,
					length : 4,
				),
				$client->messageEntityStrike(
					offset : 3,
					length : 23,
				),
				$client->messageEntityBankCard(
					offset : 100,
					length : 79,
				),
				$client->messageEntitySpoiler(
					offset : 7,
					length : 9,
				),
				$client->messageEntityCustomEmoji(
					offset : 73,
					length : 100,
					document_id : -834405026166331042,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 6,
					length : 20,
				),
			),
			views : 1,
			forwards : 30,
			replies : $client->messageReplies(
				comments : true,
				replies : 10,
				replies_pts : 2,
				recent_repliers : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				channel_id : 1696049589372181829,
				max_id : 89,
				read_max_id : 94,
			),
			edit_date : 48,
			post_author : 'a0CS8iTbUtgdBNQ9',
			grouped_id : 6361315933306651361,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'iImLzksdgeZNx0r2',
					reason : 'B1v4sK6f7TDO9pA8',
					text : '3qKj58H17vfcCAuo',
				),
			),
			ttl_period : 25,
			quick_reply_shortcut_id : 55,
			effect : 7185749190838973595,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'haZlPuL8yjHBc74K',
				text : $client->textWithEntities(...),
				hash : -2245571986882340795,
			),
			report_delivery_until_date : 3,
			paid_message_stars : 4923083850001525125,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(...),
				schedule_date : 9,
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
			id : 11,
			from_id : $client->peerUser(
				user_id : 4308983689087169339,
			),
			peer_id : $client->peerUser(
				user_id : 5427039396513440585,
			),
			saved_peer_id : $client->peerUser(
				user_id : -3039291488478986463,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 26,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 91,
				quote_text : '8r7OC2fic5Gk9tQM',
				quote_entities : array(
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
				),
				quote_offset : 70,
				todo_item_id : 35,
			),
			date : 50,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
			ttl_period : 97,
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 97,
				peer_id : $client->peerUser(...),
			),
			pts : 99,
			pts_count : 51,
		),
		$client->updateMessageID(
			id : 84,
			random_id : 933142518060404806,
		),
		$client->updateDeleteMessages(
			messages : array(97),
			pts : 15,
			pts_count : 5,
		),
		$client->updateUserTyping(
			user_id : -2076542730734828684,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 8948235278420045341,
			from_id : $client->peerUser(
				user_id : -8521747668809856450,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -56669134291061499,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : 6544998762347633352,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -4844395362444135205,
			first_name : 'Tak',
			last_name : 'None',
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
		),
		$client->updateNewAuthorization(
			unconfirmed : true,
			hash : -7325830548849500860,
			date : 34,
			device : 'wrSk06lcavqbZ9dK',
			location : '23O5cW1NlPESXB6T',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -5535613824061035009,
				chat_id : 70,
				date : 66,
				bytes : '??z??LiveProto?Z?8',
				file : $client->encryptedFileEmpty(...),
			),
			qts : 17,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 43,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 38,
			),
			date : 38,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 11,
			max_date : 47,
			date : 70,
		),
		$client->updateChatParticipantAdd(
			chat_id : -2933865701231272312,
			user_id : -3941381186999817726,
			inviter_id : -4553028099263257834,
			date : 31,
			version : 76,
		),
		$client->updateChatParticipantDelete(
			chat_id : 5382956920020545532,
			user_id : 4870214455442730689,
			version : 44,
		),
		$client->updateDcOptions(
			dc_options : array(
				$client->dcOption(
					ipv6 : true,
					media_only : true,
					tcpo_only : true,
					cdn : true,
					static : true,
					this_port_only : true,
					id : 21,
					ip_address : '127.0.0.1',
					port : 57,
					secret : '?	?LiveProto?	p?',
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(...),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : $client->boolFalse(...),
				silent : $client->boolFalse(...),
				mute_until : 56,
				ios_sound : $client->notificationSoundDefault(...),
				android_sound : $client->notificationSoundDefault(...),
				other_sound : $client->notificationSoundDefault(...),
				stories_muted : $client->boolFalse(...),
				stories_hide_sender : $client->boolFalse(...),
				stories_ios_sound : $client->notificationSoundDefault(...),
				stories_android_sound : $client->notificationSoundDefault(...),
				stories_other_sound : $client->notificationSoundDefault(...),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 86,
			type : 'ZIDpFWNErYPTdHvX',
			message : 'CMeVSPQ5i9Z8q2AW',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 69,
					length : 20,
				),
				$client->messageEntityMention(
					offset : 21,
					length : 81,
				),
				$client->messageEntityHashtag(
					offset : 21,
					length : 34,
				),
				$client->messageEntityBotCommand(
					offset : 5,
					length : 90,
				),
				$client->messageEntityUrl(
					offset : 40,
					length : 83,
				),
				$client->messageEntityEmail(
					offset : 37,
					length : 95,
				),
				$client->messageEntityBold(
					offset : 62,
					length : 86,
				),
				$client->messageEntityItalic(
					offset : 93,
					length : 89,
				),
				$client->messageEntityCode(
					offset : 83,
					length : 79,
				),
				$client->messageEntityPre(
					offset : 43,
					length : 12,
					language : 'W5mTM2sxUE0qYiS8',
				),
				$client->messageEntityTextUrl(
					offset : 16,
					length : 68,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 13,
					length : 19,
					user_id : 7473823118922975416,
				),
				$client->inputMessageEntityMentionName(
					offset : 18,
					length : 60,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 31,
					length : 60,
				),
				$client->messageEntityCashtag(
					offset : 79,
					length : 55,
				),
				$client->messageEntityUnderline(
					offset : 80,
					length : 62,
				),
				$client->messageEntityStrike(
					offset : 16,
					length : 21,
				),
				$client->messageEntityBankCard(
					offset : 16,
					length : 1,
				),
				$client->messageEntitySpoiler(
					offset : 31,
					length : 33,
				),
				$client->messageEntityCustomEmoji(
					offset : 69,
					length : 81,
					document_id : -8436877407042894102,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 20,
					length : 32,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-8839242002446128478),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-8859413222991663583),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-3398968526262958315),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(234787675769668955),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -6432006054886714344,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 61,
			peer : $client->peerUser(
				user_id : 5733286106503220625,
			),
			max_id : 56,
			still_unread_count : 63,
			pts : 0,
			pts_count : 52,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 1243949733660802722,
			),
			max_id : 80,
			pts : 21,
			pts_count : 66,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 3436060812910938989,
				url : 'https://docs.liveproto.dev',
			),
			pts : 83,
			pts_count : 16,
		),
		$client->updateReadMessagesContents(
			messages : array(76),
			pts : 55,
			pts_count : 50,
			date : 25,
		),
		$client->updateChannelTooLong(
			channel_id : 1866058931701268894,
			pts : 54,
		),
		$client->updateChannel(
			channel_id : 1351399542297315005,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 7,
				peer_id : $client->peerUser(...),
			),
			pts : 72,
			pts_count : 8,
		),
		$client->updateReadChannelInbox(
			folder_id : 28,
			channel_id : 9223001592993827087,
			max_id : 6,
			still_unread_count : 78,
			pts : 60,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 615134261790132837,
			messages : array(1),
			pts : 63,
			pts_count : 19,
		),
		$client->updateChannelMessageViews(
			channel_id : 7393170786914272920,
			id : 17,
			views : 23,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 4743233135587547642,
			user_id : -7777051696387341989,
			is_admin : $client->boolFalse(),
			version : 97,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(...),
				packs : array(
					$client->stickerPack(...),
				),
				keywords : array(
					$client->stickerKeyword(...),
				),
				documents : array(
					$client->documentEmpty(...),
					$client->document(...),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(-9082164550988162350),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 1847117108782540250,
			user_id : 342528480407557098,
			query : '9lLgQs5b2xh0ViNP',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'oYexU9XzW5COEAkI',
		),
		$client->updateBotInlineSend(
			user_id : 3043547219149005778,
			query : 'Gs0xtB7HyfOAlTqh',
			geo : $client->geoPointEmpty(),
			id : 'Ur8LmYENS9vDwuey',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 2,
				id : 6789806847201012198,
				access_hash : 1713882295900377160,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 33,
				peer_id : $client->peerUser(...),
			),
			pts : 25,
			pts_count : 60,
		),
		$client->updateBotCallbackQuery(
			query_id : 7522331306503822888,
			user_id : -7479882586650719017,
			peer : $client->peerUser(
				user_id : -8333583292486027642,
			),
			msg_id : 51,
			chat_instance : -6930968762519506584,
			data : '??G?LiveProtoyi	??',
			game_short_name : 'OBxnVrYzjuCD7A5P',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 14,
				peer_id : $client->peerUser(...),
			),
			pts : 8,
			pts_count : 8,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -7088384062604978138,
			user_id : 7641850082562774298,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 95,
				id : 8786753929081622429,
				access_hash : 8386617805924356113,
			),
			chat_instance : -7633652650265026907,
			data : 'f???%LiveProto?o@?',
			game_short_name : 'nVeHJtkxcqiEMAT8',
		),
		$client->updateReadChannelOutbox(
			channel_id : -7888525875339453184,
			max_id : 6,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 1866571047155811654,
			),
			top_msg_id : 41,
			saved_peer_id : $client->peerUser(
				user_id : 2063922678749267153,
			),
			draft : $client->draftMessageEmpty(
				date : 66,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 4682575661281813026,
			webpage : $client->webPageEmpty(
				id : 8061169788118138950,
				url : 'https://docs.liveproto.dev',
			),
			pts : 60,
			pts_count : 70,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 21,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 40,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 66,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'wY8fzjbtNk46gp2m',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 5081185566058268022,
			data : $client->dataJSON(
				data : 'tQaMbTE6RA3KipNr',
			),
			timeout : 16,
		),
		$client->updateBotShippingQuery(
			query_id : 2068618015505177487,
			user_id : -3081253498798370901,
			payload : '??.?LiveProtoe?J[?',
			shipping_address : $client->postAddress(
				street_line1 : 'Cd3GVTg6JoPnAQue',
				street_line2 : '0uyiYCeGtmBAlX1q',
				city : 'Oi4r7Ssu5kEvzcIN',
				state : 'P1kJYvLQAa8692uX',
				country_iso2 : 'pKYma6E2hJ5S3yQI',
				post_code : 'r3ny2CATUzDiukFE',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 6119391322141569279,
			user_id : -2132268337370579339,
			payload : '??C?LiveProto`[0?',
			info : $client->paymentRequestedInfo(
				name : 'UMj0zugwIfyT9pZH',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'tQ3kU4huBwbNGJml',
			currency : '4CHTNZ8rbsOSB2gM',
			total_amount : -3465957266093853223,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -101994801395063392,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'r9M1J5pe3vmTKPfB',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'v7iwGeWA0fM9mXV2',
				from_version : 10,
				version : 22,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -1685180709728729890,
			top_msg_id : 40,
			saved_peer_id : $client->peerUser(
				user_id : -3382150830301160662,
			),
			messages : array(14),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 5108372797376640834,
			available_min_id : 35,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : -4918960503092423567,
			),
		),
		$client->updateMessagePoll(
			poll_id : 5846441495939430351,
			poll : $client->poll(
				id : 6977610286836872716,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 60,
				close_date : 23,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 11,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'gz8tLxpbhBnEsPyF',
				solution_entities : array(
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
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 1706505920026939549,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 50,
			),
			version : 39,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 40,
				),
			),
			pts : 65,
			pts_count : 4,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 2323036331489584235,
			),
			settings : $client->peerSettings(
				report_spam : true,
				add_contact : true,
				block_contact : true,
				share_contact : true,
				need_contacts_exception : true,
				report_geo : true,
				autoarchived : true,
				invite_members : true,
				request_chat_broadcast : true,
				business_bot_paused : true,
				business_bot_can_reply : true,
				geo_distance : 46,
				request_chat_title : 'C46KukTOWxh9qi5j',
				request_chat_date : 19,
				business_bot_id : -6200669179507144604,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 8624920668079672375,
				registration_month : 'bU6YxT90p2F7NgHk',
				phone_country : '+1234567890',
				name_change_date : 6,
				photo_change_date : 48,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 54,
					distance : 42,
				),
				$client->peerSelfLocated(
					expires : 10,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 9,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 7656150909119910026,
			),
			messages : array(74),
			sent_messages : array(17),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -3666710583704549456,
				access_hash : -4398510923684747150,
				slug : 'hz9HaNjCWBUQEv4s',
				title : 'sWOZjETJPgqCRyNk',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'F1Tp2AJV8bEu3sOl',
				installs_count : 42,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 6411752954471111799,
			),
			msg_id : 31,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 2781310691769132123,
			peer : $client->peerUser(
				user_id : 5446789727638810148,
			),
			options : array('??_OaLiveProto??-j'),
			qts : 78,
		),
		$client->updateDialogFilter(
			id : 3,
			filter : $client->dialogFilter(
				contacts : true,
				non_contacts : true,
				groups : true,
				broadcasts : true,
				bots : true,
				exclude_muted : true,
				exclude_read : true,
				exclude_archived : true,
				title_noanimate : true,
				id : 54,
				title : $client->textWithEntities(...),
				emoticon : 'SGXv4VaEM1CyW7HY',
				color : 91,
				pinned_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				include_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				exclude_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(9),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 3578940836333627412,
			data : 'q?ٓ)LiveProto-?X(W',
		),
		$client->updateChannelMessageForwards(
			channel_id : -875471120547869294,
			id : 90,
			forwards : 48,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -5170481494484139364,
			top_msg_id : 88,
			read_max_id : 35,
			broadcast_id : 7430577514548183408,
			broadcast_post : 4,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 7599189998060566157,
			top_msg_id : 5,
			read_max_id : 27,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 4169355302229660691,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : 2843178076930488084,
			top_msg_id : 1,
			from_id : $client->peerUser(
				user_id : -821639363044618178,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -1990800441803212930,
			),
			messages : array(37),
			pts : 97,
			pts_count : 54,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -4421618818367778523,
			messages : array(35),
			pts : 34,
			pts_count : 81,
		),
		$client->updateChat(
			chat_id : 335761932513426591,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 4562137480913092476,
				access_hash : -5895086546526287441,
			),
			participants : array(
				$client->groupCallParticipant(
					muted : true,
					left : true,
					can_self_unmute : true,
					just_joined : true,
					versioned : true,
					min : true,
					muted_by_you : true,
					volume_by_admin : true,
					self : true,
					video_joined : true,
					peer : $client->peerUser(...),
					date : 40,
					active_date : 30,
					source : 63,
					volume : 1,
					about : 'qPApNT4d0ab3RzX8',
					raise_hand_rating : -1821234972861444785,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 77,
		),
		$client->updateGroupCall(
			chat_id : -5005759048159888388,
			call : $client->groupCallDiscarded(
				id : -2562570202810910596,
				access_hash : 6745567870625568105,
				duration : 54,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -8476703485101770728,
			),
			ttl_period : 53,
		),
		$client->updateChatParticipant(
			chat_id : -5710851743107389998,
			date : 15,
			actor_id : -5465677023613525639,
			user_id : 6322699137456594061,
			prev_participant : $client->chatParticipant(
				user_id : -1159468001780434410,
				inviter_id : -151915940092195141,
				date : 90,
			),
			new_participant : $client->chatParticipant(
				user_id : -1377104921768259184,
				inviter_id : -1707593036952292455,
				date : 83,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'gBmJolxEKvAfDk58',
				admin_id : 243310693363555404,
				date : 4,
				start_date : 72,
				expire_date : 66,
				usage_limit : 13,
				usage : 11,
				requested : 92,
				subscription_expired : 95,
				title : 'Hp4Fh91Jiub6nzVY',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 91,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 6386801571116188175,
			date : 94,
			actor_id : 1454862436921198514,
			user_id : -6633800789079857455,
			prev_participant : $client->channelParticipant(
				user_id : 5401366914357132405,
				date : 30,
				subscription_until_date : 50,
			),
			new_participant : $client->channelParticipant(
				user_id : -1327896644734538122,
				date : 74,
				subscription_until_date : 7,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'mHdSRjqcWwDPrQ4z',
				admin_id : -2003162330770820212,
				date : 88,
				start_date : 18,
				expire_date : 78,
				usage_limit : 45,
				usage : 35,
				requested : 55,
				subscription_expired : 74,
				title : 'LXxG6PpK8c0sDnkb',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 73,
		),
		$client->updateBotStopped(
			user_id : 2153862152779087800,
			date : 7,
			stopped : $client->boolFalse(),
			qts : 2,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'p9kJOXDVmLlG7FQE',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 2561522527482696799,
			),
			bot_id : -1504871812841798172,
			commands : array(
				$client->botCommand(
					command : 'FcGmn3kt8T6XIPUr',
					description : 'Pvi8zTs4E5AlGFor',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 5652722158363746966,
			),
			requests_pending : 21,
			recent_requesters : array(3415216301575633334),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -7167773603218306392,
			),
			date : 62,
			user_id : -7008778347240987608,
			about : 'MVoJ3Ngc8WyhsZH9',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'WHYJvbX8LdmBkhoR',
				admin_id : -8869691973267304002,
				date : 100,
				start_date : 15,
				expire_date : 72,
				usage_limit : 80,
				usage : 10,
				requested : 5,
				subscription_expired : 2,
				title : 'tLplK3IHPYmZBqOF',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 64,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 1484691777623381796,
			),
			msg_id : 100,
			top_msg_id : 89,
			saved_peer_id : $client->peerUser(
				user_id : 7998262101615217644,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 2029917050032585693,
		),
		$client->updateBotMenuButton(
			bot_id : 2563888638375897076,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -4145569205993240532,
			),
			msg_id : 32,
			transcription_id : -5050469623730775416,
			text : 'dvBHuz9Isl75CLjM',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -3352053552020948746,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 3866871071273870755,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 578674570298379620,
			),
			msg_id : 68,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 52,
					h : 83,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 63,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : 4640884598181415757,
			topic_id : 60,
		),
		$client->updateChannelPinnedTopics(
			channel_id : 8871716029874300484,
			order : array(42),
		),
		$client->updateUser(
			user_id : -1002781434871021908,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 5897980934407731825,
			),
			story : $client->storyItemDeleted(
				id : 1,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -8962814662596332703,
			),
			max_id : 48,
		),
		$client->updateStoryID(
			id : 84,
			random_id : 7549953132603633097,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 68,
				cooldown_until_date : 60,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -1466533030476188477,
			),
			story_id : 28,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 7091906060022595591,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'Ax2GJw0MLFyDQTvg',
				user_id : -4254051246067040053,
				giveaway_msg_id : 37,
				date : 97,
				expires : 51,
				used_gift_slug : 'hpoJTtaSfYrWgFEZ',
				multiplier : 83,
				stars : 4353685811005897293,
			),
			qts : 15,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -43342918142511518,
			enabled : $client->boolFalse(),
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -392605408537983142,
			),
			wallpaper : $client->wallPaper(
				id : -2979799939761089359,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -1486683926119120817,
				slug : 'oPLWzsVxnOI1lcTa',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -4598782247956732349,
			),
			msg_id : 97,
			date : 10,
			actor : $client->peerUser(
				user_id : -8766877767121902542,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '6lscgQdn8iCJrbGo',
				),
				$client->reactionCustomEmoji(
					document_id : 8829378099796567868,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '6VXkMBfhYLtc3u1K',
				),
				$client->reactionCustomEmoji(
					document_id : 2081100656615512193,
				),
				$client->reactionPaid(),
			),
			qts : 59,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -2200191804963022032,
			),
			msg_id : 80,
			date : 63,
			reactions : array(
				$client->reactionCount(
					chosen_order : 82,
					reaction : $client->reactionEmpty(...),
					count : 89,
				),
			),
			qts : 21,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 55,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'C9OFMUWfmtnhKAPX',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 27,
					shortcut : 'uR4hCTiDqElNfWcy',
					top_message : 10,
					count : 19,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 8,
				shortcut : 'SmkWhlYg0P53xEyB',
				top_message : 73,
				count : 13,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 77,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 37,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 6,
			messages : array(4),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'i4pSmMcglF8YO75x',
				user_id : -1879343885401400536,
				dc_id : 41,
				date : 96,
				rights : $client->businessBotRights(...),
			),
			qts : 27,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'zkepQ3EL7x41qmaW',
			message : $client->messageEmpty(
				id : 86,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 15,
				peer_id : $client->peerUser(...),
			),
			qts : 10,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : '6OW0VqGLTFkxXa1N',
			message : $client->messageEmpty(
				id : 38,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 51,
				peer_id : $client->peerUser(...),
			),
			qts : 99,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'k8SGqzyUbW5fch9C',
			peer : $client->peerUser(
				user_id : -1181596124620699234,
			),
			messages : array(71),
			qts : 4,
		),
		$client->updateNewStoryReaction(
			story_id : 34,
			peer : $client->peerUser(
				user_id : -8151973389407308410,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -6398544796118468812,
				nanos : 23,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -2762167266387807608,
			user_id : -4817974400138721494,
			connection_id : 'hLzdPWRbDH8vwxet',
			message : $client->messageEmpty(
				id : 9,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 73,
				peer_id : $client->peerUser(...),
			),
			chat_instance : -6343014894377197718,
			data : 'fIȰLiveProtoMo?
?',
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -5324511163758004787,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 60,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 1237586325315295406,
			payload : 'iXxDwFmaKp9vegqG',
			qts : 59,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 26,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -8932143881679165713,
				access_hash : 3540245414735227210,
			),
			sub_chain_id : 65,
			blocks : array('????LiveProto????8'),
			next_offset : 22,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 1022734510351902000,
			saved_peer_id : $client->peerUser(
				user_id : -5687864693217683445,
			),
			read_max_id : 12,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 7414536661404802255,
			saved_peer_id : $client->peerUser(
				user_id : 3680023773331446316,
			),
			read_max_id : 41,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -5577444684926827928,
			saved_peer_id : $client->peerUser(
				user_id : 4807898418311149777,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -4620253581464940583,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -2539347244501772729,
			title : 'Ca6tunZMTpoSOfKm',
			photo : $client->chatPhotoEmpty(),
			participants_count : 11,
			date : 14,
			version : 25,
			migrated_to : $client->inputChannelEmpty(),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 7,
			),
		),
		$client->chatForbidden(
			id : -1870747907693425392,
			title : 'yCZpL7jdAxNPRef8',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : -4339417698054191931,
			access_hash : 7799711595976747325,
			title : 'v4aWVEON8KtQToIP',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 49,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'dH45jGZz7npublwa',
					reason : 'zkMsnI352KtrBj9v',
					text : 'kgduhHEsV3c7ARBn',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 20,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 87,
			),
			participants_count : 44,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 77,
			color : $client->peerColor(
				color : 17,
				background_emoji_id : 7643115526126188166,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : -3840007408038088268,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 50,
			subscription_until_date : 41,
			bot_verification_icon : 1710715142264229666,
			send_paid_messages_stars : -7881288876629154236,
			linked_monoforum_id : 2349878791624877321,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -24319349936236241,
			access_hash : -5687670756848249203,
			title : 'Ea0PTnDvdgJfA6Ls',
			until_date : 69,
		),
	),
	users : array(
		$client->userEmpty(
			id : 9000016354543158338,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			id : -419722362047339472,
			access_hash : -2130735385567946943,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 10,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6KbEH2kcDetA4aX7',
					reason : 'rCFE2ZsoieSYRtQb',
					text : 'GzsZa9t4806qPuFb',
				),
			),
			bot_inline_placeholder : '46a3osMwu9BtODCm',
			lang_code : 'UScg9h01ptFeQHIE',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 62,
			color : $client->peerColor(
				color : 80,
				background_emoji_id : 3027479341765089452,
			),
			profile_color : $client->peerColor(
				color : 67,
				background_emoji_id : 5585387896217059989,
			),
			bot_active_users : 5,
			bot_verification_icon : -8252752391284029535,
			send_paid_messages_stars : -9097347406272444125,
		),
	),
);
```