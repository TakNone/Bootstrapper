# updates.differenceSlice

**Description** : *Incomplete list of occurred events*

**Layer** : 216

```tl
updates.differenceSlice#a8fb1981 new_messages:Vector<Message> new_encrypted_messages:Vector<EncryptedMessage> other_updates:Vector<Update> chats:Vector<Chat> users:Vector<User> intermediate_state:updates.State = updates.Difference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>new_messages</mark> | [`Vector<Message>`](type/Message) | List of new messages |
| <mark>new_encrypted_messages</mark> | [`Vector<EncryptedMessage>`](type/EncryptedMessage) | New messages from the encrypted event sequence |
| <mark>other_updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in events |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in events |
| <mark>intermediate_state</mark> | [`updates.State`](type/updates.State) | Intermediary state |

---

## Type

[updates.Difference](type/updates.Difference)

---

## Example

```php
$updatesDifference = $client->updates->differenceSlice(
	new_messages : array(
		$client->messageEmpty(
			id : 52,
			peer_id : $client->peerUser(
				user_id : -2553217938980928082,
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
			id : 8,
			from_id : $client->peerUser(
				user_id : -7937806231905581670,
			),
			from_boosts_applied : 28,
			peer_id : $client->peerUser(
				user_id : -2151559282519756946,
			),
			saved_peer_id : $client->peerUser(
				user_id : -6091145912109355812,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(...),
				from_name : 'kE70Z8SKHiP3NcaI',
				date : 2,
				channel_post : 57,
				post_author : 'wFbaj0vsUc74HGr9',
				saved_from_peer : $client->peerUser(...),
				saved_from_msg_id : 3,
				saved_from_id : $client->peerUser(...),
				saved_from_name : '73rl95scVajgu6US',
				saved_date : 30,
				psa_type : 'f8hdMsNyiUPj7XBv',
			),
			via_bot_id : -3073670192442832155,
			via_business_bot_id : 2919558605792155839,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 98,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 38,
				quote_text : 'Gun2E5TQd7KUiRjZ',
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
				quote_offset : 82,
				todo_item_id : 77,
			),
			date : 12,
			message : 'q5RtfY1HJZ4xvGuF',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 36,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 72,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 25,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 47,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 58,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 65,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 24,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 81,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 57,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 9,
					language : 'XF7E0PtVSGAQZYIq',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 44,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 86,
					user_id : 75515662899088396,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 54,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 27,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 50,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 14,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 54,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 41,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 7,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 41,
					document_id : -2966470871232146878,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 44,
				),
			),
			views : 73,
			forwards : 40,
			replies : $client->messageReplies(
				comments : true,
				replies : 95,
				replies_pts : 15,
				recent_repliers : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				channel_id : 3947000457939508013,
				max_id : 28,
				read_max_id : 57,
			),
			edit_date : 30,
			post_author : 'l7G58iJoseQUP3C6',
			grouped_id : -3981003540992813231,
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
					platform : 'UfZzE1xDo9tjaBHp',
					reason : 'bYdpjT7Mh6qV3StO',
					text : 'ucbhAe7YlQ62jtvr',
				),
			),
			ttl_period : 79,
			quick_reply_shortcut_id : 32,
			effect : 8085660817997147715,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'b5SgaOfMKdP8tLpG',
				text : $client->textWithEntities(...),
				hash : 0,
			),
			report_delivery_until_date : 92,
			paid_message_stars : -7303966025428369307,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(...),
				schedule_date : 42,
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
			id : 78,
			from_id : $client->peerUser(
				user_id : -2534114570208308719,
			),
			peer_id : $client->peerUser(
				user_id : -1339906583972391381,
			),
			saved_peer_id : $client->peerUser(
				user_id : -1707195145143029451,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 96,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 21,
				quote_text : 'T4EXVqSYrxJai0OL',
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
				quote_offset : 22,
				todo_item_id : 41,
			),
			date : 99,
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
			ttl_period : 35,
		),
	),
	new_encrypted_messages : array(
		$client->encryptedMessage(
			random_id : 4575201285210017491,
			chat_id : 34,
			date : 79,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			file : $client->encryptedFileEmpty(),
		),
		$client->encryptedMessageService(
			random_id : -636935374282070889,
			chat_id : 72,
			date : 61,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 41,
				peer_id : $client->peerUser(...),
			),
			pts : 36,
			pts_count : 81,
		),
		$client->updateMessageID(
			id : 73,
			random_id : -3095907851234214395,
		),
		$client->updateDeleteMessages(
			messages : array(9),
			pts : 4,
			pts_count : 66,
		),
		$client->updateUserTyping(
			user_id : 2004535272101714687,
			top_msg_id : 4,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -1184888943716090161,
			from_id : $client->peerUser(
				user_id : -4761601200949486264,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 3568198357960056678,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : 8682485106340352059,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 1364446487534592325,
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
			date : 71,
			device : 'morUl5ptbwQfqhCs',
			location : 'dWxiTruOSFZPUjo9',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 3512606786139454396,
				chat_id : 50,
				date : 54,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(...),
			),
			qts : 81,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 100,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 98,
			),
			date : 17,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 5,
			max_date : 68,
			date : 39,
		),
		$client->updateChatParticipantAdd(
			chat_id : 2897885560136349719,
			user_id : 8720968762549554740,
			inviter_id : -3877410646739559708,
			date : 82,
			version : 77,
		),
		$client->updateChatParticipantDelete(
			chat_id : 3303336042994655835,
			user_id : -5760915139742840217,
			version : 27,
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
					id : 73,
					ip_address : '127.0.0.1',
					port : 81,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(...),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : true,
				mute_until : 20,
				ios_sound : $client->notificationSoundDefault(...),
				android_sound : $client->notificationSoundDefault(...),
				other_sound : $client->notificationSoundDefault(...),
				stories_muted : true,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(...),
				stories_android_sound : $client->notificationSoundDefault(...),
				stories_other_sound : $client->notificationSoundDefault(...),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 21,
			type : 'LJfYFuXBVI5vUCGN',
			message : 'xJ4Ffy6soejUCKNG',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 22,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 23,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 37,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 34,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 91,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 52,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 18,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 37,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 100,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 86,
					language : 'k4IU2nmB8FQSzh6V',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 13,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 58,
					user_id : -219802438801069623,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 67,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 23,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 53,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 10,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 80,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 18,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 32,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 8,
					document_id : -5274555333460431381,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 11,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-7337607177881046461),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(2515362986358596318),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(6634804959946841953),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-3775657917133615156),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 5675414277103357400,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 69,
			peer : $client->peerUser(
				user_id : -8968693973359226139,
			),
			top_msg_id : 91,
			max_id : 59,
			still_unread_count : 74,
			pts : 72,
			pts_count : 91,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 2676779804809117965,
			),
			max_id : 88,
			pts : 35,
			pts_count : 83,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -4027597814216165186,
				url : 'https://docs.liveproto.dev',
			),
			pts : 72,
			pts_count : 47,
		),
		$client->updateReadMessagesContents(
			messages : array(14),
			pts : 70,
			pts_count : 63,
			date : 48,
		),
		$client->updateChannelTooLong(
			channel_id : -5625772414250357846,
			pts : 100,
		),
		$client->updateChannel(
			channel_id : 796333246919035606,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 34,
				peer_id : $client->peerUser(...),
			),
			pts : 91,
			pts_count : 50,
		),
		$client->updateReadChannelInbox(
			folder_id : 17,
			channel_id : 8823158387690292803,
			max_id : 45,
			still_unread_count : 0,
			pts : 3,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 1044130045798164617,
			messages : array(70),
			pts : 49,
			pts_count : 8,
		),
		$client->updateChannelMessageViews(
			channel_id : 4870761735268246714,
			id : 38,
			views : 68,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 8756246562375667123,
			user_id : 5637770138466310824,
			is_admin : false,
			version : 100,
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
			order : array(-994506538400116850),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 8711119474128201502,
			user_id : -2051191739539059776,
			query : 'zrQAuisyLeSvOlC1',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'j8a97CKgDYcNMRbJ',
		),
		$client->updateBotInlineSend(
			user_id : 8625236210806006572,
			query : '4Gpv5jfilWP2uVxT',
			geo : $client->geoPointEmpty(),
			id : 'aq2bV58WUvn3NoKO',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 82,
				id : -8260141154253351725,
				access_hash : 5981364590409183252,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 66,
				peer_id : $client->peerUser(...),
			),
			pts : 88,
			pts_count : 95,
		),
		$client->updateBotCallbackQuery(
			query_id : -8212743197715480574,
			user_id : -8701668676889067910,
			peer : $client->peerUser(
				user_id : -575565539139473235,
			),
			msg_id : 76,
			chat_instance : 293553861870927851,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : '6dmF5XYzJPlrpVHU',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 36,
				peer_id : $client->peerUser(...),
			),
			pts : 54,
			pts_count : 4,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 4389366735750263240,
			user_id : -6397226371221422132,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 1,
				id : -2185497607969101120,
				access_hash : -5511352215629483434,
			),
			chat_instance : 3246451739905651720,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'nmk6a1tzve5i0wxs',
		),
		$client->updateReadChannelOutbox(
			channel_id : -16250882204139412,
			max_id : 15,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 6710787457802550634,
			),
			top_msg_id : 18,
			saved_peer_id : $client->peerUser(
				user_id : 4703501669370395897,
			),
			draft : $client->draftMessageEmpty(
				date : 69,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 3752159766598135209,
			webpage : $client->webPageEmpty(
				id : -4347260396683615659,
				url : 'https://docs.liveproto.dev',
			),
			pts : 90,
			pts_count : 91,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 3,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 15,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 81,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'wMb1rvnJyFVAKl4i',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 4085395958361473676,
			data : $client->dataJSON(
				data : 'V8Ej0mhQWLOKJctr',
			),
			timeout : 11,
		),
		$client->updateBotShippingQuery(
			query_id : 1735300236767461678,
			user_id : 3046800797546358847,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : '0GAPRJqrZaQomlBk',
				street_line2 : 'rsj38SJHqEuvdcTz',
				city : 'X9yJYIGv7Fu8wtAW',
				state : 'wgnZPysSObom3QYc',
				country_iso2 : 'eWlofVEYyjAtLPZ2',
				post_code : 'XI8uqMNw5S70vZjs',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 7778001382336258760,
			user_id : 6255037453437953389,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'KM5hlDVXtmGgLHdw',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'mVnKQoCg8OZHsNDR',
			currency : 'pMbxoWhc0RDtYQjv',
			total_amount : -5850658765350654254,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 3912394203747788742,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'k2I8JZMjuA6YNzyV',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'JEmuj5fkOQxD69zo',
				from_version : 82,
				version : 19,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -1636506222343159800,
			top_msg_id : 84,
			saved_peer_id : $client->peerUser(
				user_id : -7884689731403600313,
			),
			messages : array(55),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -3300730561305824343,
			available_min_id : 69,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : -2146479401624404454,
			),
		),
		$client->updateMessagePoll(
			poll_id : -2686618977186814745,
			poll : $client->poll(
				id : -5468978571582952303,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 38,
				close_date : 84,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 40,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'gbpkj2L7VR1AFqXZ',
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
				user_id : -3779637530576418510,
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
				until_date : 53,
			),
			version : 25,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 68,
				),
			),
			pts : 35,
			pts_count : 20,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -8493144728091696072,
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
				geo_distance : 19,
				request_chat_title : 'yzNUrPRtZj0boLmh',
				request_chat_date : 66,
				business_bot_id : 3007062937735172826,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -1681077443608752596,
				registration_month : '5lMdqpf0Xa6BogWF',
				phone_country : '+1234567890',
				name_change_date : 28,
				photo_change_date : 19,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 70,
					distance : 94,
				),
				$client->peerSelfLocated(
					expires : 20,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 23,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 7758404897458401071,
			),
			messages : array(16),
			sent_messages : array(92),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -2202619469836315213,
				access_hash : 5610927342109199870,
				slug : 'H3B2eVmNZzuj0sTv',
				title : '71RPWnCpedibZs92',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'CGVp4T2l8YkcWbfr',
				installs_count : 42,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -7974544239701612219,
			),
			msg_id : 45,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -6760138821868692879,
			peer : $client->peerUser(
				user_id : -5454155851873752371,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 59,
		),
		$client->updateDialogFilter(
			id : 41,
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
				id : 44,
				title : $client->textWithEntities(...),
				emoticon : 'frxaNJKOZ9YTEP5t',
				color : 22,
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
			order : array(5),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 7125633793411443829,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : 8093186863797490114,
			id : 76,
			forwards : 89,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 7360294186077388040,
			top_msg_id : 43,
			read_max_id : 58,
			broadcast_id : 6595417001431364016,
			broadcast_post : 67,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -7838274237167003029,
			top_msg_id : 43,
			read_max_id : 65,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -4411747065413389638,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -7466387939910393873,
			top_msg_id : 32,
			from_id : $client->peerUser(
				user_id : 6005869753784357720,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 26203650197302167,
			),
			messages : array(72),
			pts : 21,
			pts_count : 22,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 7512996224733775787,
			messages : array(76),
			pts : 28,
			pts_count : 93,
		),
		$client->updateChat(
			chat_id : 6415119160591355210,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -3891701423324130460,
				access_hash : -5850530061931182042,
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
					date : 28,
					active_date : 76,
					source : 2,
					volume : 54,
					about : 'JoRDjOcLs39veEzK',
					raise_hand_rating : -2052475965109002091,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 40,
		),
		$client->updateGroupCall(
			chat_id : 3209784308701524771,
			call : $client->groupCallDiscarded(
				id : -3927167448385874508,
				access_hash : 3047444957513919530,
				duration : 34,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 8946452282923636801,
			),
			ttl_period : 37,
		),
		$client->updateChatParticipant(
			chat_id : 5466436835025115659,
			date : 56,
			actor_id : -6691564484019920468,
			user_id : 4277337298704111374,
			prev_participant : $client->chatParticipant(
				user_id : 2328221254136076779,
				inviter_id : -4030453248985848445,
				date : 33,
			),
			new_participant : $client->chatParticipant(
				user_id : -2674905326070041955,
				inviter_id : 6446515175527167075,
				date : 13,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'F7l8DbJmdLT0ARvI',
				admin_id : -3216695019733577469,
				date : 64,
				start_date : 96,
				expire_date : 92,
				usage_limit : 79,
				usage : 30,
				requested : 18,
				subscription_expired : 45,
				title : 'szN0WtF7ufvUVHC5',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 25,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 5216807174897763243,
			date : 36,
			actor_id : 8117054083900585727,
			user_id : -33083816479832434,
			prev_participant : $client->channelParticipant(
				user_id : -2013522644301506833,
				date : 84,
				subscription_until_date : 29,
			),
			new_participant : $client->channelParticipant(
				user_id : 8750226649949832456,
				date : 44,
				subscription_until_date : 44,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'wvrfPdDeVJCaiOBS',
				admin_id : 4007702678034744165,
				date : 15,
				start_date : 5,
				expire_date : 53,
				usage_limit : 33,
				usage : 80,
				requested : 83,
				subscription_expired : 13,
				title : 'EPZ0JUTLhvNAsWSf',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 77,
		),
		$client->updateBotStopped(
			user_id : -8582222783089806271,
			date : 36,
			stopped : false,
			qts : 98,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'RpnVdNtIfMX3SUTQ',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -5103386010336326326,
			),
			bot_id : 4053743342824776069,
			commands : array(
				$client->botCommand(
					command : 'Q9GHR6ZkI02NxicK',
					description : 'wENHvzSc4x2iTbMA',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -8026709245580432916,
			),
			requests_pending : 23,
			recent_requesters : array(5420186746013748225),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 7732687602439127229,
			),
			date : 70,
			user_id : -1300867927394693220,
			about : 'LtRaYf7iTvZQcW0w',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'MjQe5tPJRdUp9v8I',
				admin_id : 1402776116712649088,
				date : 65,
				start_date : 35,
				expire_date : 62,
				usage_limit : 12,
				usage : 84,
				requested : 41,
				subscription_expired : 19,
				title : 'EVHuGWfPOFRjgYI3',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 6,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 9184253493881906761,
			),
			msg_id : 59,
			top_msg_id : 33,
			saved_peer_id : $client->peerUser(
				user_id : 3932022143534248087,
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
			query_id : -8750040222899884779,
		),
		$client->updateBotMenuButton(
			bot_id : 376477576319571692,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -1761424102970448090,
			),
			msg_id : 61,
			transcription_id : -518572368625403444,
			text : 'rSaZlkRmAd9cEX70',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 2401479716801778999,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -1480813462071877592,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -2364292977433709541,
			),
			msg_id : 51,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 55,
					h : 100,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 37,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : 6186575729336753878,
			topic_id : 80,
		),
		$client->updateChannelPinnedTopics(
			channel_id : -5166898209379741768,
			order : array(45),
		),
		$client->updateUser(
			user_id : -741257247589962752,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -7155835741113273500,
			),
			story : $client->storyItemDeleted(
				id : 16,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : 898522785458854831,
			),
			max_id : 62,
		),
		$client->updateStoryID(
			id : 27,
			random_id : 2373045810725322421,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 1,
				cooldown_until_date : 6,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -9135654926608274066,
			),
			story_id : 50,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 1859922685360230453,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'Y8HUtL7dfqX1GoEl',
				user_id : -5098867134092703766,
				giveaway_msg_id : 51,
				date : 15,
				expires : 93,
				used_gift_slug : '9Ldhk6C8mVUixGwN',
				multiplier : 61,
				stars : 3074177140685748988,
			),
			qts : 83,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -6569031724584173300,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 4520410040882837186,
			),
			wallpaper : $client->wallPaper(
				id : 7166480972264741632,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 5096919836725178262,
				slug : '5ez6tkdHnLvPBT1O',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -1240074636333566512,
			),
			msg_id : 98,
			date : 4,
			actor : $client->peerUser(
				user_id : 2759622330711096791,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'oWu06VE8CQqaZ17I',
				),
				$client->reactionCustomEmoji(
					document_id : 9121808927819241471,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'uqFGJOI5cVotwkbB',
				),
				$client->reactionCustomEmoji(
					document_id : -3507859421535666026,
				),
				$client->reactionPaid(),
			),
			qts : 72,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -823019769318538533,
			),
			msg_id : 57,
			date : 19,
			reactions : array(
				$client->reactionCount(
					chosen_order : 77,
					reaction : $client->reactionEmpty(...),
					count : 30,
				),
			),
			qts : 75,
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
					folder_id : 54,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'Gl3WsoYyCAQLjvpn',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 80,
					shortcut : 'EwAqxPD9G2Ftofz5',
					top_message : 21,
					count : 53,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 81,
				shortcut : 'jsc75n3QSKplxENi',
				top_message : 2,
				count : 90,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 32,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 68,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 79,
			messages : array(8),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : '4StMIHrcvZ0A32x7',
				user_id : -1010004287554670344,
				dc_id : 56,
				date : 69,
				rights : $client->businessBotRights(...),
			),
			qts : 79,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'F7lCBbDjs3rNVTam',
			message : $client->messageEmpty(
				id : 50,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 92,
				peer_id : $client->peerUser(...),
			),
			qts : 58,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'eWQCL26p9JvDSZA0',
			message : $client->messageEmpty(
				id : 15,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 59,
				peer_id : $client->peerUser(...),
			),
			qts : 76,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'EVWeQHdmnqo8KkuJ',
			peer : $client->peerUser(
				user_id : 2143215781928381673,
			),
			messages : array(18),
			qts : 65,
		),
		$client->updateNewStoryReaction(
			story_id : 42,
			peer : $client->peerUser(
				user_id : 7000447666209050465,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 6262388751585781917,
				nanos : 81,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -5083064730368869396,
			user_id : -7912215257644764777,
			connection_id : '2hlYLVbo1OdKWmfI',
			message : $client->messageEmpty(
				id : 78,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 67,
				peer_id : $client->peerUser(...),
			),
			chat_instance : -6467590054401904521,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -5501430545486406698,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 24,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 965330335165924872,
			payload : 'hRDNoit3rZ4CwT20',
			qts : 63,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 90,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -2807874203079792582,
				access_hash : -4392336048772010297,
			),
			sub_chain_id : 50,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 60,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -7905737707284106722,
			saved_peer_id : $client->peerUser(
				user_id : -5920825601865239715,
			),
			read_max_id : 69,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -6328025786365655582,
			saved_peer_id : $client->peerUser(
				user_id : -6836007546112162742,
			),
			read_max_id : 80,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -6187419250291168684,
			saved_peer_id : $client->peerUser(
				user_id : -8827419252967288146,
			),
		),
		$client->updatePinnedForumTopic(
			pinned : 66,
			peer : $client->peerUser(
				user_id : -8157138419546673921,
			),
			topic_id : 96,
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : 909887119859886898,
				access_hash : 4121040321470131707,
			),
			from_id : $client->peerUser(
				user_id : 2072904895335542343,
			),
			random_id : -5137793306897302166,
			message : $client->textWithEntities(
				text : '26TNsjb0hFtAySe3',
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
			transcription_id : 6344904313707804798,
			text : 'mWSaUky04vDMQLcO',
		),
		$client->updateBotSubscriptionExpire(
			user_id : -5822266010009522823,
			payload : '3ayjzReQOSlsdkn8',
			until_date : 57,
			qts : 55,
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : -5734258290144226316,
				access_hash : -7239700864779891180,
			),
			from_id : $client->peerUser(
				user_id : -2578667136495250900,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : -2666307268706972449,
			),
			order : array(6),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -8376294787344560286,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -2414837907809408690,
			title : 'wTr2cNPIR0kYXbCK',
			photo : $client->chatPhotoEmpty(),
			participants_count : 67,
			date : 16,
			version : 53,
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
				until_date : 58,
			),
		),
		$client->chatForbidden(
			id : 1574192662011114273,
			title : 'szYu3WU6bTwRDVmr',
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
			id : 4888639312273061695,
			access_hash : -1086955515698298086,
			title : '8qHu4F1OTQbL39zU',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 86,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'e5cs2AH4QRbIyJrt',
					reason : 'fnIJeTkqNdih4A76',
					text : 'fs3DKomrzb1RPGWV',
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
				until_date : 28,
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
				until_date : 88,
			),
			participants_count : 57,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 98,
			color : $client->peerColor(
				color : 61,
				background_emoji_id : 2113624718735664346,
			),
			profile_color : $client->peerColor(
				color : 12,
				background_emoji_id : 3230717793099485462,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 59,
			subscription_until_date : 58,
			bot_verification_icon : -8214103219508279212,
			send_paid_messages_stars : 3170356708540897049,
			linked_monoforum_id : 5265402760385560312,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 2309094084816748798,
			access_hash : 4546339710904672206,
			title : 'HCmSpkELGKdBF2Xb',
			until_date : 78,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2519991395147107877,
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
			id : 8547447438339535212,
			access_hash : 124782727466018077,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 70,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'YqWTf3kulBACHsF5',
					reason : 'WnU8mSEHbNJk9vFI',
					text : 'GBS4YTpif7gCLqRd',
				),
			),
			bot_inline_placeholder : 'a53lipuJGLvykmfg',
			lang_code : 'CQG6XKsJLydb9hH7',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 37,
			color : $client->peerColor(
				color : 50,
				background_emoji_id : 8233123025209455361,
			),
			profile_color : $client->peerColor(
				color : 12,
				background_emoji_id : 6319829809805015254,
			),
			bot_active_users : 100,
			bot_verification_icon : -3850889207656007340,
			send_paid_messages_stars : 2220892679272344168,
		),
	),
	intermediate_state : $client->updates->state(
		pts : 57,
		qts : 92,
		date : 55,
		seq : 72,
		unread_count : 4,
	),
);
```