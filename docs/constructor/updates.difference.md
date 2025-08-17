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
			id : 94,
			peer_id : $client->peerUser(
				user_id : 6439716539386230551,
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
			id : 39,
			from_id : $client->peerUser(
				user_id : 5117652547652850322,
			),
			from_boosts_applied : 54,
			peer_id : $client->peerUser(
				user_id : -2354593720912094570,
			),
			saved_peer_id : $client->peerUser(
				user_id : -8886572175730549648,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(...),
				from_name : 'NG6Mv2iseZQbUwX8',
				date : 46,
				channel_post : 18,
				post_author : 'xom4jIl2nzCkfsT8',
				saved_from_peer : $client->peerUser(...),
				saved_from_msg_id : 4,
				saved_from_id : $client->peerUser(...),
				saved_from_name : 'IyHvg9G6Luj4YUfE',
				saved_date : 77,
				psa_type : 'BwkxSNcEAJMYusbC',
			),
			via_bot_id : 6793417065410556903,
			via_business_bot_id : -5726627326116335342,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 25,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 51,
				quote_text : 'HZXCW9VL2AOGRBIi',
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
				quote_offset : 27,
				todo_item_id : 35,
			),
			date : 49,
			message : '05OJVLMCqRTWx48m',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 42,
					length : 75,
				),
				$client->messageEntityMention(
					offset : 98,
					length : 9,
				),
				$client->messageEntityHashtag(
					offset : 85,
					length : 84,
				),
				$client->messageEntityBotCommand(
					offset : 40,
					length : 9,
				),
				$client->messageEntityUrl(
					offset : 95,
					length : 15,
				),
				$client->messageEntityEmail(
					offset : 35,
					length : 72,
				),
				$client->messageEntityBold(
					offset : 65,
					length : 21,
				),
				$client->messageEntityItalic(
					offset : 61,
					length : 92,
				),
				$client->messageEntityCode(
					offset : 9,
					length : 86,
				),
				$client->messageEntityPre(
					offset : 68,
					length : 88,
					language : 'ovZQLiYy4TqB5Vkf',
				),
				$client->messageEntityTextUrl(
					offset : 37,
					length : 86,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 76,
					length : 87,
					user_id : 863154130300330745,
				),
				$client->inputMessageEntityMentionName(
					offset : 27,
					length : 24,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 15,
					length : 70,
				),
				$client->messageEntityCashtag(
					offset : 99,
					length : 6,
				),
				$client->messageEntityUnderline(
					offset : 27,
					length : 58,
				),
				$client->messageEntityStrike(
					offset : 60,
					length : 5,
				),
				$client->messageEntityBankCard(
					offset : 25,
					length : 17,
				),
				$client->messageEntitySpoiler(
					offset : 28,
					length : 70,
				),
				$client->messageEntityCustomEmoji(
					offset : 70,
					length : 41,
					document_id : -3418359941578389292,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 16,
					length : 33,
				),
			),
			views : 19,
			forwards : 73,
			replies : $client->messageReplies(
				comments : true,
				replies : 65,
				replies_pts : 75,
				recent_repliers : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				channel_id : 8807021888439030095,
				max_id : 1,
				read_max_id : 46,
			),
			edit_date : 4,
			post_author : '95TGxQL2Plm01yvd',
			grouped_id : -1657456641280140464,
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
					platform : 'LE4KrS3F58pTnqye',
					reason : 'VE5MgvLlNHZ69nap',
					text : 'gGHvYFXPSlaRcjdB',
				),
			),
			ttl_period : 44,
			quick_reply_shortcut_id : 21,
			effect : -7650933577180784401,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'ZRAhy0KgQOrukxB8',
				text : $client->textWithEntities(...),
				hash : 5147474629851744366,
			),
			report_delivery_until_date : 63,
			paid_message_stars : -1192318609353315783,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(...),
				schedule_date : 97,
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
			id : 82,
			from_id : $client->peerUser(
				user_id : -7639585039053247985,
			),
			peer_id : $client->peerUser(
				user_id : 2122314510801544329,
			),
			saved_peer_id : $client->peerUser(
				user_id : 12428281312788438,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 88,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 90,
				quote_text : 'jIe4kSzUMZcbx8w3',
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
				quote_offset : 29,
				todo_item_id : 76,
			),
			date : 0,
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
			ttl_period : 16,
		),
	),
	new_encrypted_messages : array(
		$client->encryptedMessage(
			random_id : -3951106393433471606,
			chat_id : 89,
			date : 43,
			bytes : '?+O?LiveProto?l?s',
			file : $client->encryptedFileEmpty(),
		),
		$client->encryptedMessageService(
			random_id : -4316074220947290845,
			chat_id : 33,
			date : 64,
			bytes : '7?LiveProto?i??',
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 6,
				peer_id : $client->peerUser(...),
			),
			pts : 65,
			pts_count : 65,
		),
		$client->updateMessageID(
			id : 74,
			random_id : -1566762195884557171,
		),
		$client->updateDeleteMessages(
			messages : array(99),
			pts : 51,
			pts_count : 20,
		),
		$client->updateUserTyping(
			user_id : -7508070328474627938,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -4417404557973700798,
			from_id : $client->peerUser(
				user_id : -8861190383079390684,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 2869279584581696821,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : -7844054592074371106,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 4593650318813232229,
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
			hash : -6055989925477370180,
			date : 57,
			device : 'yzvnQo4kuc0wD9IZ',
			location : 'aqQvwrm2HNChc6MX',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -2971514870512134846,
				chat_id : 83,
				date : 76,
				bytes : '?y?yyLiveProtoB?c?C',
				file : $client->encryptedFileEmpty(...),
			),
			qts : 89,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 36,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 29,
			),
			date : 46,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 74,
			max_date : 21,
			date : 38,
		),
		$client->updateChatParticipantAdd(
			chat_id : -3637873632019500006,
			user_id : -8810666066021264470,
			inviter_id : -7583775156772582358,
			date : 3,
			version : 90,
		),
		$client->updateChatParticipantDelete(
			chat_id : -7482207973541448342,
			user_id : -3749021089602332003,
			version : 92,
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
					id : 55,
					ip_address : '127.0.0.1',
					port : 13,
					secret : 'D?iS?LiveProtoEE?]}',
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
				mute_until : 38,
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
			inbox_date : 77,
			type : 'KEnqpO95VvDjbPFf',
			message : 'XHvBkADCYhjULOIs',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 32,
					length : 7,
				),
				$client->messageEntityMention(
					offset : 64,
					length : 18,
				),
				$client->messageEntityHashtag(
					offset : 48,
					length : 99,
				),
				$client->messageEntityBotCommand(
					offset : 72,
					length : 72,
				),
				$client->messageEntityUrl(
					offset : 70,
					length : 80,
				),
				$client->messageEntityEmail(
					offset : 97,
					length : 2,
				),
				$client->messageEntityBold(
					offset : 86,
					length : 43,
				),
				$client->messageEntityItalic(
					offset : 56,
					length : 22,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 77,
				),
				$client->messageEntityPre(
					offset : 42,
					length : 99,
					language : 'dkh9EaG4bWHOjSLu',
				),
				$client->messageEntityTextUrl(
					offset : 54,
					length : 11,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 64,
					length : 37,
					user_id : 215809475082599582,
				),
				$client->inputMessageEntityMentionName(
					offset : 27,
					length : 26,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 20,
					length : 5,
				),
				$client->messageEntityCashtag(
					offset : 79,
					length : 45,
				),
				$client->messageEntityUnderline(
					offset : 66,
					length : 48,
				),
				$client->messageEntityStrike(
					offset : 67,
					length : 100,
				),
				$client->messageEntityBankCard(
					offset : 67,
					length : 94,
				),
				$client->messageEntitySpoiler(
					offset : 33,
					length : 66,
				),
				$client->messageEntityCustomEmoji(
					offset : 28,
					length : 40,
					document_id : -3499055352826937598,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 78,
					length : 13,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(7542125478435230992),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-2779076986631973623),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-7945220064150079291),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-2875602058936132901),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 5648260358943181692,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 63,
			peer : $client->peerUser(
				user_id : 5079494489475585582,
			),
			max_id : 60,
			still_unread_count : 73,
			pts : 34,
			pts_count : 2,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 4682004019034962538,
			),
			max_id : 98,
			pts : 18,
			pts_count : 94,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -7879294241433384732,
				url : 'https://docs.liveproto.dev',
			),
			pts : 29,
			pts_count : 29,
		),
		$client->updateReadMessagesContents(
			messages : array(32),
			pts : 33,
			pts_count : 72,
			date : 40,
		),
		$client->updateChannelTooLong(
			channel_id : -1006809354227539171,
			pts : 1,
		),
		$client->updateChannel(
			channel_id : -3385438304957620053,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 81,
				peer_id : $client->peerUser(...),
			),
			pts : 50,
			pts_count : 2,
		),
		$client->updateReadChannelInbox(
			folder_id : 61,
			channel_id : -2655532940186263242,
			max_id : 23,
			still_unread_count : 27,
			pts : 58,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -63970893471226015,
			messages : array(62),
			pts : 7,
			pts_count : 20,
		),
		$client->updateChannelMessageViews(
			channel_id : 6745784807862556252,
			id : 7,
			views : 97,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 1614915883810674974,
			user_id : -6457197374322384866,
			is_admin : $client->boolFalse(),
			version : 71,
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
			order : array(4951843415375723614),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -1455832121782015199,
			user_id : -2004057919370285220,
			query : 'owSchlkCHKaQ17P6',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'bsvgkur6XecBzWCL',
		),
		$client->updateBotInlineSend(
			user_id : -7286680889251876997,
			query : '6wlK0LBkJFMuNQOU',
			geo : $client->geoPointEmpty(),
			id : 'UtgazNwYZyxCTnrs',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 38,
				id : -5472028338471246372,
				access_hash : 6806526581758976551,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 37,
				peer_id : $client->peerUser(...),
			),
			pts : 89,
			pts_count : 54,
		),
		$client->updateBotCallbackQuery(
			query_id : 617715186523893255,
			user_id : -1695084798918649865,
			peer : $client->peerUser(
				user_id : -196533907120996174,
			),
			msg_id : 54,
			chat_instance : -9008850212897470376,
			data : 'b?Z?LiveProto?N?e?',
			game_short_name : 'dGkbh947Ut5QAOpM',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 66,
				peer_id : $client->peerUser(...),
			),
			pts : 1,
			pts_count : 54,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 3286888097319628305,
			user_id : -991874998800814293,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 75,
				id : -6123713492395548722,
				access_hash : 5411260984194305789,
			),
			chat_instance : -808721843052768733,
			data : 'k?o??LiveProto?????',
			game_short_name : '6k9BcKioPTJdze2s',
		),
		$client->updateReadChannelOutbox(
			channel_id : -2097095532647877522,
			max_id : 25,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 884445839608351924,
			),
			top_msg_id : 55,
			saved_peer_id : $client->peerUser(
				user_id : 7594178101686143368,
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
			channel_id : -7200921677412056997,
			webpage : $client->webPageEmpty(
				id : 8845103966995260260,
				url : 'https://docs.liveproto.dev',
			),
			pts : 20,
			pts_count : 12,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 68,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 80,
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
				data : '8hJGFwdXoCi6aIPe',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -7715650963059430214,
			data : $client->dataJSON(
				data : '7aMXu60qxdVc4mND',
			),
			timeout : 22,
		),
		$client->updateBotShippingQuery(
			query_id : 7454360906943255569,
			user_id : 581401816405880000,
			payload : 'w?LiveProtoŴ/?<',
			shipping_address : $client->postAddress(
				street_line1 : 'NCGHjnz2E6iyr7p8',
				street_line2 : 'LdIjygnp9Y5k3xui',
				city : 'LTdbuMZvpP7s1kNA',
				state : 'etKCD6h70cTEkNGi',
				country_iso2 : 'vdo0BPQpqDsLbg6u',
				post_code : 'MHyBrcIkFRTznWVE',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 2937934760668120026,
			user_id : -1563943113516548152,
			payload : '????LiveProto?|.?',
			info : $client->paymentRequestedInfo(
				name : '2ysXZob9T4zrJcxu',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'qhsIafy05R3SOTwk',
			currency : 'i3BjEJetkAsS5xHl',
			total_amount : 2899910854780649697,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -6456522889804521061,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : '4ITFUtHCrV5ycSkP',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'ID1oS6xuW5cze3ZT',
				from_version : 60,
				version : 54,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -2361149192006024210,
			top_msg_id : 24,
			saved_peer_id : $client->peerUser(
				user_id : -3097587791050449212,
			),
			messages : array(37),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -4116321190162348342,
			available_min_id : 60,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : 439540314434863764,
			),
		),
		$client->updateMessagePoll(
			poll_id : 379204088399708687,
			poll : $client->poll(
				id : 9149047484083287236,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 38,
				close_date : 76,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 66,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'nWqDsF5QMOHjN7cP',
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
				user_id : -1009554438531468090,
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
				until_date : 34,
			),
			version : 17,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 13,
				),
			),
			pts : 64,
			pts_count : 96,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -1047628785490170380,
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
				geo_distance : 8,
				request_chat_title : '3yKbBpdI6kQlYHZr',
				request_chat_date : 73,
				business_bot_id : 5337832338118969115,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 8023223617013983310,
				registration_month : 'RCpDcLriWtaY4uUO',
				phone_country : '+1234567890',
				name_change_date : 75,
				photo_change_date : 15,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 23,
					distance : 33,
				),
				$client->peerSelfLocated(
					expires : 56,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 66,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -7733959644536703963,
			),
			messages : array(3),
			sent_messages : array(63),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -3642389187274339220,
				access_hash : 1589491767483953330,
				slug : '5cuJbKqwERBjVhfS',
				title : 'Mbuv0larQIpyZ8Bx',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'paKLs0leGTAB9dtr',
				installs_count : 13,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 3295985134025015871,
			),
			msg_id : 8,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -8899174202850987750,
			peer : $client->peerUser(
				user_id : -54215021694914920,
			),
			options : array('yl,#LiveProtol??dZ'),
			qts : 45,
		),
		$client->updateDialogFilter(
			id : 11,
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
				id : 59,
				title : $client->textWithEntities(...),
				emoticon : '4epGFT58AVE70ylC',
				color : 16,
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
			order : array(40),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -1788667825818030508,
			data : '6?"??LiveProto??]	',
		),
		$client->updateChannelMessageForwards(
			channel_id : -5591507866970851826,
			id : 45,
			forwards : 23,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -6665821085718363954,
			top_msg_id : 6,
			read_max_id : 6,
			broadcast_id : 3209342325829282413,
			broadcast_post : 39,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 5251575890050148577,
			top_msg_id : 76,
			read_max_id : 11,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 4618128016575103160,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : 3244982344496467708,
			top_msg_id : 38,
			from_id : $client->peerUser(
				user_id : -1786372478451923110,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 4785218194279900147,
			),
			messages : array(89),
			pts : 35,
			pts_count : 34,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 3474977623401845240,
			messages : array(94),
			pts : 22,
			pts_count : 12,
		),
		$client->updateChat(
			chat_id : -4970227024679705454,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -1762706302006514272,
				access_hash : -8729733704727743103,
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
					date : 91,
					active_date : 36,
					source : 18,
					volume : 72,
					about : 'LPsEvW92tKp5zk6B',
					raise_hand_rating : 8438379260040512519,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 43,
		),
		$client->updateGroupCall(
			chat_id : -8805321554582696149,
			call : $client->groupCallDiscarded(
				id : 5856466414347814920,
				access_hash : 2875836268581969226,
				duration : 61,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 173744729337775824,
			),
			ttl_period : 82,
		),
		$client->updateChatParticipant(
			chat_id : -5706240343805886759,
			date : 44,
			actor_id : 1831204391646093100,
			user_id : 2595418422567748292,
			prev_participant : $client->chatParticipant(
				user_id : 8864385664293590050,
				inviter_id : -7260417508567190743,
				date : 93,
			),
			new_participant : $client->chatParticipant(
				user_id : 7604310106461556537,
				inviter_id : -4180438806626436705,
				date : 92,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'V1jWnFSJpG0POiZ7',
				admin_id : 2153128581117447633,
				date : 16,
				start_date : 24,
				expire_date : 72,
				usage_limit : 75,
				usage : 44,
				requested : 46,
				subscription_expired : 50,
				title : 'j6g3uSIZQdxHRrw1',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 7,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -4636869767324594235,
			date : 93,
			actor_id : 9051968317143400218,
			user_id : -4683999177974075744,
			prev_participant : $client->channelParticipant(
				user_id : 669483749520192388,
				date : 52,
				subscription_until_date : 7,
			),
			new_participant : $client->channelParticipant(
				user_id : 2237464419147633966,
				date : 37,
				subscription_until_date : 48,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'tUJM8lIHYnNOXvFw',
				admin_id : 2624077897063487821,
				date : 38,
				start_date : 3,
				expire_date : 80,
				usage_limit : 13,
				usage : 74,
				requested : 89,
				subscription_expired : 17,
				title : 'sbDLIvBtUueCkmoJ',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 74,
		),
		$client->updateBotStopped(
			user_id : 6010612506299428228,
			date : 97,
			stopped : $client->boolFalse(),
			qts : 11,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'Z04PkxeVEqHapb6C',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 6585914686626106005,
			),
			bot_id : -5027704912405728027,
			commands : array(
				$client->botCommand(
					command : 'ktRToSwglK8zGYuj',
					description : '865LRfyNTzF4tZEo',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 4259590048857786739,
			),
			requests_pending : 50,
			recent_requesters : array(6962025878505784107),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 6771041778262829297,
			),
			date : 9,
			user_id : -4111021756955970611,
			about : 'CntSaIR5VQlwXKov',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'WqEgPjT1rlmRz9tN',
				admin_id : 110497387504135983,
				date : 77,
				start_date : 5,
				expire_date : 98,
				usage_limit : 53,
				usage : 54,
				requested : 54,
				subscription_expired : 5,
				title : 'MVbpmuqWE4oSyPjl',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 93,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 3023823121410660213,
			),
			msg_id : 31,
			top_msg_id : 62,
			saved_peer_id : $client->peerUser(
				user_id : -7591391547256458083,
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
			query_id : -1550385740045612352,
		),
		$client->updateBotMenuButton(
			bot_id : -7032896647570483868,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 5163037016692429104,
			),
			msg_id : 29,
			transcription_id : 4608071398057144257,
			text : '6Cx3hIY2dArfQEzy',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 4215065715880419178,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -7936155702027587723,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 2442682573112303827,
			),
			msg_id : 18,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 81,
					h : 63,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 59,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : 8168448688208366602,
			topic_id : 11,
		),
		$client->updateChannelPinnedTopics(
			channel_id : 1603076201045342395,
			order : array(76),
		),
		$client->updateUser(
			user_id : -9063628659890124753,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 2514185182055789924,
			),
			story : $client->storyItemDeleted(
				id : 82,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -6644645193937991891,
			),
			max_id : 1,
		),
		$client->updateStoryID(
			id : 85,
			random_id : 6771099693345348290,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 59,
				cooldown_until_date : 29,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -1288106139747611359,
			),
			story_id : 52,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -8768936366457803046,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'kxoLwydYiJ6a5cKO',
				user_id : 846613949628011187,
				giveaway_msg_id : 9,
				date : 45,
				expires : 70,
				used_gift_slug : 'BQNPnskjW2RwOtgI',
				multiplier : 24,
				stars : -1536591054995462206,
			),
			qts : 41,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -7924249192872019581,
			enabled : $client->boolFalse(),
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -6270138119930167244,
			),
			wallpaper : $client->wallPaper(
				id : -3944135089469290655,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -532496295108911591,
				slug : 'B1AIwP5r6WDm7xeF',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 9174889614958419076,
			),
			msg_id : 34,
			date : 78,
			actor : $client->peerUser(
				user_id : -4773545701269636229,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'ux7h1Np6jIzmB3ia',
				),
				$client->reactionCustomEmoji(
					document_id : 1371630558299970675,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'jveNbKfsxACndtIc',
				),
				$client->reactionCustomEmoji(
					document_id : -6051484063975761673,
				),
				$client->reactionPaid(),
			),
			qts : 17,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 7876111822443205930,
			),
			msg_id : 28,
			date : 56,
			reactions : array(
				$client->reactionCount(
					chosen_order : 58,
					reaction : $client->reactionEmpty(...),
					count : 60,
				),
			),
			qts : 78,
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
					folder_id : 50,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'HUjPf5YCQxOtceRh',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 46,
					shortcut : 'Y5E9SRqCVAsxap3e',
					top_message : 77,
					count : 36,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 6,
				shortcut : 'HqVDQPtI0EKos5Z9',
				top_message : 52,
				count : 7,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 56,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 26,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 83,
			messages : array(25),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : '3d2OhlAvHpnq1CDj',
				user_id : -7437296372291021187,
				dc_id : 21,
				date : 39,
				rights : $client->businessBotRights(...),
			),
			qts : 12,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'YWZRhKTzAkwanPV0',
			message : $client->messageEmpty(
				id : 31,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 24,
				peer_id : $client->peerUser(...),
			),
			qts : 41,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'W538vOgYi2HyR9Ia',
			message : $client->messageEmpty(
				id : 73,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 22,
				peer_id : $client->peerUser(...),
			),
			qts : 47,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'yuFi2ZhMWN7n4LUa',
			peer : $client->peerUser(
				user_id : -3215032804477200735,
			),
			messages : array(15),
			qts : 7,
		),
		$client->updateNewStoryReaction(
			story_id : 89,
			peer : $client->peerUser(
				user_id : 3702558536297599464,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -5883374138444892015,
				nanos : 31,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -8312551915224935688,
			user_id : 7305481607692960268,
			connection_id : 'WQZgiaUk7fhmLqeI',
			message : $client->messageEmpty(
				id : 0,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 10,
				peer_id : $client->peerUser(...),
			),
			chat_instance : -4559160865822648041,
			data : '????LiveProto?jr?',
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 6855835724981359444,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 68,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -1070449633759466907,
			payload : 'lxz3muyNp6XcCQFj',
			qts : 31,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 32,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 1021547574581081315,
				access_hash : 9035902787708272498,
			),
			sub_chain_id : 15,
			blocks : array('7Ǭ}LiveProto??D'),
			next_offset : 14,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 6684506993119541132,
			saved_peer_id : $client->peerUser(
				user_id : -2556917812545686454,
			),
			read_max_id : 25,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -2741912075389856640,
			saved_peer_id : $client->peerUser(
				user_id : 2006487767513797627,
			),
			read_max_id : 55,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -8551815007365701937,
			saved_peer_id : $client->peerUser(
				user_id : -7701830134165414952,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 2680865813552270606,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -9080399278855445423,
			title : 'VOq6ucEWzXNaLKDF',
			photo : $client->chatPhotoEmpty(),
			participants_count : 24,
			date : 17,
			version : 18,
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
				until_date : 92,
			),
		),
		$client->chatForbidden(
			id : -1919880529072331134,
			title : 'LyDzdI1TWjeUk9pv',
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
			id : 5082616891973538604,
			access_hash : -6131739580351255815,
			title : '4TFGIvYtiwPbMgje',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 35,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'XR0LtmV6IAwfgHkz',
					reason : 'J1nlTiGDHerXoaQ3',
					text : 'Xbfxpijgom9AkvGe',
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
				until_date : 53,
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
				until_date : 52,
			),
			participants_count : 62,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 77,
			color : $client->peerColor(
				color : 64,
				background_emoji_id : -3884942866386043008,
			),
			profile_color : $client->peerColor(
				color : 26,
				background_emoji_id : -7359456450923964818,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 28,
			subscription_until_date : 90,
			bot_verification_icon : 4136264245863141568,
			send_paid_messages_stars : -1066311655157180478,
			linked_monoforum_id : -6273544080677348135,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 3760994899021854470,
			access_hash : 6152506660162637181,
			title : 'vCGrVXJzt503cU2T',
			until_date : 59,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8990845815675565579,
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
			id : -8572897790193880466,
			access_hash : 3063111299721258894,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 25,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'wQyjK48Xers7fqnW',
					reason : 'BJrTUYzF4QltKxHP',
					text : 'd4ua8qlbYSMwgf6P',
				),
			),
			bot_inline_placeholder : 'WnRNb36iFr9t2qy7',
			lang_code : 'ViKUpEIb4Z0rkvFq',
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
				color : 92,
				background_emoji_id : -3651381857821883519,
			),
			profile_color : $client->peerColor(
				color : 27,
				background_emoji_id : 1196774390245782282,
			),
			bot_active_users : 22,
			bot_verification_icon : -3589242065696985972,
			send_paid_messages_stars : 8351818124660384916,
		),
	),
	state : $client->updates->state(
		pts : 50,
		qts : 61,
		date : 68,
		seq : 0,
		unread_count : 39,
	),
);
```