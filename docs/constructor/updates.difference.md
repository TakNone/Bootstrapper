# updates.difference

**Description** : *Full list of occurred events*

**Layer** : 222

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
			id : 96,
			peer_id : $client->peerUser(
				user_id : -228738112117457218,
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
			id : 56,
			from_id : $client->peerUser(
				user_id : 7892632689033080304,
			),
			from_boosts_applied : 52,
			peer_id : $client->peerUser(
				user_id : -6606399322154693775,
			),
			saved_peer_id : $client->peerUser(
				user_id : -1884606895709641355,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 7663659376337454445,
				),
				from_name : 'jzgJGylxPTBZ9tk7',
				date : 55,
				channel_post : 24,
				post_author : 'aPMcTG7o2kHSXVyt',
				saved_from_peer : $client->peerUser(
					user_id : -1795283574654761492,
				),
				saved_from_msg_id : 13,
				saved_from_id : $client->peerUser(
					user_id : -5480483234465488995,
				),
				saved_from_name : 'GJx8p54Y1HoceXBz',
				saved_date : 50,
				psa_type : '5uTyfbJjMicNoRBP',
			),
			via_bot_id : 8261202951865936324,
			via_business_bot_id : 1413282043109975856,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 12,
				reply_to_peer_id : $client->peerUser(
					user_id : 2206593353036748073,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'ftpK8FunhQZoEIa4',
					date : 24,
					channel_post : 45,
					post_author : '13JZLTosI4F2lWnz',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 39,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'IB46dVyw7RWGOx18',
					saved_date : 100,
					psa_type : 'oS2wEa6nW9qPCOTy',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 65,
				quote_text : 'vyruDd9MacYfSPG5',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 27,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 75,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 89,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 49,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 81,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 2,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 16,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 60,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 52,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 32,
						language : 'SwTaZic27uGFRkHL',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 100,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 96,
						user_id : -8792578381765569783,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 4,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 96,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 39,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 36,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 35,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 73,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 54,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 18,
						document_id : -4690797222762418457,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 7,
					),
				),
				quote_offset : 12,
				todo_item_id : 90,
			),
			date : 77,
			message : 'FwAiGnf4oJak1Z8M',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 33,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 83,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 46,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 75,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 23,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 50,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 2,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 59,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 63,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 55,
					language : 'Q4UTMqcLobPsfGmx',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 39,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 87,
					user_id : -3731906092932342929,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 96,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 33,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 64,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 34,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 94,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 0,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 10,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 37,
					document_id : 3974484047222573920,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 55,
				),
			),
			views : 50,
			forwards : 77,
			replies : $client->messageReplies(
				comments : true,
				replies : 85,
				replies_pts : 80,
				recent_repliers : array(
					$client->peerUser(
						user_id : -1004185768873058188,
					),
					$client->peerChat(
						chat_id : -6223596614683481185,
					),
					$client->peerChannel(
						channel_id : 6614313305103438674,
					),
				),
				channel_id : -9060208435085021577,
				max_id : 10,
				read_max_id : 95,
			),
			edit_date : 17,
			post_author : 'IRQOMCZTXoyqiGgf',
			grouped_id : -6921070349339718548,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 32,
						reaction : $client->reactionEmpty(...),
						count : 53,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 62,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 72,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'TISL4t8i0WmlDRBF',
					reason : '4cdfwmKPLBGHah3W',
					text : 'om6rvcOf2DJMuZAg',
				),
			),
			ttl_period : 22,
			quick_reply_shortcut_id : 79,
			effect : -1287183442054766769,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'ORnCuBPgqQe2my4F',
				text : $client->textWithEntities(
					text : 'GK8V7j2U6MBhPwNx',
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
				hash : 0,
			),
			report_delivery_until_date : 62,
			paid_message_stars : 5023460331673449256,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 7662814324423570165,
					nanos : 18,
				),
				schedule_date : 21,
			),
			schedule_repeat_period : 54,
			summary_from_language : '5xMoghGBpm7IECPi',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 0,
			from_id : $client->peerUser(
				user_id : -288175443995520582,
			),
			peer_id : $client->peerUser(
				user_id : -2028998909721363471,
			),
			saved_peer_id : $client->peerUser(
				user_id : 2738315285602640300,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 32,
				reply_to_peer_id : $client->peerUser(
					user_id : -6477363239058987393,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'UCszxm7eLnGBi8A9',
					date : 30,
					channel_post : 0,
					post_author : '4jK0diX9Cqa53beD',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 79,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'DEKMWe3uC8arvG2q',
					saved_date : 44,
					psa_type : 'IA7i5k2HNUC6PJwg',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 69,
				quote_text : 'xyR5v3jbJcrh82sw',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 15,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 22,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 23,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 28,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 77,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 22,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 16,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 73,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 82,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 90,
						language : 'HRmwBq4cG1jFTvYd',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 83,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 69,
						user_id : -3810310842051974193,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 92,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 18,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 9,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 0,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 18,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 12,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 96,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 82,
						document_id : -8331224762062247225,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 91,
					),
				),
				quote_offset : 72,
				todo_item_id : 12,
			),
			date : 8,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 27,
						reaction : $client->reactionEmpty(...),
						count : 65,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 24,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 60,
					),
				),
			),
			ttl_period : 32,
		),
	),
	new_encrypted_messages : array(
		$client->encryptedMessage(
			random_id : 647334694372612653,
			chat_id : 67,
			date : 22,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			file : $client->encryptedFileEmpty(),
		),
		$client->encryptedMessageService(
			random_id : 3044157313454767965,
			chat_id : 8,
			date : 48,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 63,
				peer_id : $client->peerUser(
					user_id : -1469117036767213460,
				),
			),
			pts : 21,
			pts_count : 20,
		),
		$client->updateMessageID(
			id : 95,
			random_id : 6022861330030812925,
		),
		$client->updateDeleteMessages(
			messages : array(41),
			pts : 53,
			pts_count : 17,
		),
		$client->updateUserTyping(
			user_id : -4334382356415445281,
			top_msg_id : 35,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -4300410156196139306,
			from_id : $client->peerUser(
				user_id : 778792914318622282,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 3644952008771122427,
				self_participant : $client->chatParticipant(
					user_id : 7095419758398009807,
					inviter_id : 7386631631344999447,
					date : 48,
				),
			),
		),
		$client->updateUserStatus(
			user_id : -669707057310225517,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -2620454395404590711,
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
			date : 91,
			device : 'zEMZ3HVW8Fh0OAt2',
			location : 'w7OGabQhc90DAguI',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 3827437109790516113,
				chat_id : 51,
				date : 20,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 37,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 2,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 37,
			),
			date : 49,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 38,
			max_date : 47,
			date : 80,
		),
		$client->updateChatParticipantAdd(
			chat_id : 8477168534144583228,
			user_id : -1415826839964013919,
			inviter_id : -4567728789546268006,
			date : 24,
			version : 91,
		),
		$client->updateChatParticipantDelete(
			chat_id : -2629756045854336864,
			user_id : -8663048266811268637,
			version : 74,
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
					id : 93,
					ip_address : '127.0.0.1',
					port : 9,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : -101111932301524779,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : false,
				mute_until : 25,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : true,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 8,
			type : 'oWLxFh8kwBDQmOEz',
			message : 'IDvZTf0E3BtXJQeR',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 92,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 85,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 7,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 45,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 92,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 21,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 64,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 61,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 87,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 97,
					language : 'achCsYigrW7VTMuZ',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 24,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 95,
					user_id : -6203514777380218224,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 62,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 54,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 50,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 51,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 87,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 79,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 29,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 20,
					document_id : 7132680272676318904,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 14,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(6052481230115470620),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(8647928600813404479),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(5512090326515277864),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(3144275885901954379),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -1990307378296538117,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 97,
			peer : $client->peerUser(
				user_id : -2186926103428498707,
			),
			top_msg_id : 100,
			max_id : 91,
			still_unread_count : 98,
			pts : 89,
			pts_count : 34,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -5875190826549148837,
			),
			max_id : 16,
			pts : 62,
			pts_count : 11,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 2412158612166997202,
				url : 'https://docs.liveproto.dev',
			),
			pts : 22,
			pts_count : 24,
		),
		$client->updateReadMessagesContents(
			messages : array(55),
			pts : 44,
			pts_count : 33,
			date : 62,
		),
		$client->updateChannelTooLong(
			channel_id : 3768031407534924314,
			pts : 85,
		),
		$client->updateChannel(
			channel_id : -8426013702426888902,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 54,
				peer_id : $client->peerUser(
					user_id : -5111313579883633669,
				),
			),
			pts : 20,
			pts_count : 5,
		),
		$client->updateReadChannelInbox(
			folder_id : 13,
			channel_id : -1210382916246720322,
			max_id : 76,
			still_unread_count : 97,
			pts : 33,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 8849662588152111779,
			messages : array(26),
			pts : 66,
			pts_count : 75,
		),
		$client->updateChannelMessageViews(
			channel_id : 1498897087405715632,
			id : 45,
			views : 98,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 4933029385586497791,
			user_id : -7634112805396087188,
			is_admin : true,
			version : 31,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(
					archived : true,
					official : true,
					masks : true,
					emojis : true,
					text_color : true,
					channel_emoji_status : true,
					creator : true,
					installed_date : 12,
					id : 5659835474849925609,
					access_hash : -2324188877542073946,
					title : 'qpB6ZFGoROj7MzvS',
					short_name : 'JKQFmgLO7rWfvslX',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 18,
					thumb_version : 53,
					thumb_document_id : -5879623456443431407,
					count : 87,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'IhFb1yu5Yz06SxLa',
						documents : array(-5192611882576964025),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : -7276906950140865408,
						keyword : array('ol3VZSBseKNLMhva'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : 2965572883485616406,
					),
					$client->document(
						id : 7152136423011148892,
						access_hash : -9029848827962347247,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 39,
						mime_type : 'nc1piJghlatFWzrG',
						size : -5709404860036920071,
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
						dc_id : 70,
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
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(5306039371000008044),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -108272240894069199,
			user_id : 5027800723033216312,
			query : 'Fq2MvOUB7TkAni5f',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'azYbGflst4NgeKZI',
		),
		$client->updateBotInlineSend(
			user_id : 6194080016346198567,
			query : 'FPnWQm0uxl1LV7iK',
			geo : $client->geoPointEmpty(),
			id : 'T4smocLZzjGqS2Ji',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 62,
				id : -3203915434576357699,
				access_hash : -4586570973271240962,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 82,
				peer_id : $client->peerUser(
					user_id : 6403990206531732418,
				),
			),
			pts : 96,
			pts_count : 35,
		),
		$client->updateBotCallbackQuery(
			query_id : 3316082059409316740,
			user_id : 7782605281948416321,
			peer : $client->peerUser(
				user_id : -8876890849856110819,
			),
			msg_id : 53,
			chat_instance : 3058312394699143664,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'fdNWk3hYGj5m9uBz',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 15,
				peer_id : $client->peerUser(
					user_id : 6601963454037023928,
				),
			),
			pts : 9,
			pts_count : 13,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 2280749265121102732,
			user_id : -6698169917846767944,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 97,
				id : -1029591922600216775,
				access_hash : 5486249127047842177,
			),
			chat_instance : 881651792008776463,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'HtAxT0QbfVSeiZK7',
		),
		$client->updateReadChannelOutbox(
			channel_id : 3744841630591246420,
			max_id : 91,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 7380014894157144029,
			),
			top_msg_id : 79,
			saved_peer_id : $client->peerUser(
				user_id : -830530723249675460,
			),
			draft : $client->draftMessageEmpty(
				date : 97,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 7280085030943892108,
			webpage : $client->webPageEmpty(
				id : 6263188721242698937,
				url : 'https://docs.liveproto.dev',
			),
			pts : 70,
			pts_count : 27,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 61,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -3077373293309598587,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 36,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -7739310211826242091,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 70,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'i0IBt9Q5bnMF72pZ',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -7143503170012635303,
			data : $client->dataJSON(
				data : 'b0NdLicfkMXRjwQg',
			),
			timeout : 66,
		),
		$client->updateBotShippingQuery(
			query_id : -6113254262142515016,
			user_id : 7381343570782098251,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : '8NHKPYT7RVk019nO',
				street_line2 : 'ijschRa8NkHz9rS1',
				city : 'HBE3UDdn5gepmR8G',
				state : 'SXfrkyt7lxV0EN26',
				country_iso2 : 'vMIGsWLl4FeXQ6rw',
				post_code : 'TiNfjqGZcehxIQgX',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -350346711258688017,
			user_id : -3363825006558867346,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'wJlpMS2fGoaErNyV',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'xKvTgmPqhBJArpOl',
					street_line2 : '2Cg5fLdN3lIMqxS7',
					city : 'stkKpm90OQ1enM4q',
					state : 'bvlenEGpxtRsJzPf',
					country_iso2 : 'kEYdqA7j46Hy31T8',
					post_code : 'a0pyesMSXcxqdg8L',
				),
			),
			shipping_option_id : 'RAbUlIBdZQhGq5TC',
			currency : '47RqPStTZxu8HNwn',
			total_amount : -3095242923168200300,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 764513513031361434,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'FXci8gWymMBHQt1C',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'lI5OUkauYJBn7z0g',
				from_version : 94,
				version : 95,
				strings : array(
					$client->langPackString(
						key : 'Gu0JNSWRrZmjHkvF',
						value : 'zOJgtZiBfEebPmX8',
					),
					$client->langPackStringPluralized(
						key : 'DVp6s0dLvZEfjNMz',
						zero_value : '12OdUWr9wXGybcmf',
						one_value : 'P80u9ZesINpjBR5E',
						two_value : 'HZgKk3o94TQhiCjV',
						few_value : 'hcRJtM6Vl0gqOHSB',
						many_value : '8nq2GYrdiga1bhS6',
						other_value : 'KC84nrQbwGF5xPIT',
					),
					$client->langPackStringDeleted(
						key : 'ZOdmvFBsEbT5iGoV',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 5513454253399472718,
			top_msg_id : 52,
			saved_peer_id : $client->peerUser(
				user_id : 1905279108454275742,
			),
			messages : array(29),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -8927801012174202886,
			available_min_id : 82,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 5770942720270692764,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : -4309368079026038747,
			),
		),
		$client->updateMessagePoll(
			poll_id : 240287443792466160,
			poll : $client->poll(
				id : -2814982141403049012,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : 'VmLdvJZDNjX3ReOF',
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
				answers : array(
					$client->pollAnswer(
						text : $client->textWithEntities(...),
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				close_period : 91,
				close_date : 73,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 25,
					),
				),
				total_voters : 1,
				recent_voters : array(
					$client->peerUser(
						user_id : -4003886180076888400,
					),
					$client->peerChat(
						chat_id : 3176551913951602335,
					),
					$client->peerChannel(
						channel_id : 9160234524361715827,
					),
				),
				solution : 'OUYJEwQvkMon6fRG',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 42,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 26,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 6,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 43,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 35,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 69,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 68,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 52,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 60,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 3,
						language : 'U7u3zZPdlqhanMyB',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 49,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 90,
						user_id : 8439798802935504134,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 25,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 90,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 56,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 94,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 84,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 15,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 32,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 91,
						document_id : 6352731840766717414,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 91,
					),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : -4042124945473100178,
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
				until_date : 30,
			),
			version : 18,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : -7459130488042072638,
					),
					folder_id : 7,
				),
			),
			pts : 44,
			pts_count : 10,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 3788200048536663658,
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
				geo_distance : 6,
				request_chat_title : '105f8vNoIkTxEHgZ',
				request_chat_date : 63,
				business_bot_id : -8985228707045362253,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -927223459349985829,
				registration_month : 'jLGO2SlRDVfnKWYi',
				phone_country : '+1234567890',
				name_change_date : 38,
				photo_change_date : 16,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : -6798545907959463712,
					),
					expires : 13,
					distance : 48,
				),
				$client->peerSelfLocated(
					expires : 20,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 24,
				peer_id : $client->peerUser(
					user_id : 2078142599856923646,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 4483109769462413034,
			),
			messages : array(25),
			sent_messages : array(80),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 3496549232926278610,
				access_hash : -665728237133223603,
				slug : 'PdUcM0mpyZAvhS7H',
				title : 'pvhsj64Mc0UfSeiB',
				document : $client->documentEmpty(
					id : 2283366885530402560,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 24,
						outbox_accent_color : 23,
						message_colors : array(95),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : '1AadcHt2skGi5JTP',
				installs_count : 76,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -211104367045659353,
			),
			msg_id : 96,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -6965611894287766512,
			peer : $client->peerUser(
				user_id : -1522552393359269694,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 42,
		),
		$client->updateDialogFilter(
			id : 65,
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
				id : 53,
				title : $client->textWithEntities(
					text : 'krMibR2VLf51GlIv',
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
				emoticon : 'xXJhq5EPTeC3Zj1t',
				color : 25,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(2),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -3144441823640326354,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : 8777390279629981382,
			id : 67,
			forwards : 95,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 8412758164179187926,
			top_msg_id : 10,
			read_max_id : 62,
			broadcast_id : -4906078550518343821,
			broadcast_post : 72,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -7680141209245871851,
			top_msg_id : 38,
			read_max_id : 65,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 4721142974388233719,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -6724517852394753039,
			top_msg_id : 97,
			from_id : $client->peerUser(
				user_id : 329889554692016695,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 6007932074260168486,
			),
			messages : array(59),
			pts : 23,
			pts_count : 100,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 5744262106462433680,
			messages : array(99),
			pts : 46,
			pts_count : 58,
		),
		$client->updateChat(
			chat_id : -5080105679253014251,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -280956586109774235,
				access_hash : 6463475647320732595,
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
					peer : $client->peerUser(
						user_id : 7173358483024203229,
					),
					date : 66,
					active_date : 94,
					source : 2,
					volume : 1,
					about : '63YLba42RJFfu0O9',
					raise_hand_rating : -3335855455489147089,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'zpGCsmRJ5XHevt2D',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 98,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'Gthr3nYFyT5QLUJv',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 13,
					),
					paid_stars_total : -5507288041863469399,
				),
			),
			version : 89,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : -2018295643878331873,
			),
			call : $client->groupCallDiscarded(
				id : -1438128103726870524,
				access_hash : 8802509877742485601,
				duration : 39,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -4088764183880425418,
			),
			ttl_period : 7,
		),
		$client->updateChatParticipant(
			chat_id : -2445259442846124891,
			date : 94,
			actor_id : 7656668998309237117,
			user_id : 5786819396564626690,
			prev_participant : $client->chatParticipant(
				user_id : -5242884226701188421,
				inviter_id : 1723487624498812993,
				date : 85,
			),
			new_participant : $client->chatParticipant(
				user_id : -4001382824423432981,
				inviter_id : -7711760402537476855,
				date : 97,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'orBPp0FsTMRS9tAi',
				admin_id : -2925081457792973313,
				date : 47,
				start_date : 34,
				expire_date : 1,
				usage_limit : 91,
				usage : 19,
				requested : 97,
				subscription_expired : 91,
				title : 'mYrLO9N6kpebXRJF',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 90,
					amount : -8740308035378826426,
				),
			),
			qts : 6,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 925837555791792949,
			date : 74,
			actor_id : 6274427037669517699,
			user_id : 1679455778511289020,
			prev_participant : $client->channelParticipant(
				user_id : 3428671853464420398,
				date : 98,
				subscription_until_date : 72,
			),
			new_participant : $client->channelParticipant(
				user_id : 194429063719644192,
				date : 68,
				subscription_until_date : 70,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : '0U6rjXRs7EqBhIkA',
				admin_id : -400563348099512597,
				date : 10,
				start_date : 85,
				expire_date : 23,
				usage_limit : 89,
				usage : 32,
				requested : 19,
				subscription_expired : 51,
				title : 'xbqp2YoL4fVwzCtH',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 51,
					amount : -1100601768839376144,
				),
			),
			qts : 57,
		),
		$client->updateBotStopped(
			user_id : 5071540881276069105,
			date : 69,
			stopped : false,
			qts : 9,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'qaXrTt7FI8d2jpv4',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -3237086695542053608,
			),
			bot_id : -5305983746935547038,
			commands : array(
				$client->botCommand(
					command : 'HbDE1TkVQs4o6Zci',
					description : 'HYMJBbOXLstFerv3',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -6476709044025961095,
			),
			requests_pending : 52,
			recent_requesters : array(-5099888839646475226),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -854105376528788354,
			),
			date : 18,
			user_id : -7962492930143997012,
			about : 'KCNArwvcabQsO8IY',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'OECLpvhg2c1JM0NZ',
				admin_id : 7319126764503302679,
				date : 88,
				start_date : 65,
				expire_date : 72,
				usage_limit : 7,
				usage : 68,
				requested : 83,
				subscription_expired : 48,
				title : 'V6OWSDa2h5IE84Ql',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 14,
					amount : -5444170498443718368,
				),
			),
			qts : 32,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -654007121376308370,
			),
			msg_id : 27,
			top_msg_id : 52,
			saved_peer_id : $client->peerUser(
				user_id : -3898382531343452580,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 31,
						reaction : $client->reactionEmpty(...),
						count : 53,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 70,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 36,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 3855799608979099914,
		),
		$client->updateBotMenuButton(
			bot_id : 4476232252349952848,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -8640277195877753529,
			),
			msg_id : 83,
			transcription_id : -3529978552423471679,
			text : 'P7tiDp6OgVvAC1U4',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -3815649002079151993,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -8272555042144736696,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 2284833491896641232,
			),
			msg_id : 37,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 60,
					h : 42,
					thumb : $client->photoSizeEmpty(
						type : 'sbW8Iho1tY3RPBwy',
					),
					video_duration : 54,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : -5213377556673794384,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -4264424450317630312,
			),
			story : $client->storyItemDeleted(
				id : 71,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : 109743168528344409,
			),
			max_id : 75,
		),
		$client->updateStoryID(
			id : 72,
			random_id : -2396137549648042385,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 48,
				cooldown_until_date : 28,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -8540753204424727573,
			),
			story_id : 99,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -6104379929107636867,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'lr98KQGWLJ4c12xu',
				user_id : 11913141001719511,
				giveaway_msg_id : 13,
				date : 45,
				expires : 40,
				used_gift_slug : 'irQoadSz2WtkMEFJ',
				multiplier : 49,
				stars : -3736914925236340749,
			),
			qts : 13,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 8101628966316463419,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -4968952610363995994,
			),
			wallpaper : $client->wallPaper(
				id : -2868011297936402081,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -2590757267754634091,
				slug : '0bIRlOHqvsno1tYG',
				document : $client->documentEmpty(
					id : -7320903030626502064,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 31,
					second_background_color : 55,
					third_background_color : 51,
					fourth_background_color : 49,
					intensity : 24,
					rotation : 72,
					emoticon : 'bZuyBWvlnPxaTzer',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 4627346433149795640,
			),
			msg_id : 29,
			date : 5,
			actor : $client->peerUser(
				user_id : 7638845484350528314,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'HG6lJoNkZ1p4qe8x',
				),
				$client->reactionCustomEmoji(
					document_id : -6040061179944094997,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'FGvIr483oEzJ1BKk',
				),
				$client->reactionCustomEmoji(
					document_id : 1312157651607425957,
				),
				$client->reactionPaid(),
			),
			qts : 25,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -6695495046624229485,
			),
			msg_id : 27,
			date : 7,
			reactions : array(
				$client->reactionCount(
					chosen_order : 84,
					reaction : $client->reactionEmpty(),
					count : 67,
				),
			),
			qts : 89,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 2662128875528703689,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 7304066101669082129,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 54,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'h0ctoBaIxibgz65e',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 14,
					shortcut : 'Jl6oaymNCtgPXDBu',
					top_message : 95,
					count : 100,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 47,
				shortcut : '5PASyTlhXHtRQsva',
				top_message : 81,
				count : 10,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 79,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 14,
				peer_id : $client->peerUser(
					user_id : -3239026911218023614,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 41,
			messages : array(42),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : '7LbqfW6SxK4MGFhZ',
				user_id : 5002242966631946204,
				dc_id : 4,
				date : 33,
				rights : $client->businessBotRights(
					reply : true,
					read_messages : true,
					delete_sent_messages : true,
					delete_received_messages : true,
					edit_name : true,
					edit_bio : true,
					edit_profile_photo : true,
					edit_username : true,
					view_gifts : true,
					sell_gifts : true,
					change_gift_settings : true,
					transfer_and_upgrade_gifts : true,
					transfer_stars : true,
					manage_stories : true,
				),
			),
			qts : 4,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'SmG5JX1WBqpr37w9',
			message : $client->messageEmpty(
				id : 9,
				peer_id : $client->peerUser(
					user_id : 6254569594945006066,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 83,
				peer_id : $client->peerUser(
					user_id : -6357046983762466288,
				),
			),
			qts : 11,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'NSLsCuiW74GmHtwl',
			message : $client->messageEmpty(
				id : 24,
				peer_id : $client->peerUser(
					user_id : 1236765319847040139,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 38,
				peer_id : $client->peerUser(
					user_id : -4951853581734313089,
				),
			),
			qts : 79,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'ctMGCFRspw7rEHUS',
			peer : $client->peerUser(
				user_id : 4408330817646379159,
			),
			messages : array(57),
			qts : 21,
		),
		$client->updateNewStoryReaction(
			story_id : 42,
			peer : $client->peerUser(
				user_id : 7930135323149356484,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 3954937657546071799,
				nanos : 94,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 1991750498462991245,
			user_id : -8450796183568572528,
			connection_id : 'GZqJ3TbHwdO4WCoI',
			message : $client->messageEmpty(
				id : 53,
				peer_id : $client->peerUser(
					user_id : 5699089473222413823,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 50,
				peer_id : $client->peerUser(
					user_id : -5312331812230784197,
				),
			),
			chat_instance : -8817551955244748128,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -124885758376122769,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : 5126057076272825323,
					nanos : 53,
				),
				available_balance : $client->starsAmount(
					amount : 3277586055145868198,
					nanos : 8,
				),
				overall_revenue : $client->starsAmount(
					amount : -3922963521694771714,
					nanos : 50,
				),
				next_withdrawal_at : 50,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -5622255805575678842,
			payload : 'HIuYeNdbn3mCQW27',
			qts : 29,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 17,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 36,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -3235561281774199685,
				access_hash : 5401771135145254157,
			),
			sub_chain_id : 26,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 68,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -2425846871424664279,
			saved_peer_id : $client->peerUser(
				user_id : 6235202447010951640,
			),
			read_max_id : 30,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -7368819995978885973,
			saved_peer_id : $client->peerUser(
				user_id : 2783293121025154112,
			),
			read_max_id : 49,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 887154200515148662,
			saved_peer_id : $client->peerUser(
				user_id : -2604584555324742953,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : 9048020732761654579,
				access_hash : 5971896760546519178,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 65,
				from_id : $client->peerUser(
					user_id : -4144728889066052868,
				),
				date : 16,
				message : $client->textWithEntities(
					text : 'SFURowfL3Q2gVm9q',
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
				paid_message_stars : 4957628403710503097,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : 5378499975149776016,
				access_hash : -2075535256965194870,
			),
			from_id : $client->peerUser(
				user_id : 6888251883932358385,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : 3873432339913658728,
			),
			topic_id : 30,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : 8159619814021692435,
			),
			order : array(88),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : -8031207674423522393,
				access_hash : -4768296528856830416,
			),
			messages : array(96),
		),
		$client->updateStarGiftAuctionState(
			gift_id : -2241060001927056575,
			state : $client->starGiftAuctionStateNotModified(),
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : -608363566127488129,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : 2326881491337660092,
				bid_date : 26,
				min_bid_amount : -637449544466580787,
				bid_peer : $client->peerUser(
					user_id : 916623387381989886,
				),
				acquired_count : 12,
			),
		),
		$client->updateEmojiGameInfo(
			info : $client->messages->emojiGameUnavailable(),
		),
		$client->updateStarGiftCraftFail(),
	),
	chats : array(
		$client->chatEmpty(
			id : -2882163022039592916,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 1641326027251275147,
			title : 'Dp9YbcCh0BuQIlaT',
			photo : $client->chatPhotoEmpty(),
			participants_count : 6,
			date : 45,
			version : 41,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
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
				until_date : 65,
			),
		),
		$client->chatForbidden(
			id : 2073177739668040292,
			title : 'ra91xgFWjXQcVAGm',
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
			id : 1987872817443799239,
			access_hash : 8906150891255281115,
			title : 'am2PfdgAj4Rhb0rq',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 19,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6pmTRLDy2AUd8JtY',
					reason : 'eQNvTSiRO3xfyhos',
					text : 'QNmPVieRXZLjMCFY',
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
				until_date : 48,
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
				until_date : 24,
			),
			participants_count : 71,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 90,
			),
			color : $client->peerColor(
				color : 70,
				background_emoji_id : -3058621140292948643,
			),
			profile_color : $client->peerColor(
				color : 69,
				background_emoji_id : 1775341665955263278,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 15,
			subscription_until_date : 19,
			bot_verification_icon : 7940372464118479026,
			send_paid_messages_stars : -6652678415197149961,
			linked_monoforum_id : 1435500470188907415,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 9122626408598236219,
			access_hash : 2156088600834130368,
			title : 'kKQGux8UO7EAMfnp',
			until_date : 16,
		),
	),
	users : array(
		$client->userEmpty(
			id : -5090637092483863903,
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
			bot_forum_can_manage_topics : true,
			id : -6588541756928526169,
			access_hash : 4158843396555258968,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 33,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'rsWe7LS6l5Xzavib',
					reason : 'GcS9zZlFAP4W7g0i',
					text : 'iDXpGn6E7PvjUaQy',
				),
			),
			bot_inline_placeholder : 'D0LtqilPfZcpXwYJ',
			lang_code : 'MOKBQFrGDAaXTuwf',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 84,
			),
			color : $client->peerColor(
				color : 31,
				background_emoji_id : 7871421041964544987,
			),
			profile_color : $client->peerColor(
				color : 67,
				background_emoji_id : 263165564280086193,
			),
			bot_active_users : 30,
			bot_verification_icon : -1669294857309368983,
			send_paid_messages_stars : -6664968237220504755,
		),
	),
	state : $client->updates->state(
		pts : 32,
		qts : 0,
		date : 64,
		seq : 52,
		unread_count : 90,
	),
);
```