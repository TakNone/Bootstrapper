# updates.differenceSlice

**Description** : *Incomplete list of occurred events*

**Layer** : 214

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
			id : 31,
			peer_id : $client->peerUser(
				user_id : -8265717555544312525,
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
			id : 13,
			from_id : $client->peerUser(
				user_id : 2887313786163747005,
			),
			from_boosts_applied : 98,
			peer_id : $client->peerUser(
				user_id : 6418893388518534049,
			),
			saved_peer_id : $client->peerUser(
				user_id : -1103693975519615938,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(...),
				from_name : 'RAdhmeI7Z8SFLauW',
				date : 11,
				channel_post : 47,
				post_author : 'w3NTLBSFgChQ7vlV',
				saved_from_peer : $client->peerUser(...),
				saved_from_msg_id : 43,
				saved_from_id : $client->peerUser(...),
				saved_from_name : 'XfjGv6y9c7ZoOChI',
				saved_date : 45,
				psa_type : '65YjmQshdMT9wlJu',
			),
			via_bot_id : -8333760068647804761,
			via_business_bot_id : -7064209252942903421,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 96,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 90,
				quote_text : 'nBic3Qhj8vSXWCex',
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
				quote_offset : 11,
				todo_item_id : 71,
			),
			date : 58,
			message : 'Uj35ZrEaD69by1Xw',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 48,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 91,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 91,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 48,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 61,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 59,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 44,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 49,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 47,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 27,
					language : 'aEPOq2rzB1sHLJZo',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 44,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 44,
					user_id : -5214422891953905917,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 16,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 37,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 92,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 24,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 20,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 79,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 7,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 86,
					document_id : 4455856341332470075,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 3,
				),
			),
			views : 3,
			forwards : 34,
			replies : $client->messageReplies(
				comments : true,
				replies : 60,
				replies_pts : 69,
				recent_repliers : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				channel_id : 5269775610847402921,
				max_id : 3,
				read_max_id : 21,
			),
			edit_date : 36,
			post_author : 'L9g2jVGCm0nKeQYf',
			grouped_id : -4495376508201765615,
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
					platform : 'ZwcGvHWN0nlKbg19',
					reason : 'WvZRJEYBzeuX0hC5',
					text : '2tGienVORFY5rd68',
				),
			),
			ttl_period : 23,
			quick_reply_shortcut_id : 22,
			effect : 4990207198894886077,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'ZBg8j1fqieF4ltRu',
				text : $client->textWithEntities(...),
				hash : 0,
			),
			report_delivery_until_date : 90,
			paid_message_stars : 1698424452207216710,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(...),
				schedule_date : 94,
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
			id : 22,
			from_id : $client->peerUser(
				user_id : 283778739021942840,
			),
			peer_id : $client->peerUser(
				user_id : 1537370734986022150,
			),
			saved_peer_id : $client->peerUser(
				user_id : 3407264208218773102,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 76,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 26,
				quote_text : 's7cRBbWXyUreZCMY',
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
				quote_offset : 77,
				todo_item_id : 87,
			),
			date : 100,
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
			ttl_period : 66,
		),
	),
	new_encrypted_messages : array(
		$client->encryptedMessage(
			random_id : -8491043786044603744,
			chat_id : 84,
			date : 16,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			file : $client->encryptedFileEmpty(),
		),
		$client->encryptedMessageService(
			random_id : -8975772822472929853,
			chat_id : 99,
			date : 13,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 92,
				peer_id : $client->peerUser(...),
			),
			pts : 95,
			pts_count : 60,
		),
		$client->updateMessageID(
			id : 82,
			random_id : -6258883302538555489,
		),
		$client->updateDeleteMessages(
			messages : array(7),
			pts : 19,
			pts_count : 84,
		),
		$client->updateUserTyping(
			user_id : -1860792961591126670,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 7541102366377160846,
			from_id : $client->peerUser(
				user_id : 4387220097226085264,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 216873851268791737,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : 2696732522182976616,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -2155696805326777039,
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
			date : 1,
			device : 'wPZH5xuhSQrbcisI',
			location : 'q5UrLdJievkCfgSb',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 3587488501812225388,
				chat_id : 23,
				date : 67,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(...),
			),
			qts : 61,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 59,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 26,
			),
			date : 43,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 77,
			max_date : 76,
			date : 51,
		),
		$client->updateChatParticipantAdd(
			chat_id : -1866129297090257910,
			user_id : -2551509467501963576,
			inviter_id : -6541565880704986551,
			date : 28,
			version : 22,
		),
		$client->updateChatParticipantDelete(
			chat_id : -1009061997493825688,
			user_id : -4297756719433002159,
			version : 88,
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
					id : 72,
					ip_address : '127.0.0.1',
					port : 92,
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
				mute_until : 37,
				ios_sound : $client->notificationSoundDefault(...),
				android_sound : $client->notificationSoundDefault(...),
				other_sound : $client->notificationSoundDefault(...),
				stories_muted : false,
				stories_hide_sender : true,
				stories_ios_sound : $client->notificationSoundDefault(...),
				stories_android_sound : $client->notificationSoundDefault(...),
				stories_other_sound : $client->notificationSoundDefault(...),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 68,
			type : 'uAmNLhr05cjU3dzq',
			message : 'oeJL2wWiTSFCquKQ',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 49,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 20,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 53,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 40,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 45,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 46,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 98,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 65,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 84,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 81,
					language : '2udlr5gkWOjf8RCB',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 5,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 18,
					user_id : -518357200109691554,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 56,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 78,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 98,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 100,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 29,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 8,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 10,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 97,
					document_id : -7721202001672274554,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 0,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(8929031392944018318),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(5156172665167814979),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(8700672553333315329),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-725810091607471428),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 5716672509975928081,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 78,
			peer : $client->peerUser(
				user_id : 1084035260650497386,
			),
			max_id : 25,
			still_unread_count : 30,
			pts : 1,
			pts_count : 1,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 6352327790689659138,
			),
			max_id : 34,
			pts : 32,
			pts_count : 98,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -5448719977312939537,
				url : 'https://docs.liveproto.dev',
			),
			pts : 67,
			pts_count : 77,
		),
		$client->updateReadMessagesContents(
			messages : array(1),
			pts : 6,
			pts_count : 43,
			date : 45,
		),
		$client->updateChannelTooLong(
			channel_id : 1434434143897723097,
			pts : 96,
		),
		$client->updateChannel(
			channel_id : 2169933554926777372,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 33,
				peer_id : $client->peerUser(...),
			),
			pts : 46,
			pts_count : 75,
		),
		$client->updateReadChannelInbox(
			folder_id : 83,
			channel_id : 7514035205697723987,
			max_id : 85,
			still_unread_count : 61,
			pts : 34,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 4263786993303385918,
			messages : array(40),
			pts : 42,
			pts_count : 63,
		),
		$client->updateChannelMessageViews(
			channel_id : -4968843678304479769,
			id : 27,
			views : 48,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 984222250325810131,
			user_id : 4852371830024012323,
			is_admin : false,
			version : 15,
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
			order : array(3848876149924847946),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -7050530959857027339,
			user_id : 8292125987085416833,
			query : 'IekJojsSUQVKvZcM',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : '3B6fC2XHsKbQ41qh',
		),
		$client->updateBotInlineSend(
			user_id : 6385638233398526193,
			query : 'psWm6ORF7ovl1B8n',
			geo : $client->geoPointEmpty(),
			id : 'sd2BnzwGC0ApxIub',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 27,
				id : -4224363215626099732,
				access_hash : 4534239657612727344,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 57,
				peer_id : $client->peerUser(...),
			),
			pts : 43,
			pts_count : 85,
		),
		$client->updateBotCallbackQuery(
			query_id : -2138791497168056934,
			user_id : 674982990941526795,
			peer : $client->peerUser(
				user_id : 4007148538561778482,
			),
			msg_id : 1,
			chat_instance : -5187332263860878669,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'psEXiIbSO1mlzBun',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 7,
				peer_id : $client->peerUser(...),
			),
			pts : 91,
			pts_count : 6,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 6544030675552746364,
			user_id : 8582068642401882158,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 40,
				id : -9121514497253607203,
				access_hash : 3258541205351618584,
			),
			chat_instance : 4638484386830862420,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'BimPtAQqRIVYb4oC',
		),
		$client->updateReadChannelOutbox(
			channel_id : -4338956265274899001,
			max_id : 2,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 1582802420306824560,
			),
			top_msg_id : 79,
			saved_peer_id : $client->peerUser(
				user_id : -8055545208923336403,
			),
			draft : $client->draftMessageEmpty(
				date : 67,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -8990597680412426482,
			webpage : $client->webPageEmpty(
				id : -522211264415202964,
				url : 'https://docs.liveproto.dev',
			),
			pts : 97,
			pts_count : 12,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 6,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 25,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 100,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 's4XokPmQ2qF5W3MS',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -5358632030072395425,
			data : $client->dataJSON(
				data : 'n2Ryqa3mEX9t0HGD',
			),
			timeout : 83,
		),
		$client->updateBotShippingQuery(
			query_id : -6793138189102358115,
			user_id : -4029114998389310886,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'YeKNy63I1mMtcqPU',
				street_line2 : 'oJLW3atQnBufcP84',
				city : 'MevlkXVNaDr2jp9U',
				state : '7f6PywTh5E1Mnmig',
				country_iso2 : '2jM5ycxJqpbd4sDe',
				post_code : 'Lj917Ahkuan6osQJ',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -9002950209243732247,
			user_id : 5745538399299990918,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'hFv6s9Pgafejt3QZ',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'JyfNltkYhp5TxUIQ',
			currency : 'pXiSe3b5UxDCLunw',
			total_amount : -7169678524070798448,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 9020238717966215148,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'AnzLNwvoZpjhsBJI',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : '8NsqvmcLGY52IQUj',
				from_version : 41,
				version : 90,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 6181782996097281318,
			top_msg_id : 95,
			saved_peer_id : $client->peerUser(
				user_id : -1412115469262034932,
			),
			messages : array(2),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -1721477213866783740,
			available_min_id : 2,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : -5861187077768314768,
			),
		),
		$client->updateMessagePoll(
			poll_id : 1489421266045521371,
			poll : $client->poll(
				id : 4715022241317590652,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 93,
				close_date : 50,
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
				solution : '6qcvK1mWYNzD5pxl',
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
				user_id : -258584971885005952,
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
			version : 56,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 25,
				),
			),
			pts : 47,
			pts_count : 70,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 1255473006436674527,
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
				geo_distance : 50,
				request_chat_title : 'Hfxjzdtg9o1InkTU',
				request_chat_date : 72,
				business_bot_id : -9195055389034233240,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -4311022320354152917,
				registration_month : '3KCQ24tXfY6jvwgA',
				phone_country : '+1234567890',
				name_change_date : 84,
				photo_change_date : 96,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 81,
					distance : 78,
				),
				$client->peerSelfLocated(
					expires : 57,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 70,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 8483967021843695823,
			),
			messages : array(54),
			sent_messages : array(86),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -1806914118020711924,
				access_hash : -6611861603973814080,
				slug : 'efRF4wiBOtup82aG',
				title : 'v5dXHcWMu6QVpe7t',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'rMfJXGhbmixPRFQC',
				installs_count : 2,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -6113508502430115691,
			),
			msg_id : 13,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -5517737142932897917,
			peer : $client->peerUser(
				user_id : -1257258406302779838,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 53,
		),
		$client->updateDialogFilter(
			id : 78,
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
				id : 7,
				title : $client->textWithEntities(...),
				emoticon : 'W47Q5PVLDfaikE0e',
				color : 98,
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
			order : array(80),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 8976052295376260128,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : 7282098910026209142,
			id : 42,
			forwards : 12,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 1041473010298940975,
			top_msg_id : 46,
			read_max_id : 68,
			broadcast_id : 1761794646860286816,
			broadcast_post : 30,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 6309567446321981247,
			top_msg_id : 69,
			read_max_id : 7,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 3762906063488248465,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -1256562351184435031,
			top_msg_id : 98,
			from_id : $client->peerUser(
				user_id : -3422413683840467052,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -154009291817004381,
			),
			messages : array(70),
			pts : 48,
			pts_count : 41,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -5752716370993240173,
			messages : array(93),
			pts : 22,
			pts_count : 97,
		),
		$client->updateChat(
			chat_id : -717123557448688209,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 2324994776372537097,
				access_hash : -1878685173127949234,
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
					date : 97,
					active_date : 88,
					source : 78,
					volume : 36,
					about : 'W0obFNn5H8pPj1Au',
					raise_hand_rating : -2737237118443866461,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 35,
		),
		$client->updateGroupCall(
			chat_id : 2020041048340016552,
			call : $client->groupCallDiscarded(
				id : 4510875805203194619,
				access_hash : -217167740115240683,
				duration : 30,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 5503495667054701509,
			),
			ttl_period : 96,
		),
		$client->updateChatParticipant(
			chat_id : -60067327512172747,
			date : 46,
			actor_id : -2273107638487919020,
			user_id : -7361176930120524099,
			prev_participant : $client->chatParticipant(
				user_id : 6466911840409600174,
				inviter_id : 7720189398499850313,
				date : 15,
			),
			new_participant : $client->chatParticipant(
				user_id : 888808357600538190,
				inviter_id : -9166504890823595545,
				date : 68,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'ZVRcC8wfqOj94mYp',
				admin_id : 2946811732130228798,
				date : 65,
				start_date : 84,
				expire_date : 22,
				usage_limit : 54,
				usage : 27,
				requested : 34,
				subscription_expired : 45,
				title : 'gxG0hRCz2WTLnbBE',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 20,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 2086977879675095686,
			date : 12,
			actor_id : 5420996366521056785,
			user_id : 8082516504275493998,
			prev_participant : $client->channelParticipant(
				user_id : 3479610435375079879,
				date : 96,
				subscription_until_date : 5,
			),
			new_participant : $client->channelParticipant(
				user_id : 7258494787854894276,
				date : 22,
				subscription_until_date : 42,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'FVxcNJtDgRCaB2yY',
				admin_id : 3674423982508996764,
				date : 41,
				start_date : 59,
				expire_date : 97,
				usage_limit : 78,
				usage : 61,
				requested : 47,
				subscription_expired : 86,
				title : 'ro43WjtZ7pbPnkCI',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 90,
		),
		$client->updateBotStopped(
			user_id : -5914450760117338971,
			date : 59,
			stopped : true,
			qts : 4,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'RWzVPohlpF4OfLBZ',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 7761500616813237705,
			),
			bot_id : 1706285665163494835,
			commands : array(
				$client->botCommand(
					command : 'prMZAB2bwc1dEQIU',
					description : 'XgbEYKJZpHrayq9D',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -911194386264748101,
			),
			requests_pending : 1,
			recent_requesters : array(-558431916496785298),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 4931781664805284261,
			),
			date : 87,
			user_id : -4943860943693882417,
			about : '9C24FhqXRMi1OgHU',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'Nqw5dzoEiYmBKgau',
				admin_id : -1077540500296844860,
				date : 64,
				start_date : 64,
				expire_date : 2,
				usage_limit : 19,
				usage : 19,
				requested : 34,
				subscription_expired : 25,
				title : '2MpGBFw8EytxTe3D',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 2,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 7366818681903710618,
			),
			msg_id : 18,
			top_msg_id : 2,
			saved_peer_id : $client->peerUser(
				user_id : -3013903068938760129,
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
			query_id : 2581506275723573420,
		),
		$client->updateBotMenuButton(
			bot_id : 1440858046074522409,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -390294973599503289,
			),
			msg_id : 4,
			transcription_id : -8675018159720392071,
			text : 'r5kKbtH9fNcLhxqn',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -9217532583165080205,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 6633893309334300914,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -3311864229753125927,
			),
			msg_id : 73,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 51,
					h : 35,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 6,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : -6938572471686401663,
			topic_id : 45,
		),
		$client->updateChannelPinnedTopics(
			channel_id : 5788534527976099625,
			order : array(97),
		),
		$client->updateUser(
			user_id : -3445459081098645818,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -5796418759306965033,
			),
			story : $client->storyItemDeleted(
				id : 88,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -8234829337852880987,
			),
			max_id : 67,
		),
		$client->updateStoryID(
			id : 27,
			random_id : 359013463340531893,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 63,
				cooldown_until_date : 50,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 4122142435984392608,
			),
			story_id : 80,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 3749311108216343782,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : '7mZQS5AXJdTuY3tf',
				user_id : -8946920134591557210,
				giveaway_msg_id : 44,
				date : 11,
				expires : 26,
				used_gift_slug : 'fQxmYJw31D8dHyvi',
				multiplier : 63,
				stars : -4949539170242303587,
			),
			qts : 54,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 7208067261863215462,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -212494217753389313,
			),
			wallpaper : $client->wallPaper(
				id : 6527860145108610423,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 5117523702379006206,
				slug : 'JaHPL5QnerT1GzUI',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 6181444461109332280,
			),
			msg_id : 58,
			date : 49,
			actor : $client->peerUser(
				user_id : 2373648566917422844,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'b1As5ncWGax7kRK2',
				),
				$client->reactionCustomEmoji(
					document_id : -5476137693557280198,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'D2Bs6STzimna54PC',
				),
				$client->reactionCustomEmoji(
					document_id : -6627553336787587246,
				),
				$client->reactionPaid(),
			),
			qts : 3,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -6232555805764542605,
			),
			msg_id : 65,
			date : 8,
			reactions : array(
				$client->reactionCount(
					chosen_order : 40,
					reaction : $client->reactionEmpty(...),
					count : 14,
				),
			),
			qts : 46,
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
					folder_id : 16,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'QxMEi9zeXn2lqwL4',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 57,
					shortcut : '6IlSq0dBNHPgRGw1',
					top_message : 95,
					count : 73,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 47,
				shortcut : 'sLNvlHPJ50fXb2hD',
				top_message : 33,
				count : 32,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 90,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 60,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 49,
			messages : array(5),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'xG9l4zeoRBMhcWfk',
				user_id : -337257416223976626,
				dc_id : 3,
				date : 61,
				rights : $client->businessBotRights(...),
			),
			qts : 63,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'sJh3wFnV2NzOdo8Z',
			message : $client->messageEmpty(
				id : 9,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 51,
				peer_id : $client->peerUser(...),
			),
			qts : 52,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'YH5fVICASD6Pgj8B',
			message : $client->messageEmpty(
				id : 4,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 47,
				peer_id : $client->peerUser(...),
			),
			qts : 49,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'E6IcyquGWHanrXfg',
			peer : $client->peerUser(
				user_id : 1642605446746384415,
			),
			messages : array(28),
			qts : 66,
		),
		$client->updateNewStoryReaction(
			story_id : 33,
			peer : $client->peerUser(
				user_id : -6295328179346316444,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -5000834418066161414,
				nanos : 90,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 3536987693397471940,
			user_id : 4408908068257550558,
			connection_id : 'TPLa86hJlvZIEqNY',
			message : $client->messageEmpty(
				id : 20,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 17,
				peer_id : $client->peerUser(...),
			),
			chat_instance : 8806082596226192605,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 1430619828812365030,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 72,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -4767598198011179081,
			payload : 'sPQv8gCEf7LYSIB5',
			qts : 13,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 46,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -6428062885890824046,
				access_hash : -5818605623884187235,
			),
			sub_chain_id : 16,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 91,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -7862620891113479224,
			saved_peer_id : $client->peerUser(
				user_id : -8873450500148798857,
			),
			read_max_id : 48,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -7939667295363891202,
			saved_peer_id : $client->peerUser(
				user_id : -5643953128726422851,
			),
			read_max_id : 90,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 8912848916717304361,
			saved_peer_id : $client->peerUser(
				user_id : 8353319808133885953,
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : -1500707795983231487,
			text : 'bsKyj4ECGRAmeVHk',
		),
		$client->updateBotSubscriptionExpire(
			user_id : -4030880630465348130,
			payload : '6nEHkmZD1vJKrqzB',
			until_date : 61,
			qts : 5,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -1587118030317612705,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -1956086597654485816,
			title : 'jhsKDGk4yFeX5AiU',
			photo : $client->chatPhotoEmpty(),
			participants_count : 65,
			date : 26,
			version : 39,
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
				until_date : 84,
			),
		),
		$client->chatForbidden(
			id : -1122324025773574724,
			title : 'Qvsf647GRXBOgLdy',
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
			id : -2508445962973034848,
			access_hash : 154950124072042690,
			title : 'KQNOnzToXgYl26Rf',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 51,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'stSgO7cExrXyLG6q',
					reason : 'mFxcoXBu5N6Zh3J2',
					text : 'qvFaP9JIVdUofeHC',
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
				until_date : 45,
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
				until_date : 26,
			),
			participants_count : 35,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 84,
			color : $client->peerColor(
				color : 20,
				background_emoji_id : -7467560919072047372,
			),
			profile_color : $client->peerColor(
				color : 6,
				background_emoji_id : 4253433677254014828,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 10,
			subscription_until_date : 57,
			bot_verification_icon : 5981995739164645527,
			send_paid_messages_stars : 3694450356181449697,
			linked_monoforum_id : 241745528596739664,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -6134824730894646832,
			access_hash : -8948225158931293792,
			title : 'wxCPHm1DVj8zM5Ae',
			until_date : 35,
		),
	),
	users : array(
		$client->userEmpty(
			id : -5780765547090724764,
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
			id : -8377928004166717208,
			access_hash : -4738268739164520469,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 1,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Ni6xzEcX8fHtBdwO',
					reason : 'JUoebXar0NzmMuZt',
					text : 'So6kYJINcgmdZqfM',
				),
			),
			bot_inline_placeholder : 'kn4a0XId36qcWoli',
			lang_code : 'kDnFNVw3a87OftY5',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 57,
			color : $client->peerColor(
				color : 62,
				background_emoji_id : 2145327552958782163,
			),
			profile_color : $client->peerColor(
				color : 43,
				background_emoji_id : 1125378275858707825,
			),
			bot_active_users : 29,
			bot_verification_icon : -6815478502763441799,
			send_paid_messages_stars : 7708684442239873134,
		),
	),
	intermediate_state : $client->updates->state(
		pts : 27,
		qts : 82,
		date : 82,
		seq : 17,
		unread_count : 96,
	),
);
```