# updates.difference

**Description** : *Full list of occurred events*

**Layer** : 216

```tl
updates.difference#f49ca0 new_messages:Vector<Message> new_encrypted_messages:Vector<EncryptedMessage> other_updates:Vector<Update> chats:Vector<Chat> users:Vector<User> state:updates.State = updates.Difference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>new_messages</mark> | [`Vector<Message>`](type/Message) | List of new messages |
| <mark>new_encrypted_messages</mark> | [`Vector<EncryptedMessage>`](type/EncryptedMessage) | List of new encrypted secret chat messages |
| <mark>other_updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in events |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in events |
| <mark>state</mark> | [`updates.State`](type/updates.State) | Current state |

---

## Type

[updates.Difference](type/updates.Difference)

---

## Example

```php
$updatesDifference = $client->updates->difference(
	new_messages : array(
		$client->messageEmpty(
			id : 58,
			peer_id : $client->peerUser(
				user_id : -3412650283183387169,
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
			id : 48,
			from_id : $client->peerUser(
				user_id : 327231467330876418,
			),
			from_boosts_applied : 57,
			peer_id : $client->peerUser(
				user_id : 7499613021079277293,
			),
			saved_peer_id : $client->peerUser(
				user_id : -5591931074203715799,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(...),
				from_name : 'wvbg3RE8hdLczkCG',
				date : 80,
				channel_post : 35,
				post_author : 'y2iWFEt5xHdmrZp9',
				saved_from_peer : $client->peerUser(...),
				saved_from_msg_id : 97,
				saved_from_id : $client->peerUser(...),
				saved_from_name : 'WjvgMw3bnCRS6qQJ',
				saved_date : 77,
				psa_type : 'NdKr83nyaAf2GLEV',
			),
			via_bot_id : 670972500084099071,
			via_business_bot_id : 2576189228859140229,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 64,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 31,
				quote_text : 'ICLxOTl95bmPBMGD',
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
				quote_offset : 35,
				todo_item_id : 88,
			),
			date : 19,
			message : 'KaCZ6SY7mPz3u0JG',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 25,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 92,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 19,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 90,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 66,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 69,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 55,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 21,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 90,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 94,
					language : 'Q4mwcE9efkWAKZ18',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 94,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 50,
					user_id : -5330372307076000617,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 64,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 64,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 17,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 20,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 33,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 97,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 89,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 89,
					document_id : 2047410472093281520,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 82,
				),
			),
			views : 75,
			forwards : 81,
			replies : $client->messageReplies(
				comments : true,
				replies : 3,
				replies_pts : 66,
				recent_repliers : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				channel_id : 8978605200780337144,
				max_id : 56,
				read_max_id : 1,
			),
			edit_date : 100,
			post_author : 'ZWThyaPoxRzikmO3',
			grouped_id : -5638389741633349496,
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
					platform : 'xsPTpJIruZ78tNwW',
					reason : 'kmpchzuXq8J2AIZb',
					text : 'bveRFpL23CTSPl91',
				),
			),
			ttl_period : 79,
			quick_reply_shortcut_id : 79,
			effect : -6676172747666377837,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'k5ouvSjhU0IyrbDz',
				text : $client->textWithEntities(...),
				hash : 0,
			),
			report_delivery_until_date : 38,
			paid_message_stars : -5162964103663102421,
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
			id : 28,
			from_id : $client->peerUser(
				user_id : -1815050303423328640,
			),
			peer_id : $client->peerUser(
				user_id : 51794320292033342,
			),
			saved_peer_id : $client->peerUser(
				user_id : 2753238242512082413,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 25,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 100,
				quote_text : 'Wxrgy6TutDZkMqeH',
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
				quote_offset : 5,
				todo_item_id : 47,
			),
			date : 68,
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
			ttl_period : 95,
		),
	),
	new_encrypted_messages : array(
		$client->encryptedMessage(
			random_id : 2948643626509810795,
			chat_id : 46,
			date : 6,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			file : $client->encryptedFileEmpty(),
		),
		$client->encryptedMessageService(
			random_id : -6542132319890120592,
			chat_id : 87,
			date : 53,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 81,
				peer_id : $client->peerUser(...),
			),
			pts : 5,
			pts_count : 36,
		),
		$client->updateMessageID(
			id : 87,
			random_id : -6001820540987403324,
		),
		$client->updateDeleteMessages(
			messages : array(22),
			pts : 46,
			pts_count : 64,
		),
		$client->updateUserTyping(
			user_id : -8343026590767669494,
			top_msg_id : 95,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -1208176421795482258,
			from_id : $client->peerUser(
				user_id : -5511792339019714837,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -8846318208564631628,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : -8328956946366214295,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -236851038828954732,
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
			hash : 0,
			date : 70,
			device : 'Q3721TCR4nm6lVsr',
			location : '679sV8TxEgk3zUB0',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 3518335000875565715,
				chat_id : 55,
				date : 26,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(...),
			),
			qts : 56,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 34,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 32,
			),
			date : 28,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 23,
			max_date : 66,
			date : 46,
		),
		$client->updateChatParticipantAdd(
			chat_id : 3769525536741712714,
			user_id : -2709382035088494297,
			inviter_id : 708221962200148890,
			date : 71,
			version : 43,
		),
		$client->updateChatParticipantDelete(
			chat_id : -7919518849712287438,
			user_id : 2388380011146994871,
			version : 49,
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
					id : 17,
					ip_address : '127.0.0.1',
					port : 18,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(...),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : false,
				mute_until : 42,
				ios_sound : $client->notificationSoundDefault(...),
				android_sound : $client->notificationSoundDefault(...),
				other_sound : $client->notificationSoundDefault(...),
				stories_muted : false,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(...),
				stories_android_sound : $client->notificationSoundDefault(...),
				stories_other_sound : $client->notificationSoundDefault(...),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 67,
			type : 'WZpCcIBF05KkyMT4',
			message : '1RQFlB3WqdzxmaV9',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 92,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 67,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 78,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 80,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 2,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 76,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 71,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 0,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 34,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 27,
					language : 'I1opZAK2xz8mkbPG',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 7,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 88,
					user_id : 6490362952266097716,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 100,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 71,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 77,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 7,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 17,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 95,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 98,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 8,
					document_id : -3906674200894688564,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 2,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(792005771151303954),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(3165840770606495565),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(5465735896281932393),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-5018891287098298990),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -2301997095351669731,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 96,
			peer : $client->peerUser(
				user_id : -4517334767137935370,
			),
			top_msg_id : 48,
			max_id : 34,
			still_unread_count : 70,
			pts : 86,
			pts_count : 27,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -8360948546138314120,
			),
			max_id : 88,
			pts : 70,
			pts_count : 20,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 6257845227112102340,
				url : 'https://docs.liveproto.dev',
			),
			pts : 3,
			pts_count : 38,
		),
		$client->updateReadMessagesContents(
			messages : array(78),
			pts : 30,
			pts_count : 70,
			date : 58,
		),
		$client->updateChannelTooLong(
			channel_id : -8326223055627716332,
			pts : 43,
		),
		$client->updateChannel(
			channel_id : 362217706552222872,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 88,
				peer_id : $client->peerUser(...),
			),
			pts : 86,
			pts_count : 32,
		),
		$client->updateReadChannelInbox(
			folder_id : 41,
			channel_id : 8167138793214588742,
			max_id : 36,
			still_unread_count : 8,
			pts : 73,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 4233695023024603117,
			messages : array(28),
			pts : 20,
			pts_count : 42,
		),
		$client->updateChannelMessageViews(
			channel_id : 3141659208348217379,
			id : 58,
			views : 24,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 7349231303901196549,
			user_id : 6745335681728620482,
			is_admin : false,
			version : 41,
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
			order : array(8605144703013761009),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -7568512761490182350,
			user_id : 5771141629237360387,
			query : 'dUTM8XA1g9ESuFzR',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'K0uVrUzORZMgSXmF',
		),
		$client->updateBotInlineSend(
			user_id : 642964351504131444,
			query : 'p2TeYj5rzBAwcdkh',
			geo : $client->geoPointEmpty(),
			id : 'ZVqBmK0GIcdSYEeL',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 2,
				id : -1770744090496235297,
				access_hash : 2285645039438660373,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 12,
				peer_id : $client->peerUser(...),
			),
			pts : 26,
			pts_count : 60,
		),
		$client->updateBotCallbackQuery(
			query_id : 4782670977691096859,
			user_id : 2543599854035944336,
			peer : $client->peerUser(
				user_id : -1731738996346996829,
			),
			msg_id : 61,
			chat_instance : 382520887041040990,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'kwDc2gOb9W1o7ev0',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 35,
				peer_id : $client->peerUser(...),
			),
			pts : 36,
			pts_count : 56,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 2394573394796922355,
			user_id : 4006509009616309314,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 53,
				id : 7279817952438021084,
				access_hash : 7060631540320763788,
			),
			chat_instance : 6764263479265646744,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 's0gb2jGwyla6tx8o',
		),
		$client->updateReadChannelOutbox(
			channel_id : -3984595484041677599,
			max_id : 19,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 6308743946198631246,
			),
			top_msg_id : 25,
			saved_peer_id : $client->peerUser(
				user_id : -8649634175663645513,
			),
			draft : $client->draftMessageEmpty(
				date : 99,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -2287229780606391816,
			webpage : $client->webPageEmpty(
				id : -2257899100152849546,
				url : 'https://docs.liveproto.dev',
			),
			pts : 96,
			pts_count : 80,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 8,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 60,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 57,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'n2FtTkq5gidIxZlS',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -2510270688664278851,
			data : $client->dataJSON(
				data : 'xAKF2ztcHMqSUGsX',
			),
			timeout : 15,
		),
		$client->updateBotShippingQuery(
			query_id : -4839791661719222982,
			user_id : 4731254093873896517,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'uUe9Ip0NFkoKgPfx',
				street_line2 : 'e5VrZ1A6Xz8ikcKn',
				city : 'sNdcIL3yHFqzogQT',
				state : 'APz5DqIYC7Tl61Kg',
				country_iso2 : '8nFwAY0Uzgktvxyc',
				post_code : 'sQfX1ZdTFtS6zrb0',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -6523938117027935069,
			user_id : 2805639038255001116,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'p9Haki20oqYK1WUX',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'zeTlwmfRXNiyh3a4',
			currency : 'doRWVGszq78EMH6f',
			total_amount : -7146383324665943406,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 9189366516284111553,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : '95KTolkZxCSLYqGN',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'RrEgCfWG0S8nqVYN',
				from_version : 45,
				version : 21,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 4994134902428839458,
			top_msg_id : 96,
			saved_peer_id : $client->peerUser(
				user_id : -2478402251418041463,
			),
			messages : array(98),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -6299448887205455679,
			available_min_id : 31,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : 4922997586345012189,
			),
		),
		$client->updateMessagePoll(
			poll_id : 3089806983491007926,
			poll : $client->poll(
				id : 4905666756632174176,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 64,
				close_date : 13,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 76,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'e7C5TxQsWqS396Pk',
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
				user_id : 2643789877108039683,
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
				until_date : 12,
			),
			version : 14,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 17,
				),
			),
			pts : 1,
			pts_count : 8,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -5887614976440948318,
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
				geo_distance : 31,
				request_chat_title : 'atbqU75xeRZKuQdv',
				request_chat_date : 9,
				business_bot_id : -8750285062730399817,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 8416254723344841692,
				registration_month : 'NghAFur5lbYS3yxB',
				phone_country : '+1234567890',
				name_change_date : 41,
				photo_change_date : 25,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 84,
					distance : 27,
				),
				$client->peerSelfLocated(
					expires : 80,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 73,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 2113295499619685006,
			),
			messages : array(73),
			sent_messages : array(16),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -2361381206007294601,
				access_hash : 4639485133832018908,
				slug : 'm1w0WpqxBcOvlNg2',
				title : 'HaPpWocGS9QATdwE',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : '8XV2iB3gbjtkJxfq',
				installs_count : 30,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -8561599845275884017,
			),
			msg_id : 56,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 5404332851457082592,
			peer : $client->peerUser(
				user_id : 3730419880050341836,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 13,
		),
		$client->updateDialogFilter(
			id : 80,
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
				id : 79,
				title : $client->textWithEntities(...),
				emoticon : 'jlTUoq9iDwMuLpFR',
				color : 11,
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
			order : array(79),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -967400881483796953,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : 4488281391979693480,
			id : 13,
			forwards : 91,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 65798917420379859,
			top_msg_id : 47,
			read_max_id : 24,
			broadcast_id : -7589047537822204964,
			broadcast_post : 15,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 8661602262723481478,
			top_msg_id : 26,
			read_max_id : 96,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -3187490671566523613,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -1042991997130943349,
			top_msg_id : 63,
			from_id : $client->peerUser(
				user_id : -7342989678723703372,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -6580313028344967216,
			),
			messages : array(29),
			pts : 84,
			pts_count : 4,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 4304650699092741550,
			messages : array(5),
			pts : 93,
			pts_count : 5,
		),
		$client->updateChat(
			chat_id : -1265786176407943007,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 8871692527617688583,
				access_hash : 3051221904587227894,
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
					date : 19,
					active_date : 40,
					source : 82,
					volume : 4,
					about : 'w4KA0PWBtUO78piH',
					raise_hand_rating : -8929267347125332011,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 72,
		),
		$client->updateGroupCall(
			chat_id : 5079943902075713475,
			call : $client->groupCallDiscarded(
				id : -1119540464365165367,
				access_hash : -6720819836016153537,
				duration : 84,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -6350514265485007429,
			),
			ttl_period : 8,
		),
		$client->updateChatParticipant(
			chat_id : 4649797301619596501,
			date : 21,
			actor_id : 6780950201833940840,
			user_id : -5412354976844706503,
			prev_participant : $client->chatParticipant(
				user_id : 628370080175200205,
				inviter_id : 1421037022880245570,
				date : 75,
			),
			new_participant : $client->chatParticipant(
				user_id : -861785079838426121,
				inviter_id : -4035815186108847351,
				date : 73,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'ULQ2S8xqFh4gM7je',
				admin_id : -6132806004485319496,
				date : 7,
				start_date : 40,
				expire_date : 96,
				usage_limit : 10,
				usage : 92,
				requested : 56,
				subscription_expired : 5,
				title : '7rRK6dZY5juvGgEU',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 94,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -7402828740598226463,
			date : 100,
			actor_id : 7806768915249074743,
			user_id : -3616946471335205570,
			prev_participant : $client->channelParticipant(
				user_id : 462058454172099518,
				date : 73,
				subscription_until_date : 78,
			),
			new_participant : $client->channelParticipant(
				user_id : 3071267070452699205,
				date : 82,
				subscription_until_date : 27,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'MuK4frsYzNIRHPpD',
				admin_id : 4701713069644853823,
				date : 99,
				start_date : 51,
				expire_date : 3,
				usage_limit : 61,
				usage : 68,
				requested : 59,
				subscription_expired : 1,
				title : 'RExVQTM2HUoq4hf0',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 97,
		),
		$client->updateBotStopped(
			user_id : 4952986758735240030,
			date : 23,
			stopped : false,
			qts : 40,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'vkFGYJy4SeW6Hasz',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 1515145990395756218,
			),
			bot_id : 1749046360108785034,
			commands : array(
				$client->botCommand(
					command : 's1pcJ709y8Lm5K3z',
					description : 'QbcFR5NXgIvuTOmw',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 1492817025662687315,
			),
			requests_pending : 21,
			recent_requesters : array(-217204462785666603),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -4765479436354888623,
			),
			date : 3,
			user_id : -8473376082313422686,
			about : 'X73QcUvlSJ912pYe',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'oZNnXTG1paerwUv7',
				admin_id : 4273639328018907843,
				date : 72,
				start_date : 57,
				expire_date : 63,
				usage_limit : 56,
				usage : 44,
				requested : 81,
				subscription_expired : 94,
				title : 'RqvkgNpSnChXOBEr',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 24,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 5821643481403365665,
			),
			msg_id : 36,
			top_msg_id : 44,
			saved_peer_id : $client->peerUser(
				user_id : -8621787126022243966,
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
			query_id : -4221715434008959513,
		),
		$client->updateBotMenuButton(
			bot_id : -3405304992540973748,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 4493502066495639106,
			),
			msg_id : 25,
			transcription_id : 9048867885045104874,
			text : 'ml61ZgQKJXrfFLjY',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -1754918814677056281,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -3694921302611226695,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 1839197165069311071,
			),
			msg_id : 43,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 42,
					h : 93,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 22,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : 5181566422394723895,
			topic_id : 49,
		),
		$client->updateChannelPinnedTopics(
			channel_id : -5632358768435581343,
			order : array(51),
		),
		$client->updateUser(
			user_id : -5000978890992257938,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -4158199495554804633,
			),
			story : $client->storyItemDeleted(
				id : 66,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -6307908880201932088,
			),
			max_id : 39,
		),
		$client->updateStoryID(
			id : 33,
			random_id : 7806557543075247105,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 1,
				cooldown_until_date : 97,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 3995391656275883751,
			),
			story_id : 15,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -2060970553776062013,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'B54cIKWrOp2TZsnA',
				user_id : 1720298731982849205,
				giveaway_msg_id : 49,
				date : 57,
				expires : 27,
				used_gift_slug : 'udIiWT8RMJNvkaXf',
				multiplier : 48,
				stars : 8472050299887924337,
			),
			qts : 2,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -7458106406654117181,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -9151561349328403346,
			),
			wallpaper : $client->wallPaper(
				id : 3774731231598413848,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -1673418788967829785,
				slug : 'DT1BmQLpUafVGsdo',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 7063569165947762325,
			),
			msg_id : 7,
			date : 18,
			actor : $client->peerUser(
				user_id : 3198311691381277121,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'Zi0PtkjuDW17LbCU',
				),
				$client->reactionCustomEmoji(
					document_id : 6275410076613923621,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'KrfgvV3YaFzLNxlX',
				),
				$client->reactionCustomEmoji(
					document_id : -7958638697939321012,
				),
				$client->reactionPaid(),
			),
			qts : 97,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -5367617760565367187,
			),
			msg_id : 51,
			date : 19,
			reactions : array(
				$client->reactionCount(
					chosen_order : 76,
					reaction : $client->reactionEmpty(...),
					count : 70,
				),
			),
			qts : 20,
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
					folder_id : 89,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : '3CSMHQ2ZLxUIkube',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 34,
					shortcut : 'DKRB0VZMjUkXWxHI',
					top_message : 3,
					count : 20,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 87,
				shortcut : 'Xomh83uyHg4ER6wk',
				top_message : 88,
				count : 0,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 13,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 86,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 9,
			messages : array(16),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'sJdITgFY7mRrZ6Ko',
				user_id : 3065318985016606911,
				dc_id : 94,
				date : 84,
				rights : $client->businessBotRights(...),
			),
			qts : 9,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : '5AqmF78H2caMRCST',
			message : $client->messageEmpty(
				id : 92,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 84,
				peer_id : $client->peerUser(...),
			),
			qts : 41,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'xM1gY8VrfeBhqRni',
			message : $client->messageEmpty(
				id : 23,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 80,
				peer_id : $client->peerUser(...),
			),
			qts : 5,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'AN5OnxbdW4Q6PvLB',
			peer : $client->peerUser(
				user_id : 3556298199729029807,
			),
			messages : array(80),
			qts : 86,
		),
		$client->updateNewStoryReaction(
			story_id : 29,
			peer : $client->peerUser(
				user_id : -6652786165133236103,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 4183439821859799807,
				nanos : 15,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -4728293498182317001,
			user_id : -131535463385467621,
			connection_id : 'NpzsALhDTGIE7jgF',
			message : $client->messageEmpty(
				id : 89,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 38,
				peer_id : $client->peerUser(...),
			),
			chat_instance : -5618309517738542086,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -1889487379342107035,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 36,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 2187038559327711993,
			payload : 'mZVogPJsvw6eEynO',
			qts : 77,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 91,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -7371640155968213407,
				access_hash : -2946645674937223736,
			),
			sub_chain_id : 92,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 77,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 9127177575247278551,
			saved_peer_id : $client->peerUser(
				user_id : 5953823282021673493,
			),
			read_max_id : 74,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 6223744749553855817,
			saved_peer_id : $client->peerUser(
				user_id : -7804168082418142423,
			),
			read_max_id : 72,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 7724072780296600844,
			saved_peer_id : $client->peerUser(
				user_id : 1438691802484217829,
			),
		),
		$client->updatePinnedForumTopic(
			pinned : 86,
			peer : $client->peerUser(
				user_id : -8733455020800257009,
			),
			topic_id : 81,
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : 8019665951517951671,
				access_hash : -6006195909427806760,
			),
			from_id : $client->peerUser(
				user_id : 8906979178009424428,
			),
			random_id : 8870177786909506474,
			message : $client->textWithEntities(
				text : 'x8XuwC0bE3NfBPeA',
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
				),
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : 1119523244239279204,
			text : 'eRGYQoT8a5lqpX3P',
		),
		$client->updateBotSubscriptionExpire(
			user_id : 2854368920856412211,
			payload : 'U9Kqi8JNy5hI0gv2',
			until_date : 39,
			qts : 89,
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : -8639307479791076668,
				access_hash : 4993268118407244568,
			),
			from_id : $client->peerUser(
				user_id : 911973996469162093,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : 6987335067654900726,
			),
			order : array(20),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -4370528417697007902,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6545103456792539150,
			title : '3SVcw5ovHFq9EK0r',
			photo : $client->chatPhotoEmpty(),
			participants_count : 69,
			date : 88,
			version : 90,
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
				until_date : 57,
			),
		),
		$client->chatForbidden(
			id : 3570091834138854496,
			title : 'Z4AjN2JPBhgOURHi',
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
			id : -3273095519313128579,
			access_hash : -6587177217422372969,
			title : 'RD02FnosJ8lNS9jt',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 24,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'mnEX0YJhVBrb5Il7',
					reason : 'hks2FONtJgzwmAU5',
					text : 'YBGpU49qTobzSLd8',
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
				until_date : 63,
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
				until_date : 57,
			),
			participants_count : 87,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 47,
			color : $client->peerColor(
				color : 30,
				background_emoji_id : 5765868239017722823,
			),
			profile_color : $client->peerColor(
				color : 64,
				background_emoji_id : -3246641699970142450,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 91,
			subscription_until_date : 51,
			bot_verification_icon : -8741621636823299430,
			send_paid_messages_stars : 8093847688771693042,
			linked_monoforum_id : 2183859164863180795,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 9037944487248292368,
			access_hash : 3987156080360749677,
			title : 'UeDgOGEjCib12Xdo',
			until_date : 52,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1012196665772302266,
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
			bot_forum_view : true,
			id : 2857366537557794691,
			access_hash : 6424932438699713901,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 66,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '3zosXmVQjDcaMnb7',
					reason : '5PZoxGAmDhgfa0bF',
					text : 'KDf4CEQcPiZFse1O',
				),
			),
			bot_inline_placeholder : 'qr1RuXoOlHs82pTd',
			lang_code : 'MSbfUJhPNG1gjyDk',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 20,
			color : $client->peerColor(
				color : 77,
				background_emoji_id : -8127171853086871340,
			),
			profile_color : $client->peerColor(
				color : 8,
				background_emoji_id : -7102161918538569602,
			),
			bot_active_users : 25,
			bot_verification_icon : 3782805616753675155,
			send_paid_messages_stars : 2958109660924480697,
		),
	),
	state : $client->updates->state(
		pts : 46,
		qts : 44,
		date : 27,
		seq : 53,
		unread_count : 52,
	),
);
```