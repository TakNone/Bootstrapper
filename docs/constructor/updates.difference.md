# updates.difference

**Description** : *Full list of occurred events*

**Layer** : 214

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
			id : 89,
			peer_id : $client->peerUser(
				user_id : 823338467682907546,
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
			id : 46,
			from_id : $client->peerUser(
				user_id : -3744018351318203043,
			),
			from_boosts_applied : 76,
			peer_id : $client->peerUser(
				user_id : 472982100680679891,
			),
			saved_peer_id : $client->peerUser(
				user_id : 6761111696066722232,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(...),
				from_name : 'TCyBtrGKNio1mYUq',
				date : 83,
				channel_post : 58,
				post_author : 'FqaYPAsnfMCXre4t',
				saved_from_peer : $client->peerUser(...),
				saved_from_msg_id : 30,
				saved_from_id : $client->peerUser(...),
				saved_from_name : 'fArE5KFSUn6xNZRm',
				saved_date : 94,
				psa_type : 'BdP6AIi9VwJcQXGj',
			),
			via_bot_id : 4973582000702940045,
			via_business_bot_id : 7725417161157097902,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 60,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 18,
				quote_text : '1bNDOtKjWY0udSLP',
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
				quote_offset : 56,
				todo_item_id : 53,
			),
			date : 90,
			message : 'TSjfxOYpBGPn9Euw',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 27,
					length : 79,
				),
				$client->messageEntityMention(
					offset : 23,
					length : 4,
				),
				$client->messageEntityHashtag(
					offset : 41,
					length : 43,
				),
				$client->messageEntityBotCommand(
					offset : 13,
					length : 85,
				),
				$client->messageEntityUrl(
					offset : 80,
					length : 53,
				),
				$client->messageEntityEmail(
					offset : 80,
					length : 62,
				),
				$client->messageEntityBold(
					offset : 23,
					length : 26,
				),
				$client->messageEntityItalic(
					offset : 40,
					length : 86,
				),
				$client->messageEntityCode(
					offset : 45,
					length : 21,
				),
				$client->messageEntityPre(
					offset : 16,
					length : 35,
					language : 'T8dc13ZxEUzJYvw5',
				),
				$client->messageEntityTextUrl(
					offset : 11,
					length : 55,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 44,
					length : 24,
					user_id : -3888790809577906873,
				),
				$client->inputMessageEntityMentionName(
					offset : 21,
					length : 71,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 51,
				),
				$client->messageEntityCashtag(
					offset : 5,
					length : 41,
				),
				$client->messageEntityUnderline(
					offset : 23,
					length : 48,
				),
				$client->messageEntityStrike(
					offset : 21,
					length : 25,
				),
				$client->messageEntityBankCard(
					offset : 43,
					length : 90,
				),
				$client->messageEntitySpoiler(
					offset : 93,
					length : 74,
				),
				$client->messageEntityCustomEmoji(
					offset : 9,
					length : 6,
					document_id : 8907866591239764836,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 51,
					length : 4,
				),
			),
			views : 53,
			forwards : 80,
			replies : $client->messageReplies(
				comments : true,
				replies : 14,
				replies_pts : 44,
				recent_repliers : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				channel_id : 2380463678470099245,
				max_id : 6,
				read_max_id : 88,
			),
			edit_date : 75,
			post_author : 'tLaPVfXhHUTuRFiq',
			grouped_id : -659542345354498633,
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
					platform : 'hLs6G8Tndz5c04Ma',
					reason : 'o8HjfhSeW1dcGaDk',
					text : 'o5NSnK0XJLOjhy93',
				),
			),
			ttl_period : 36,
			quick_reply_shortcut_id : 58,
			effect : -7790509288753751983,
			factcheck : $client->factCheck(
				need_check : true,
				country : '6xe0Zj24M3V1JQnG',
				text : $client->textWithEntities(...),
				hash : 8631197653145315379,
			),
			report_delivery_until_date : 2,
			paid_message_stars : -8472806879573531738,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(...),
				schedule_date : 12,
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
			id : 6,
			from_id : $client->peerUser(
				user_id : -3781902056015592037,
			),
			peer_id : $client->peerUser(
				user_id : 6963970206486393548,
			),
			saved_peer_id : $client->peerUser(
				user_id : -8054586899235082397,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 85,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 89,
				quote_text : 'o0rkId3XqOHhT2RC',
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
				quote_offset : 72,
				todo_item_id : 9,
			),
			date : 63,
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
			ttl_period : 45,
		),
	),
	new_encrypted_messages : array(
		$client->encryptedMessage(
			random_id : 4124366016708267878,
			chat_id : 55,
			date : 85,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			file : $client->encryptedFileEmpty(),
		),
		$client->encryptedMessageService(
			random_id : 6413851767571876358,
			chat_id : 55,
			date : 81,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 85,
				peer_id : $client->peerUser(...),
			),
			pts : 90,
			pts_count : 82,
		),
		$client->updateMessageID(
			id : 84,
			random_id : -2221344753593058517,
		),
		$client->updateDeleteMessages(
			messages : array(55),
			pts : 89,
			pts_count : 93,
		),
		$client->updateUserTyping(
			user_id : 863360832241205513,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 8398488466030337849,
			from_id : $client->peerUser(
				user_id : -3517866989156792529,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -5701797166526273706,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : 3990759951755141090,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 8518383850996771004,
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
			hash : 2818238625491555501,
			date : 16,
			device : 'yVAQ1mFfsb8L0hWx',
			location : 'PGK1CQd0BeuZfEim',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -7641103505750886106,
				chat_id : 21,
				date : 18,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(...),
			),
			qts : 11,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 1,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 42,
			),
			date : 36,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 7,
			max_date : 1,
			date : 77,
		),
		$client->updateChatParticipantAdd(
			chat_id : 1838802852527045063,
			user_id : -825105878897146847,
			inviter_id : 1273767210415223297,
			date : 2,
			version : 79,
		),
		$client->updateChatParticipantDelete(
			chat_id : 6771048918894491785,
			user_id : 1457012101394222913,
			version : 91,
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
					id : 76,
					ip_address : '127.0.0.1',
					port : 84,
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
				silent : true,
				mute_until : 38,
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
			inbox_date : 63,
			type : 'ThmqOP4czxjSWpws',
			message : 'N4qwc1BiGl6LxMZV',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 10,
					length : 38,
				),
				$client->messageEntityMention(
					offset : 91,
					length : 39,
				),
				$client->messageEntityHashtag(
					offset : 4,
					length : 41,
				),
				$client->messageEntityBotCommand(
					offset : 3,
					length : 68,
				),
				$client->messageEntityUrl(
					offset : 99,
					length : 10,
				),
				$client->messageEntityEmail(
					offset : 29,
					length : 71,
				),
				$client->messageEntityBold(
					offset : 9,
					length : 71,
				),
				$client->messageEntityItalic(
					offset : 58,
					length : 12,
				),
				$client->messageEntityCode(
					offset : 36,
					length : 77,
				),
				$client->messageEntityPre(
					offset : 48,
					length : 49,
					language : 'r4VZJSfGRUpghz3K',
				),
				$client->messageEntityTextUrl(
					offset : 96,
					length : 26,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 66,
					length : 8,
					user_id : 7140904500327970370,
				),
				$client->inputMessageEntityMentionName(
					offset : 96,
					length : 33,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 28,
					length : 14,
				),
				$client->messageEntityCashtag(
					offset : 70,
					length : 97,
				),
				$client->messageEntityUnderline(
					offset : 51,
					length : 24,
				),
				$client->messageEntityStrike(
					offset : 7,
					length : 5,
				),
				$client->messageEntityBankCard(
					offset : 79,
					length : 38,
				),
				$client->messageEntitySpoiler(
					offset : 40,
					length : 29,
				),
				$client->messageEntityCustomEmoji(
					offset : 17,
					length : 65,
					document_id : 8842473255399708802,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 53,
					length : 84,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-3399800116387188047),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(336987525588487543),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(6882712614636360853),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(8007495973314100489),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -6404646429896890544,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 0,
			peer : $client->peerUser(
				user_id : -802764537456370239,
			),
			max_id : 10,
			still_unread_count : 11,
			pts : 59,
			pts_count : 47,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -5569543176037214438,
			),
			max_id : 75,
			pts : 61,
			pts_count : 64,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 7070839644786064873,
				url : 'https://docs.liveproto.dev',
			),
			pts : 70,
			pts_count : 14,
		),
		$client->updateReadMessagesContents(
			messages : array(14),
			pts : 96,
			pts_count : 60,
			date : 30,
		),
		$client->updateChannelTooLong(
			channel_id : 5701674918635524542,
			pts : 33,
		),
		$client->updateChannel(
			channel_id : 4750431633757642492,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 30,
				peer_id : $client->peerUser(...),
			),
			pts : 31,
			pts_count : 72,
		),
		$client->updateReadChannelInbox(
			folder_id : 17,
			channel_id : -3856076232895606524,
			max_id : 74,
			still_unread_count : 76,
			pts : 74,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 2280275747316583983,
			messages : array(93),
			pts : 63,
			pts_count : 88,
		),
		$client->updateChannelMessageViews(
			channel_id : -885551153110390797,
			id : 35,
			views : 12,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 4177223658718619492,
			user_id : 606045780066554472,
			is_admin : false,
			version : 59,
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
			order : array(-7319255084703084439),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -8940449767806784207,
			user_id : 3673080882812324908,
			query : 'SPLdW50D8CcqlkFb',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : '4sBVfhxJ1aqe0Clu',
		),
		$client->updateBotInlineSend(
			user_id : 8989008356099876181,
			query : 'fNti6w8Y2Wu1vzBM',
			geo : $client->geoPointEmpty(),
			id : 'EPOKl7U1MIZJvo2q',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 8,
				id : 7705072670942038824,
				access_hash : 2852089133807946866,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 43,
				peer_id : $client->peerUser(...),
			),
			pts : 77,
			pts_count : 23,
		),
		$client->updateBotCallbackQuery(
			query_id : 133046387791881469,
			user_id : 4848807890182676175,
			peer : $client->peerUser(
				user_id : -803891586025060068,
			),
			msg_id : 16,
			chat_instance : -1573576063467138087,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'D5tCzkMKusFnHJE8',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 47,
				peer_id : $client->peerUser(...),
			),
			pts : 0,
			pts_count : 88,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -965043640445453130,
			user_id : 7719865860461819952,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 70,
				id : -2164341964362508202,
				access_hash : 4802209594530935942,
			),
			chat_instance : -5611872191328946728,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'eaG10k6ONDlgYqfy',
		),
		$client->updateReadChannelOutbox(
			channel_id : 7848202574028684884,
			max_id : 37,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 1049174145262721180,
			),
			top_msg_id : 34,
			saved_peer_id : $client->peerUser(
				user_id : 1380276814503311673,
			),
			draft : $client->draftMessageEmpty(
				date : 4,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -4680699709615557847,
			webpage : $client->webPageEmpty(
				id : 2465710780281042881,
				url : 'https://docs.liveproto.dev',
			),
			pts : 97,
			pts_count : 5,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 12,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 43,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 88,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'ie0DRx1MKVZQruTP',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -8838670858366198871,
			data : $client->dataJSON(
				data : 'm3k9QUEiZ5H2Bc6X',
			),
			timeout : 28,
		),
		$client->updateBotShippingQuery(
			query_id : 4824504387759453264,
			user_id : 1697390344165676577,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'bSdA1CQZvBXo24m0',
				street_line2 : 'vdVN0ZJEXSHtbOkg',
				city : 'sljUAOQSCYoERfke',
				state : 'Um7gNzdv0YDGfQhB',
				country_iso2 : '07B12tJWpxFls6IX',
				post_code : '2Eaz7rnOgYQtXS3F',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 4915396091879352965,
			user_id : -173645393448012870,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'B3ULyRu9PHjCaosV',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'HhJKETG47peR6owv',
			currency : 'WELMhVCjxU2sYFfu',
			total_amount : -5474729886182439316,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -3899506679751661302,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'OrEx6GVj8415Dwgi',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'aFdTQCoemKp1M0hb',
				from_version : 83,
				version : 30,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -3588354253566001453,
			top_msg_id : 96,
			saved_peer_id : $client->peerUser(
				user_id : -2041773921988606901,
			),
			messages : array(86),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -2063828306156355411,
			available_min_id : 11,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : -7977104878402538607,
			),
		),
		$client->updateMessagePoll(
			poll_id : -6060707902277435482,
			poll : $client->poll(
				id : -4552727495788633771,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 64,
				close_date : 44,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 14,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'h2ONKH0ZeDWoTqtI',
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
				user_id : -8959957459825932978,
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
			version : 74,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 89,
				),
			),
			pts : 72,
			pts_count : 67,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -5794956322263512045,
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
				geo_distance : 98,
				request_chat_title : 'iLuySmTY0rvas9wC',
				request_chat_date : 36,
				business_bot_id : 2496225289398174030,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -5589332370301955468,
				registration_month : 'EBUhIu3JjRa8cMrK',
				phone_country : '+1234567890',
				name_change_date : 26,
				photo_change_date : 67,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 48,
					distance : 2,
				),
				$client->peerSelfLocated(
					expires : 35,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 30,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 210093551701284225,
			),
			messages : array(2),
			sent_messages : array(76),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 2115295057816751012,
				access_hash : 4949467764908324469,
				slug : 'MvulI5LDxU6TX4gY',
				title : '9FYlBX5AHevfrEWi',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 's15mh4HDKZYgkWCE',
				installs_count : 60,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 6228225712535855142,
			),
			msg_id : 51,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 3395184923467923540,
			peer : $client->peerUser(
				user_id : -2102401579771128925,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 84,
		),
		$client->updateDialogFilter(
			id : 63,
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
				id : 0,
				title : $client->textWithEntities(...),
				emoticon : 'QK1BR7kSNA8DdrC0',
				color : 64,
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
			order : array(70),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -2886002356432043296,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -3151806106974640901,
			id : 7,
			forwards : 93,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 1691846380108089428,
			top_msg_id : 50,
			read_max_id : 38,
			broadcast_id : -3998159573078191805,
			broadcast_post : 33,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -2975158137057152629,
			top_msg_id : 54,
			read_max_id : 12,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -7482386856689259067,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : 5025810291854451441,
			top_msg_id : 63,
			from_id : $client->peerUser(
				user_id : 6618331667417528797,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 7222891646739974202,
			),
			messages : array(66),
			pts : 77,
			pts_count : 31,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -4753837856063451004,
			messages : array(1),
			pts : 64,
			pts_count : 50,
		),
		$client->updateChat(
			chat_id : 1899499576336722054,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -7995364859855465873,
				access_hash : 6807533049335781373,
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
					date : 99,
					active_date : 78,
					source : 31,
					volume : 40,
					about : 'jgibIsahwv5UJxAS',
					raise_hand_rating : -2516506785817153258,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 1,
		),
		$client->updateGroupCall(
			chat_id : 7616331774188528286,
			call : $client->groupCallDiscarded(
				id : -2998291681813225980,
				access_hash : -5059166277967466536,
				duration : 31,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 4255643148445226499,
			),
			ttl_period : 96,
		),
		$client->updateChatParticipant(
			chat_id : -9207608428092270601,
			date : 71,
			actor_id : -6086597325124813554,
			user_id : 56951046677963523,
			prev_participant : $client->chatParticipant(
				user_id : 4355844366737253079,
				inviter_id : 2382702474716145548,
				date : 45,
			),
			new_participant : $client->chatParticipant(
				user_id : 2679377667325459286,
				inviter_id : -6858936061431848876,
				date : 78,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'Ilmi9vrNKSRf8MgT',
				admin_id : 5162263707484907595,
				date : 69,
				start_date : 56,
				expire_date : 85,
				usage_limit : 59,
				usage : 73,
				requested : 65,
				subscription_expired : 41,
				title : 'RAlnHxTK1wjg3mUq',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 25,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 3220037771714669764,
			date : 73,
			actor_id : -1891304783639827812,
			user_id : 1157347789656050545,
			prev_participant : $client->channelParticipant(
				user_id : 1487080259243580432,
				date : 79,
				subscription_until_date : 59,
			),
			new_participant : $client->channelParticipant(
				user_id : -1855511304690646400,
				date : 84,
				subscription_until_date : 69,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'kcrJyhNZGTxu4Qlm',
				admin_id : -2883270343768785231,
				date : 50,
				start_date : 25,
				expire_date : 91,
				usage_limit : 97,
				usage : 80,
				requested : 22,
				subscription_expired : 41,
				title : 'ZKCpq1enuMLASFow',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 22,
		),
		$client->updateBotStopped(
			user_id : 6607909057798518057,
			date : 89,
			stopped : false,
			qts : 14,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'xuUKCwvVDWz2ELTq',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -6063161623155603088,
			),
			bot_id : -8570428022266117919,
			commands : array(
				$client->botCommand(
					command : '4g3dtGUXWENC9572',
					description : 'TG7WwoHg0bvxaNns',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -2849131262709979019,
			),
			requests_pending : 97,
			recent_requesters : array(7546857295613135657),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 2169318967364564399,
			),
			date : 46,
			user_id : -6580713856427510842,
			about : 'ymVP3XSLuiqQl4Dr',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'n6BFMPf1hqloXtRK',
				admin_id : 1716190972154263785,
				date : 76,
				start_date : 54,
				expire_date : 30,
				usage_limit : 50,
				usage : 75,
				requested : 35,
				subscription_expired : 1,
				title : 'N1uCGsptTh7eK5PX',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 65,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -4241301509576687459,
			),
			msg_id : 34,
			top_msg_id : 59,
			saved_peer_id : $client->peerUser(
				user_id : 2867033808816533408,
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
			query_id : 2927139307145975406,
		),
		$client->updateBotMenuButton(
			bot_id : -4950714619363597271,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -7527004745986311921,
			),
			msg_id : 5,
			transcription_id : 4075447115742204588,
			text : '0j1lIn5RCPtQVWfp',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 3044817546484461715,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -8634644748072903544,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -6407834238823047361,
			),
			msg_id : 72,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 95,
					h : 2,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 7,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : 5960027889270935620,
			topic_id : 11,
		),
		$client->updateChannelPinnedTopics(
			channel_id : -8259416459589237233,
			order : array(95),
		),
		$client->updateUser(
			user_id : -1418425943220559416,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -2682860058460099789,
			),
			story : $client->storyItemDeleted(
				id : 50,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -556876297964254865,
			),
			max_id : 76,
		),
		$client->updateStoryID(
			id : 0,
			random_id : 2313094091295660188,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 30,
				cooldown_until_date : 32,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 2478015939455296028,
			),
			story_id : 93,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -7775171739163478355,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'FO8Ct1HyE0XjwhV9',
				user_id : -1940429060560458328,
				giveaway_msg_id : 49,
				date : 9,
				expires : 80,
				used_gift_slug : 'WvUjriIXp69dTtZq',
				multiplier : 26,
				stars : 2201208110627375010,
			),
			qts : 6,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -9119949510790078983,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 4372332587251602861,
			),
			wallpaper : $client->wallPaper(
				id : -9154619987164019849,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -6708192785591617461,
				slug : 'krMxNP7F3nJqm1dD',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 8860092837179473573,
			),
			msg_id : 69,
			date : 87,
			actor : $client->peerUser(
				user_id : -3343897760433536702,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'k8MVs1xuDtZehHo9',
				),
				$client->reactionCustomEmoji(
					document_id : 5871777678044306782,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '7fMqw1B9hocDd4ZL',
				),
				$client->reactionCustomEmoji(
					document_id : -6743942469962704176,
				),
				$client->reactionPaid(),
			),
			qts : 75,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -8956226870611185769,
			),
			msg_id : 98,
			date : 98,
			reactions : array(
				$client->reactionCount(
					chosen_order : 55,
					reaction : $client->reactionEmpty(...),
					count : 10,
				),
			),
			qts : 55,
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
					folder_id : 93,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'KPBDGbhACZq8wRHf',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 65,
					shortcut : '9RwI5LazUCnoHP3Q',
					top_message : 38,
					count : 26,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 20,
				shortcut : 'ae5rvc0txTFwp4sN',
				top_message : 96,
				count : 84,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 21,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 58,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 13,
			messages : array(72),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'NMiT2CflP8acX3gQ',
				user_id : 8521117896706321108,
				dc_id : 24,
				date : 54,
				rights : $client->businessBotRights(...),
			),
			qts : 67,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'GBFoq2gTWnISEAVX',
			message : $client->messageEmpty(
				id : 35,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 100,
				peer_id : $client->peerUser(...),
			),
			qts : 53,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'Rtx8sLcGrA29nzOF',
			message : $client->messageEmpty(
				id : 76,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 36,
				peer_id : $client->peerUser(...),
			),
			qts : 3,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'oXDHlbB9i14NPAyU',
			peer : $client->peerUser(
				user_id : -2748887839671837141,
			),
			messages : array(32),
			qts : 41,
		),
		$client->updateNewStoryReaction(
			story_id : 29,
			peer : $client->peerUser(
				user_id : 1372282116186132519,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 3025709857701812926,
				nanos : 86,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -1412729752715288336,
			user_id : -3552801367145481068,
			connection_id : '7bEKivldrQ46ut2A',
			message : $client->messageEmpty(
				id : 94,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 89,
				peer_id : $client->peerUser(...),
			),
			chat_instance : 202637787158482955,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 8550852977259889824,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 64,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -4743506531669496666,
			payload : '6SyeAz5QhlOKjVq3',
			qts : 16,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 37,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 8114568569354738852,
				access_hash : -6258770264215655581,
			),
			sub_chain_id : 15,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 51,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -7619910522430114227,
			saved_peer_id : $client->peerUser(
				user_id : -3963652878156936282,
			),
			read_max_id : 21,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 5317534418446260492,
			saved_peer_id : $client->peerUser(
				user_id : 4710760866504528037,
			),
			read_max_id : 50,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 1137503440938535607,
			saved_peer_id : $client->peerUser(
				user_id : 4671351254078359191,
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : -4411088527093286008,
			text : 'TvHsWtboXg3wIEpc',
		),
		$client->updateBotSubscriptionExpire(
			user_id : -3882824930489366646,
			payload : 'O6FvoRAhLHPZxlJK',
			until_date : 18,
			qts : 100,
		),
		$client->updateUserPhoto(
			user_id : -3096790182613550865,
			date : 11,
			photo : $client->userProfilePhotoEmpty(),
			previous : true,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -3469582697431367731,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4795030264379347581,
			title : 'QJTuHINv07wxGLdq',
			photo : $client->chatPhotoEmpty(),
			participants_count : 69,
			date : 40,
			version : 1,
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
				until_date : 18,
			),
		),
		$client->chatForbidden(
			id : -5967068593601192755,
			title : 'Vtx1nR35kbJZS62Y',
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
			id : 4342480506551316148,
			access_hash : -5789988329049443466,
			title : 'CYs4QPJHh7a0cwMy',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 52,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ZbY620pTVlakuSeK',
					reason : 'CZAuoJW2xeNzYEt0',
					text : 'ZYrV4DimoMNbIt2p',
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
				until_date : 7,
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
				until_date : 31,
			),
			participants_count : 71,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 68,
			color : $client->peerColor(
				color : 8,
				background_emoji_id : -2424193862620228543,
			),
			profile_color : $client->peerColor(
				color : 19,
				background_emoji_id : -2213954763534965798,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 88,
			subscription_until_date : 28,
			bot_verification_icon : -7497802983638025519,
			send_paid_messages_stars : 1909464502332922477,
			linked_monoforum_id : 7571789159878122445,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 8858645845264254669,
			access_hash : -8492431428896395407,
			title : 'whEo80BfZLymSlVa',
			until_date : 26,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2779373693985883674,
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
			id : -4653066826624455289,
			access_hash : -8417395343307040330,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 79,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'zXlox5sM01BPk9pt',
					reason : 'YW32Nsc4PSC7Rtbh',
					text : 'IHFAiz57mSxaK2W9',
				),
			),
			bot_inline_placeholder : 'ZM0RLf9Pa67wdgBc',
			lang_code : 'x6SCrEVn9uHbqg0z',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 63,
			color : $client->peerColor(
				color : 71,
				background_emoji_id : -2488806205923840154,
			),
			profile_color : $client->peerColor(
				color : 54,
				background_emoji_id : 6461889495141034743,
			),
			bot_active_users : 90,
			bot_verification_icon : -8377352778340167438,
			send_paid_messages_stars : 6532372079513784005,
		),
	),
	state : $client->updates->state(
		pts : 33,
		qts : 25,
		date : 34,
		seq : 16,
		unread_count : 96,
	),
);
```