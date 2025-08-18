# updates.difference

**Description** : *Full list of occurred events*

**Layer** : 211

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
			id : 70,
			peer_id : $client->peerUser(
				user_id : -3126632598590652906,
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
			id : 34,
			from_id : $client->peerUser(
				user_id : -200429624901666782,
			),
			from_boosts_applied : 29,
			peer_id : $client->peerUser(
				user_id : 7267259977717597723,
			),
			saved_peer_id : $client->peerUser(
				user_id : 271865993888221642,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(...),
				from_name : 'mw9CIDb4seJHZF5i',
				date : 32,
				channel_post : 4,
				post_author : 'zDiyM29Rb8IGlALN',
				saved_from_peer : $client->peerUser(...),
				saved_from_msg_id : 55,
				saved_from_id : $client->peerUser(...),
				saved_from_name : 'nwdrA0ylOI5B9aDf',
				saved_date : 68,
				psa_type : 'etG5a7cErCqyJNUm',
			),
			via_bot_id : -5543622345322564276,
			via_business_bot_id : 3288182076820866735,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 47,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 36,
				quote_text : '0E7HUNq9QAR5LKnw',
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
				quote_offset : 25,
				todo_item_id : 77,
			),
			date : 31,
			message : 'BjveYrRf672FaWGK',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 63,
					length : 68,
				),
				$client->messageEntityMention(
					offset : 61,
					length : 9,
				),
				$client->messageEntityHashtag(
					offset : 53,
					length : 49,
				),
				$client->messageEntityBotCommand(
					offset : 2,
					length : 20,
				),
				$client->messageEntityUrl(
					offset : 75,
					length : 53,
				),
				$client->messageEntityEmail(
					offset : 42,
					length : 64,
				),
				$client->messageEntityBold(
					offset : 71,
					length : 82,
				),
				$client->messageEntityItalic(
					offset : 71,
					length : 83,
				),
				$client->messageEntityCode(
					offset : 58,
					length : 3,
				),
				$client->messageEntityPre(
					offset : 88,
					length : 93,
					language : 'kqPOvjhGZgI95fUK',
				),
				$client->messageEntityTextUrl(
					offset : 35,
					length : 83,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 76,
					length : 29,
					user_id : -3207670621697537280,
				),
				$client->inputMessageEntityMentionName(
					offset : 75,
					length : 11,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 54,
					length : 34,
				),
				$client->messageEntityCashtag(
					offset : 35,
					length : 11,
				),
				$client->messageEntityUnderline(
					offset : 71,
					length : 0,
				),
				$client->messageEntityStrike(
					offset : 66,
					length : 19,
				),
				$client->messageEntityBankCard(
					offset : 75,
					length : 34,
				),
				$client->messageEntitySpoiler(
					offset : 29,
					length : 10,
				),
				$client->messageEntityCustomEmoji(
					offset : 77,
					length : 8,
					document_id : 927583290541831170,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 43,
					length : 81,
				),
			),
			views : 75,
			forwards : 40,
			replies : $client->messageReplies(
				comments : true,
				replies : 16,
				replies_pts : 82,
				recent_repliers : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				channel_id : 2503580446676657654,
				max_id : 42,
				read_max_id : 99,
			),
			edit_date : 78,
			post_author : '40WR6rGEeTKcMVqb',
			grouped_id : -6210066956515212801,
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
					platform : 'f23irs5ucQAyRg0l',
					reason : '4bEmGcXZLy6AFeMl',
					text : '8Pr2mn9HEhTRKOq7',
				),
			),
			ttl_period : 15,
			quick_reply_shortcut_id : 2,
			effect : -4091032625089365,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'zZcmY9VyCHNo0iPr',
				text : $client->textWithEntities(...),
				hash : -6346516708119951433,
			),
			report_delivery_until_date : 72,
			paid_message_stars : -2707255957660481499,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(...),
				schedule_date : 78,
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
			id : 32,
			from_id : $client->peerUser(
				user_id : 4279704104708870292,
			),
			peer_id : $client->peerUser(
				user_id : -1867349200155302254,
			),
			saved_peer_id : $client->peerUser(
				user_id : -6048337892646549664,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 17,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 80,
				quote_text : '4DfJKzpkENiSnevC',
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
				quote_offset : 13,
				todo_item_id : 42,
			),
			date : 90,
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
			ttl_period : 56,
		),
	),
	new_encrypted_messages : array(
		$client->encryptedMessage(
			random_id : -3469426630171002468,
			chat_id : 94,
			date : 43,
			bytes : '??<?LiveProtov??՟',
			file : $client->encryptedFileEmpty(),
		),
		$client->encryptedMessageService(
			random_id : -2073515371920336092,
			chat_id : 45,
			date : 78,
			bytes : '|н_HLiveProto!?W??',
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 67,
				peer_id : $client->peerUser(...),
			),
			pts : 46,
			pts_count : 72,
		),
		$client->updateMessageID(
			id : 19,
			random_id : 8780678354212381403,
		),
		$client->updateDeleteMessages(
			messages : array(32),
			pts : 88,
			pts_count : 51,
		),
		$client->updateUserTyping(
			user_id : 4586602567267340604,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -4324114058489888684,
			from_id : $client->peerUser(
				user_id : 1752517805636736780,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -1347316027680275939,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : -4914913835427577762,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -6498203146701122210,
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
			hash : 6742751150805020925,
			date : 69,
			device : 'eATRrnNgyLVDKxO0',
			location : 'SEW83bPiVuNMCF1c',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 4698487556528033093,
				chat_id : 4,
				date : 86,
				bytes : '???LiveProto+m???',
				file : $client->encryptedFileEmpty(...),
			),
			qts : 72,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 6,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 31,
			),
			date : 40,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 75,
			max_date : 66,
			date : 5,
		),
		$client->updateChatParticipantAdd(
			chat_id : -8096690694630029676,
			user_id : 8222991843482570910,
			inviter_id : 6380683360207061606,
			date : 51,
			version : 13,
		),
		$client->updateChatParticipantDelete(
			chat_id : 6071190831456864412,
			user_id : -3341886131888501564,
			version : 48,
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
					id : 77,
					ip_address : '127.0.0.1',
					port : 21,
					secret : 'da???LiveProto67iCR',
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
				mute_until : 22,
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
			type : 'c4VgWTaAksSx8dvP',
			message : 'CqMHcY4wem7JWtQB',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 54,
					length : 76,
				),
				$client->messageEntityMention(
					offset : 98,
					length : 7,
				),
				$client->messageEntityHashtag(
					offset : 48,
					length : 13,
				),
				$client->messageEntityBotCommand(
					offset : 46,
					length : 29,
				),
				$client->messageEntityUrl(
					offset : 69,
					length : 52,
				),
				$client->messageEntityEmail(
					offset : 86,
					length : 91,
				),
				$client->messageEntityBold(
					offset : 92,
					length : 100,
				),
				$client->messageEntityItalic(
					offset : 57,
					length : 77,
				),
				$client->messageEntityCode(
					offset : 73,
					length : 8,
				),
				$client->messageEntityPre(
					offset : 32,
					length : 8,
					language : 'yeXNnc0QrYmz62Ia',
				),
				$client->messageEntityTextUrl(
					offset : 95,
					length : 45,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 44,
					length : 79,
					user_id : -7146019283753621741,
				),
				$client->inputMessageEntityMentionName(
					offset : 86,
					length : 11,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 92,
					length : 6,
				),
				$client->messageEntityCashtag(
					offset : 23,
					length : 59,
				),
				$client->messageEntityUnderline(
					offset : 25,
					length : 11,
				),
				$client->messageEntityStrike(
					offset : 82,
					length : 29,
				),
				$client->messageEntityBankCard(
					offset : 95,
					length : 60,
				),
				$client->messageEntitySpoiler(
					offset : 35,
					length : 89,
				),
				$client->messageEntityCustomEmoji(
					offset : 100,
					length : 38,
					document_id : 5952620323181521037,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 69,
					length : 7,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-8558638464271888057),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(2712874037635806964),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(7991105132388410476),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-4205024124870881134),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -1631821489724969811,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 77,
			peer : $client->peerUser(
				user_id : 7441123899800509547,
			),
			max_id : 74,
			still_unread_count : 88,
			pts : 72,
			pts_count : 99,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -939404507207274885,
			),
			max_id : 76,
			pts : 19,
			pts_count : 26,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 7521535915385040981,
				url : 'https://docs.liveproto.dev',
			),
			pts : 26,
			pts_count : 42,
		),
		$client->updateReadMessagesContents(
			messages : array(42),
			pts : 85,
			pts_count : 60,
			date : 23,
		),
		$client->updateChannelTooLong(
			channel_id : 4507181784133674886,
			pts : 62,
		),
		$client->updateChannel(
			channel_id : -370425454918127902,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 38,
				peer_id : $client->peerUser(...),
			),
			pts : 28,
			pts_count : 50,
		),
		$client->updateReadChannelInbox(
			folder_id : 24,
			channel_id : 5076997423979463702,
			max_id : 18,
			still_unread_count : 21,
			pts : 15,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -4554151475885167052,
			messages : array(77),
			pts : 92,
			pts_count : 51,
		),
		$client->updateChannelMessageViews(
			channel_id : 1160824762927963530,
			id : 77,
			views : 27,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 7305049457541111397,
			user_id : -6695162037329191436,
			is_admin : true,
			version : 89,
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
			order : array(-4858609547273767456),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 3671127598301807353,
			user_id : 7843934534432998970,
			query : 'BkXef80qIF4HvbsW',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'r6YvtOzywcbE8PM1',
		),
		$client->updateBotInlineSend(
			user_id : -3829579708272446805,
			query : 'X9seESt1NYDIJMR3',
			geo : $client->geoPointEmpty(),
			id : 'xmVQsgPptUzoIZb6',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 67,
				id : 1852857264251848186,
				access_hash : 8730891785090290628,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 90,
				peer_id : $client->peerUser(...),
			),
			pts : 84,
			pts_count : 58,
		),
		$client->updateBotCallbackQuery(
			query_id : 3094317583948007316,
			user_id : -2117893428718391659,
			peer : $client->peerUser(
				user_id : -4450797803879055193,
			),
			msg_id : 55,
			chat_instance : 5649746905677589812,
			data : '??r[LiveProto?????',
			game_short_name : 'bOGrEfN6TFwzyMq3',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 51,
				peer_id : $client->peerUser(...),
			),
			pts : 37,
			pts_count : 47,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -743527015001468170,
			user_id : -3124646596395074265,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 12,
				id : 2408032814876555063,
				access_hash : -3614833929154390544,
			),
			chat_instance : -3325022130567219179,
			data : '?@??LiveProto?2?
',
			game_short_name : 'xvITpkU0PRFshga8',
		),
		$client->updateReadChannelOutbox(
			channel_id : -5330610144919055085,
			max_id : 51,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : -4843598774747416550,
			),
			top_msg_id : 56,
			saved_peer_id : $client->peerUser(
				user_id : 6404519254047235963,
			),
			draft : $client->draftMessageEmpty(
				date : 31,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -7811214906900307441,
			webpage : $client->webPageEmpty(
				id : -5960667670256996820,
				url : 'https://docs.liveproto.dev',
			),
			pts : 0,
			pts_count : 32,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 84,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 61,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 10,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'wupc8ldxAD0ktMq5',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -2825483298192157830,
			data : $client->dataJSON(
				data : '8gK3SFLHhB9GsVJx',
			),
			timeout : 14,
		),
		$client->updateBotShippingQuery(
			query_id : -4436976330892187716,
			user_id : 1587221522283953970,
			payload : 'B??łLiveProto??܇L',
			shipping_address : $client->postAddress(
				street_line1 : '7VNhEObJIwW3HC4p',
				street_line2 : 'MotHD9rRVIXFjWe8',
				city : 'NklzECe2Hy1dD39x',
				state : '1brLD3gvJyK6xwCB',
				country_iso2 : 'nFYBJ4WPOuH5ylvG',
				post_code : 'vSf2MTI5q1EwYZDA',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 2526910067393834709,
			user_id : -7812874894274886800,
			payload : '????ULiveProto$ ??Z',
			info : $client->paymentRequestedInfo(
				name : 'Fx3ca79Qpy5tUTXq',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : '1w4o7sFuQgBL3lJ2',
			currency : 'eCVdGROD0pnFvBKQ',
			total_amount : 8769538893969872509,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -4131606427620309434,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'Jz5VUtbpg9XrWTfy',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'bKDhVNAtCHTlZnow',
				from_version : 98,
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
			channel_id : -5547969804461871132,
			top_msg_id : 9,
			saved_peer_id : $client->peerUser(
				user_id : 7688897583275909686,
			),
			messages : array(97),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -6491157608123262566,
			available_min_id : 8,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : -5965821589344175118,
			),
		),
		$client->updateMessagePoll(
			poll_id : 3539142945964586134,
			poll : $client->poll(
				id : 7219103287015166559,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 55,
				close_date : 48,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 22,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'qNPMwmaKDczhrUIe',
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
				user_id : 6922399745053115517,
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
				until_date : 21,
			),
			version : 79,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 74,
				),
			),
			pts : 55,
			pts_count : 69,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 4420874596362739430,
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
				geo_distance : 84,
				request_chat_title : 'jHd0sgXUWiPl6Zno',
				request_chat_date : 16,
				business_bot_id : 4071201734603155430,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 6713876053471472403,
				registration_month : 'IRUnr64WFAdSYojZ',
				phone_country : '+1234567890',
				name_change_date : 57,
				photo_change_date : 26,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 80,
					distance : 18,
				),
				$client->peerSelfLocated(
					expires : 91,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 52,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -4080316390614931488,
			),
			messages : array(97),
			sent_messages : array(35),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 62848100804787246,
				access_hash : 6807508954783351014,
				slug : 'JonRUwamWBsrK3X9',
				title : 'gG6y1L40RCdMXAHW',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'YsPMaXJGnbBT89zW',
				installs_count : 66,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -2805506273088605369,
			),
			msg_id : 35,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 6552000408746367186,
			peer : $client->peerUser(
				user_id : 3599390130368448919,
			),
			options : array('I???MLiveProto???^?'),
			qts : 69,
		),
		$client->updateDialogFilter(
			id : 96,
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
				id : 64,
				title : $client->textWithEntities(...),
				emoticon : '0TOYzkbPA4oJclVq',
				color : 85,
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
			order : array(82),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -3732059778896521322,
			data : '.???LiveProtol-??',
		),
		$client->updateChannelMessageForwards(
			channel_id : 7907245394627099428,
			id : 19,
			forwards : 22,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 3632825213738070709,
			top_msg_id : 17,
			read_max_id : 28,
			broadcast_id : -348683517441154722,
			broadcast_post : 6,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 4494636945116507556,
			top_msg_id : 89,
			read_max_id : 85,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 1603474816332779890,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -6501098195057852584,
			top_msg_id : 87,
			from_id : $client->peerUser(
				user_id : 9149357899790322937,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -3553768795092423556,
			),
			messages : array(55),
			pts : 78,
			pts_count : 98,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -7442417594726102114,
			messages : array(9),
			pts : 46,
			pts_count : 19,
		),
		$client->updateChat(
			chat_id : -7894678317395101438,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 8546540023914032247,
				access_hash : 2881929403648542639,
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
					date : 49,
					active_date : 31,
					source : 22,
					volume : 0,
					about : 'WN6tSAbIJurO17Td',
					raise_hand_rating : -3081893749857539505,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 49,
		),
		$client->updateGroupCall(
			chat_id : 2082728744481103667,
			call : $client->groupCallDiscarded(
				id : -3723564686308470661,
				access_hash : 6602050017104849290,
				duration : 62,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 5702427920301902449,
			),
			ttl_period : 31,
		),
		$client->updateChatParticipant(
			chat_id : -227670143676597163,
			date : 83,
			actor_id : -277245965017973737,
			user_id : -6327925139642783526,
			prev_participant : $client->chatParticipant(
				user_id : -5736118571844027383,
				inviter_id : -7546517475359460465,
				date : 68,
			),
			new_participant : $client->chatParticipant(
				user_id : -5323427802716824869,
				inviter_id : 6639789798265230757,
				date : 71,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'YIWrNXBA2TsxtM1g',
				admin_id : 3267342945042717928,
				date : 58,
				start_date : 71,
				expire_date : 27,
				usage_limit : 25,
				usage : 22,
				requested : 39,
				subscription_expired : 5,
				title : '4VCoWmE6rlIgn7A5',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 32,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -659604735294119206,
			date : 52,
			actor_id : 3109222190966876557,
			user_id : -2608756114783437503,
			prev_participant : $client->channelParticipant(
				user_id : 4749822764919136559,
				date : 29,
				subscription_until_date : 57,
			),
			new_participant : $client->channelParticipant(
				user_id : -7096891373699090074,
				date : 0,
				subscription_until_date : 95,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'YNCbpsPxr8uJ3cjg',
				admin_id : 6199823759188407052,
				date : 15,
				start_date : 60,
				expire_date : 58,
				usage_limit : 69,
				usage : 49,
				requested : 54,
				subscription_expired : 18,
				title : 'YpljwgW4IOM0NHPV',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 91,
		),
		$client->updateBotStopped(
			user_id : -8459677176064788933,
			date : 76,
			stopped : true,
			qts : 20,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'ibOAW0MwZDtjIf5E',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 5082288542429873700,
			),
			bot_id : 713064264500514339,
			commands : array(
				$client->botCommand(
					command : '801cfXBybPEuiJSg',
					description : 'SpAxEHyZr4VINnFL',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -8514028874474979053,
			),
			requests_pending : 50,
			recent_requesters : array(-5873378041514354885),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 6071496797007396747,
			),
			date : 27,
			user_id : -6864916173570170219,
			about : 'tUBxmlDZFO4WRz3q',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'BydHRL4mi07aYoeU',
				admin_id : -88367328441187874,
				date : 41,
				start_date : 81,
				expire_date : 39,
				usage_limit : 84,
				usage : 63,
				requested : 37,
				subscription_expired : 43,
				title : 'TAMKVauENPRxC5zb',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 0,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 66873468084966920,
			),
			msg_id : 55,
			top_msg_id : 67,
			saved_peer_id : $client->peerUser(
				user_id : -7837506930924016442,
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
			query_id : -956733455705095298,
		),
		$client->updateBotMenuButton(
			bot_id : 7526515008031619137,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 884292541518415104,
			),
			msg_id : 1,
			transcription_id : 5536221830786490484,
			text : 'EaKwck9e5N6yboTP',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -7096550638163920223,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 9045995176416285587,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 5145980897909957249,
			),
			msg_id : 38,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 3,
					h : 80,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 100,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : 2371202770517273789,
			topic_id : 76,
		),
		$client->updateChannelPinnedTopics(
			channel_id : -7183782257166657920,
			order : array(54),
		),
		$client->updateUser(
			user_id : -4469501818659732213,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 4000650508134940981,
			),
			story : $client->storyItemDeleted(
				id : 55,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : 3266062040529030008,
			),
			max_id : 56,
		),
		$client->updateStoryID(
			id : 8,
			random_id : 5393525579985363042,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 78,
				cooldown_until_date : 8,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -2828468904107528410,
			),
			story_id : 34,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -5807904853834493459,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'ZzbNVKMqrtkiYoT6',
				user_id : 4710868721487227289,
				giveaway_msg_id : 49,
				date : 27,
				expires : 96,
				used_gift_slug : 'eXGFxI6yc0wolEsY',
				multiplier : 0,
				stars : 8167031155227150945,
			),
			qts : 78,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 4181423173188852708,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -4334878331559759125,
			),
			wallpaper : $client->wallPaper(
				id : 118838150692741460,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -4989201940927278701,
				slug : 'Yq0WAmb5uhxsUdSp',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 2790008885746411206,
			),
			msg_id : 100,
			date : 61,
			actor : $client->peerUser(
				user_id : -500030061893358804,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'XdUGIqu9TaptSgcw',
				),
				$client->reactionCustomEmoji(
					document_id : 7821308681768129570,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'Cmwzi205q8nVofuQ',
				),
				$client->reactionCustomEmoji(
					document_id : -8028809360816767811,
				),
				$client->reactionPaid(),
			),
			qts : 21,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 6039374450141082555,
			),
			msg_id : 87,
			date : 43,
			reactions : array(
				$client->reactionCount(
					chosen_order : 100,
					reaction : $client->reactionEmpty(...),
					count : 94,
				),
			),
			qts : 27,
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
			job_id : '4T3KNy1HR5FAfJGW',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 92,
					shortcut : 'HU9NZjGA3z6mefFv',
					top_message : 47,
					count : 71,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 8,
				shortcut : 'PUG6B583RYakNcQS',
				top_message : 94,
				count : 17,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 58,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 86,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 17,
			messages : array(12),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'Tm2wXoP1ufsbdIWG',
				user_id : 1954753791402212939,
				dc_id : 46,
				date : 8,
				rights : $client->businessBotRights(...),
			),
			qts : 20,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : '9owrOs5qzMAfhZ7S',
			message : $client->messageEmpty(
				id : 78,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 98,
				peer_id : $client->peerUser(...),
			),
			qts : 7,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'KPck2HMyfANenGVb',
			message : $client->messageEmpty(
				id : 37,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 29,
				peer_id : $client->peerUser(...),
			),
			qts : 97,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'ze6sNilKv4JXOfmS',
			peer : $client->peerUser(
				user_id : 6775778507760826220,
			),
			messages : array(98),
			qts : 33,
		),
		$client->updateNewStoryReaction(
			story_id : 10,
			peer : $client->peerUser(
				user_id : -5493947882457446559,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 7705861342253860246,
				nanos : 95,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 2133449143850772612,
			user_id : -6863359263121775780,
			connection_id : 'SUADjQVOIoepCwzu',
			message : $client->messageEmpty(
				id : 41,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 99,
				peer_id : $client->peerUser(...),
			),
			chat_instance : -1211051261526318521,
			data : '?A?KLiveProtoR??',
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 6771684119484043988,
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
			user_id : -2253905532855752399,
			payload : 'c29PFfhU84kInwHD',
			qts : 57,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 2,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -3467506705450819399,
				access_hash : 6485963715014576569,
			),
			sub_chain_id : 71,
			blocks : array('???OLiveProto???K'),
			next_offset : 76,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -5184878716936075815,
			saved_peer_id : $client->peerUser(
				user_id : 2074518438594887400,
			),
			read_max_id : 31,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 6202195361342892519,
			saved_peer_id : $client->peerUser(
				user_id : -745041297705583005,
			),
			read_max_id : 92,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 8405959034359170604,
			saved_peer_id : $client->peerUser(
				user_id : -3105101164225529721,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7260744861074771268,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4264544666114487200,
			title : 'iyvdx1DEHLqS2uo9',
			photo : $client->chatPhotoEmpty(),
			participants_count : 77,
			date : 100,
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
				until_date : 37,
			),
		),
		$client->chatForbidden(
			id : 493834397267724537,
			title : 'J8huceKUNFpwXyH7',
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
			id : 3836606529199312804,
			access_hash : -2938538507715921541,
			title : 'SfjgQMyDArEHJpX5',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 33,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '3CqlpjJFuYHZSaIA',
					reason : 'BOdT7aouI0z9xchl',
					text : 'cdfDwHstP6IbMqm7',
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
				until_date : 54,
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
				until_date : 78,
			),
			participants_count : 95,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 9,
			color : $client->peerColor(
				color : 22,
				background_emoji_id : 3944922597974355526,
			),
			profile_color : $client->peerColor(
				color : 64,
				background_emoji_id : -7429220493879677541,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 92,
			subscription_until_date : 31,
			bot_verification_icon : 8196770815498259248,
			send_paid_messages_stars : 1866302098465506211,
			linked_monoforum_id : -2181602550445338750,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -7677468865471235468,
			access_hash : -7402281355985046892,
			title : 'XmK8OWwibTdZgxn6',
			until_date : 58,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4832579203032984840,
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
			id : -5269302962427506806,
			access_hash : 5256355166543688484,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 62,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'F2iLE4Rm8dfh3ZIt',
					reason : 'JgCRQj0ZtFKznsW6',
					text : 'l7CZvwhtRVjJA42n',
				),
			),
			bot_inline_placeholder : 'Y508dRGwPsuCZWiA',
			lang_code : 'w1ilDuLCmtTOBvPy',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 54,
			color : $client->peerColor(
				color : 47,
				background_emoji_id : -8039852067946519102,
			),
			profile_color : $client->peerColor(
				color : 67,
				background_emoji_id : 3732080105997769584,
			),
			bot_active_users : 1,
			bot_verification_icon : 2766236113686139504,
			send_paid_messages_stars : -2012891056447422636,
		),
	),
	state : $client->updates->state(
		pts : 53,
		qts : 23,
		date : 52,
		seq : 36,
		unread_count : 6,
	),
);
```