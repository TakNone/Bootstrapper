# updates.differenceSlice

**Description** : *Incomplete list of occurred events*

**Layer** : 218

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
			id : 94,
			peer_id : $client->peerUser(
				user_id : -3311274446903791543,
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
			id : 15,
			from_id : $client->peerUser(
				user_id : -7242224023045164429,
			),
			from_boosts_applied : 39,
			peer_id : $client->peerUser(
				user_id : -8588605298170205709,
			),
			saved_peer_id : $client->peerUser(
				user_id : 251401784224893722,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 7769953291602785449,
				),
				from_name : 'yOWi1mMNcYQzJ4kr',
				date : 43,
				channel_post : 15,
				post_author : 'TtnG8By4ckf6vlN0',
				saved_from_peer : $client->peerUser(
					user_id : 4007329101775046594,
				),
				saved_from_msg_id : 89,
				saved_from_id : $client->peerUser(
					user_id : -1461525830550806367,
				),
				saved_from_name : 'l39Eyh8Psa70jWJ6',
				saved_date : 74,
				psa_type : 'rpnVt1kJ2cXKlI4U',
			),
			via_bot_id : -3392297335957353716,
			via_business_bot_id : 3141104529720503153,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 77,
				reply_to_peer_id : $client->peerUser(
					user_id : -1982704997461603174,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'dyJeC72PhQoxvUEI',
					date : 47,
					channel_post : 64,
					post_author : 'I8pPrS7ZGL2Tz4Mm',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 52,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'INxRSp4YibLgFh89',
					saved_date : 4,
					psa_type : '0HDSw2uIAgexmlEt',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 31,
				quote_text : 'R5qQ6XOtnf9gHisx',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 3,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 28,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 84,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 97,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 44,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 73,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 90,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 3,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 39,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 22,
						language : 'ucThpQn6GjO9l5Bb',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 34,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 70,
						user_id : 8059709021784745056,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 45,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 76,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 64,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 56,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 14,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 51,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 47,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 49,
						document_id : -6434753742482258604,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 14,
					),
				),
				quote_offset : 12,
				todo_item_id : 83,
			),
			date : 79,
			message : 'OckXp7DMJKuyd6zF',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 95,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 83,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 61,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 75,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 60,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 100,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 79,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 9,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 84,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 35,
					language : 'fw9BHay0ut1Eivj7',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 20,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 51,
					user_id : 7771363226800283770,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 48,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 82,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 40,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 44,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 42,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 51,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 89,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 67,
					document_id : -7928468748981933395,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 11,
				),
			),
			views : 15,
			forwards : 12,
			replies : $client->messageReplies(
				comments : true,
				replies : 61,
				replies_pts : 73,
				recent_repliers : array(
					$client->peerUser(
						user_id : -3025451020294631821,
					),
					$client->peerChat(
						chat_id : 8213690432001517865,
					),
					$client->peerChannel(
						channel_id : -3854029530208717618,
					),
				),
				channel_id : -2847244894454096471,
				max_id : 46,
				read_max_id : 11,
			),
			edit_date : 64,
			post_author : 't04Di86pWqds3cHC',
			grouped_id : -2475898154249843985,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 81,
						reaction : $client->reactionEmpty(...),
						count : 7,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 48,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 32,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'BqUOxRYfZncChuXH',
					reason : 'kL1uRy3fgVBYzHJb',
					text : 'WSFH0ZejKMObIrvd',
				),
			),
			ttl_period : 34,
			quick_reply_shortcut_id : 71,
			effect : 2993710342845545614,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'RrEgVQ6NuKZszW3C',
				text : $client->textWithEntities(
					text : '0JCSHUNd2D8M7FOa',
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
			report_delivery_until_date : 13,
			paid_message_stars : -2136406649295339396,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -4116269671654882558,
					nanos : 16,
				),
				schedule_date : 44,
			),
			schedule_repeat_period : 4,
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
				user_id : 3418926181112314532,
			),
			peer_id : $client->peerUser(
				user_id : -8894930824907488766,
			),
			saved_peer_id : $client->peerUser(
				user_id : -5995715161139809362,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 92,
				reply_to_peer_id : $client->peerUser(
					user_id : 1574705124580796668,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'lFkEyxZBNL5qJ7KY',
					date : 80,
					channel_post : 36,
					post_author : 'kvD57trcFjJ6G8la',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 37,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'FwsLvVhn54GSZH8c',
					saved_date : 74,
					psa_type : 'lXNe5IgHJSULWsv9',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 34,
				quote_text : 'O1n6MCDiG59VXB87',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 71,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 8,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 52,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 87,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 53,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 13,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 32,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 6,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 32,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 98,
						language : 'zLNDG6W79lfAgqTH',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 45,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 64,
						user_id : 2387742295850500931,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 29,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 3,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 85,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 78,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 13,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 14,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 37,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 9,
						document_id : 8657818575924299713,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 49,
					),
				),
				quote_offset : 68,
				todo_item_id : 5,
			),
			date : 50,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 21,
						reaction : $client->reactionEmpty(...),
						count : 51,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 87,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 10,
					),
				),
			),
			ttl_period : 51,
		),
	),
	new_encrypted_messages : array(
		$client->encryptedMessage(
			random_id : -5251272895033814514,
			chat_id : 6,
			date : 99,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			file : $client->encryptedFileEmpty(),
		),
		$client->encryptedMessageService(
			random_id : -3877078093651399927,
			chat_id : 12,
			date : 48,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 53,
				peer_id : $client->peerUser(
					user_id : 1630685235371117909,
				),
			),
			pts : 31,
			pts_count : 100,
		),
		$client->updateMessageID(
			id : 31,
			random_id : -6034893079126403924,
		),
		$client->updateDeleteMessages(
			messages : array(53),
			pts : 10,
			pts_count : 62,
		),
		$client->updateUserTyping(
			user_id : -2927164992186310880,
			top_msg_id : 22,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 4492874687611784605,
			from_id : $client->peerUser(
				user_id : -790120891791651830,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 1721690169477885220,
				self_participant : $client->chatParticipant(
					user_id : -7385921686343469044,
					inviter_id : 6656778966525542048,
					date : 89,
				),
			),
		),
		$client->updateUserStatus(
			user_id : -7126302330676448992,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -1432080599962846591,
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
			date : 77,
			device : 'sOC8JlwvQqFLhgaV',
			location : 'gENWyS25eLr61coJ',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -4972064029506866365,
				chat_id : 80,
				date : 43,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 6,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 59,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 62,
			),
			date : 76,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 76,
			max_date : 83,
			date : 54,
		),
		$client->updateChatParticipantAdd(
			chat_id : -8950338893892926965,
			user_id : 4536760588708028650,
			inviter_id : -1888049631550710573,
			date : 88,
			version : 62,
		),
		$client->updateChatParticipantDelete(
			chat_id : -7834093970223104406,
			user_id : -2521364292476543745,
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
					id : 91,
					ip_address : '127.0.0.1',
					port : 69,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : -2393652385413515759,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : false,
				mute_until : 73,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : true,
				stories_hide_sender : true,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 36,
			type : 'T3SsIhvAyb0z4QWm',
			message : '5MfRyghEKtqB01sD',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 75,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 6,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 39,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 89,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 38,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 91,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 83,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 50,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 95,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 81,
					language : '4A8rOG1qvJsgiCSm',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 78,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 89,
					user_id : -4798882332236985782,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 26,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 84,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 58,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 6,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 12,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 86,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 55,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 14,
					document_id : 6400139589568604770,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 63,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(4304170390063231033),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-8784813309074891588),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(5403803066185434362),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(335815227080777045),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 1654897512412942686,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 34,
			peer : $client->peerUser(
				user_id : 4714124402928278020,
			),
			top_msg_id : 17,
			max_id : 49,
			still_unread_count : 33,
			pts : 31,
			pts_count : 33,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -2754198240547762195,
			),
			max_id : 51,
			pts : 18,
			pts_count : 7,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -5865671222366126750,
				url : 'https://docs.liveproto.dev',
			),
			pts : 11,
			pts_count : 69,
		),
		$client->updateReadMessagesContents(
			messages : array(61),
			pts : 75,
			pts_count : 59,
			date : 55,
		),
		$client->updateChannelTooLong(
			channel_id : -8722985104570925724,
			pts : 91,
		),
		$client->updateChannel(
			channel_id : -6837108197751115990,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 13,
				peer_id : $client->peerUser(
					user_id : -3003648265698609037,
				),
			),
			pts : 79,
			pts_count : 53,
		),
		$client->updateReadChannelInbox(
			folder_id : 4,
			channel_id : 6883107866277883497,
			max_id : 55,
			still_unread_count : 3,
			pts : 19,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -6722567414090777053,
			messages : array(98),
			pts : 47,
			pts_count : 79,
		),
		$client->updateChannelMessageViews(
			channel_id : 7974517498804626328,
			id : 44,
			views : 35,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 6712205960407210574,
			user_id : -7252074115382511549,
			is_admin : false,
			version : 49,
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
					installed_date : 25,
					id : -7104685502906496569,
					access_hash : -6929912908887779427,
					title : 'sw62NzuqMEIy3JGA',
					short_name : 'T561mVLNXpGqhfAP',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 44,
					thumb_version : 60,
					thumb_document_id : 8105811433620678024,
					count : 44,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'hcOmxbaMv12VJUQK',
						documents : array(-3902945585188836195),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : -5703252195393544505,
						keyword : array('lm6x40wLzBtGnUIu'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : 7368001238287574676,
					),
					$client->document(
						id : 5341522793381377975,
						access_hash : -1139846890327774197,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 82,
						mime_type : 'U7Xi5PJdQhc2BoWz',
						size : -8567076811913693816,
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
						dc_id : 60,
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
			order : array(-8500876504094902140),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 5883163667631152092,
			user_id : -50465452455225718,
			query : 'oIUaANezfxkqD3l0',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'aW9Q5SP2gs80outL',
		),
		$client->updateBotInlineSend(
			user_id : -3107085893543924651,
			query : 'OFoLzmlBErUJuApc',
			geo : $client->geoPointEmpty(),
			id : 'js6Kx2B8tenyqQLi',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 59,
				id : -4826633925820793596,
				access_hash : 726464903713479623,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 66,
				peer_id : $client->peerUser(
					user_id : 6707608163826613030,
				),
			),
			pts : 71,
			pts_count : 91,
		),
		$client->updateBotCallbackQuery(
			query_id : -5467530004836934180,
			user_id : -6977643494468194642,
			peer : $client->peerUser(
				user_id : -8726105295514981884,
			),
			msg_id : 55,
			chat_instance : 5653001889673461302,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'odWKyv20ECSGUrme',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 74,
				peer_id : $client->peerUser(
					user_id : 1143474425940660905,
				),
			),
			pts : 60,
			pts_count : 26,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -5720288576091683214,
			user_id : -7358458466744677782,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 32,
				id : 6745280121368413196,
				access_hash : -7093406795041901257,
			),
			chat_instance : 4617272283812923924,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'z7wLlYxOnbD0fpCr',
		),
		$client->updateReadChannelOutbox(
			channel_id : 5476960693142094449,
			max_id : 26,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 1913675276679315954,
			),
			top_msg_id : 12,
			saved_peer_id : $client->peerUser(
				user_id : 7075981061608914777,
			),
			draft : $client->draftMessageEmpty(
				date : 54,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -8133327777452126623,
			webpage : $client->webPageEmpty(
				id : -9013639355962785565,
				url : 'https://docs.liveproto.dev',
			),
			pts : 30,
			pts_count : 65,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 29,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 4889840514297996198,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 72,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 5137925424278819469,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 10,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'pCoDx4MEPTbUG9hd',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -1309028262351116317,
			data : $client->dataJSON(
				data : '4KJ7L1qzec3PUHyd',
			),
			timeout : 76,
		),
		$client->updateBotShippingQuery(
			query_id : -5759314219488008309,
			user_id : -1382633739158804083,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'eZKEvpB7JGizAmc6',
				street_line2 : '7xthv2u5IN8Ueori',
				city : 'JvSyquBNM8XfsTk6',
				state : 'vZGaTHlJyMdBDObx',
				country_iso2 : 'ygeMCZ5j6ItRp4Xh',
				post_code : 'QWt8OFLG0cBE23HX',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -9196672800303211339,
			user_id : -1432827451249910245,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'vpafPw69QqyJGOMB',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'l0teBXUMAxujLPY8',
					street_line2 : '9F5jYAVhHLGNSQrg',
					city : 'SLBbiDum9F805317',
					state : '8HMTFloUCmP4Yv0p',
					country_iso2 : 'aCgV9DMN8sG7unWj',
					post_code : 'NiHGxVUWMKvuQ3X1',
				),
			),
			shipping_option_id : 'p5bFa4EzGXgOqZ83',
			currency : '6icAdynKmqCFQEIo',
			total_amount : -2278561532240519627,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 6786023263521124934,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : '5ZGJOSD8V43ofHie',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'oBdv12QETgzM8Jey',
				from_version : 92,
				version : 32,
				strings : array(
					$client->langPackString(
						key : 'i0GaKW1UbIHCZguM',
						value : 'UfjYvlKFH0LtG9bE',
					),
					$client->langPackStringPluralized(
						key : '0aFlHVEiRyvXdr6M',
						zero_value : '97jPWDpB5kLamACl',
						one_value : 'wvRxf6mK7s5Hb39B',
						two_value : 'jSzLsVIxbkNW0ZUm',
						few_value : '9ZBuKcqbMjFiODzo',
						many_value : 'GtEIeSL1OcfQTB5x',
						other_value : 'YgpdkAcHqO2TNfwr',
					),
					$client->langPackStringDeleted(
						key : 'oeO5cEJKvFNdkgnZ',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 2359247632756511142,
			top_msg_id : 31,
			saved_peer_id : $client->peerUser(
				user_id : -6285649836302440236,
			),
			messages : array(24),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 7190151318326765276,
			available_min_id : 74,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -3079615667233363920,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : 3476974011340927416,
			),
		),
		$client->updateMessagePoll(
			poll_id : -4263852471662020107,
			poll : $client->poll(
				id : -2633120450736995918,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : 'nR7U2iWg8tQJpA4Z',
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
				close_period : 43,
				close_date : 2,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 48,
					),
				),
				total_voters : 8,
				recent_voters : array(
					$client->peerUser(
						user_id : -7868256835672712179,
					),
					$client->peerChat(
						chat_id : 6641928872502340100,
					),
					$client->peerChannel(
						channel_id : -852241563614592379,
					),
				),
				solution : 'zjJwHQDBCOxthR0Z',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 47,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 64,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 87,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 6,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 34,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 74,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 70,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 24,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 22,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 3,
						language : 'peoVsu5nWjEHCDbM',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 23,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 92,
						user_id : -8960753315101298283,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 97,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 7,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 23,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 2,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 0,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 20,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 38,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 26,
						document_id : -7227093775892459394,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 49,
					),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : -6334500815964746266,
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
			version : 92,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : -5039533695710403857,
					),
					folder_id : 39,
				),
			),
			pts : 71,
			pts_count : 77,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -4173130173350295338,
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
				geo_distance : 7,
				request_chat_title : 'SdwcDEVqri1oBA3M',
				request_chat_date : 15,
				business_bot_id : -4381551087720298837,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -4393957813647935686,
				registration_month : 'SJ8XBNvdn5WfuoH4',
				phone_country : '+1234567890',
				name_change_date : 35,
				photo_change_date : 93,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : -1634084461192023666,
					),
					expires : 15,
					distance : 99,
				),
				$client->peerSelfLocated(
					expires : 12,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 4,
				peer_id : $client->peerUser(
					user_id : -4124561830454366291,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -1089899063952405993,
			),
			messages : array(5),
			sent_messages : array(47),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 7840629310500953012,
				access_hash : -5425163100719595770,
				slug : 'L7NHzXocyInAq8Cl',
				title : 'oQiUjKbMcatEFP23',
				document : $client->documentEmpty(
					id : 1795252235060924003,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 92,
						outbox_accent_color : 58,
						message_colors : array(25),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'h2srZ9dSFxT0kKlO',
				installs_count : 84,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -2495737760416319697,
			),
			msg_id : 12,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -703931317274951534,
			peer : $client->peerUser(
				user_id : -1621456350100500082,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 93,
		),
		$client->updateDialogFilter(
			id : 48,
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
				id : 81,
				title : $client->textWithEntities(
					text : 'qEuFk9QnMK21hyZg',
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
				emoticon : 'U7R5JsY0yTXIZ46k',
				color : 9,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(92),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 4272434334504939497,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : 5603513072729298193,
			id : 34,
			forwards : 1,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -5726941630536381438,
			top_msg_id : 43,
			read_max_id : 69,
			broadcast_id : -1232559590708130336,
			broadcast_post : 71,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -3285118244248937845,
			top_msg_id : 58,
			read_max_id : 79,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -3021472785242426161,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : 2232210668883315125,
			top_msg_id : 88,
			from_id : $client->peerUser(
				user_id : 2299232189053156604,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -3848080417500434696,
			),
			messages : array(72),
			pts : 47,
			pts_count : 47,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 3611135224805009058,
			messages : array(12),
			pts : 4,
			pts_count : 26,
		),
		$client->updateChat(
			chat_id : 1342587533930605644,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 5159718357334202589,
				access_hash : 8487080372518466897,
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
						user_id : 6487986323600838101,
					),
					date : 83,
					active_date : 17,
					source : 20,
					volume : 42,
					about : '2Zgslpq9CMcuPLnO',
					raise_hand_rating : -472316821848837654,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'pM2Bq9riehJzCljT',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 84,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : '7e3PnUCr4pkscvWd',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 69,
					),
					paid_stars_total : 582666454751178364,
				),
			),
			version : 74,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : 4765519503982575089,
			),
			call : $client->groupCallDiscarded(
				id : -4996920575872268164,
				access_hash : 1712927208375503968,
				duration : 18,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 1769666110519075790,
			),
			ttl_period : 79,
		),
		$client->updateChatParticipant(
			chat_id : 9081605851668099776,
			date : 4,
			actor_id : -1573834833472666102,
			user_id : 3955530399397558045,
			prev_participant : $client->chatParticipant(
				user_id : 7876502772322273472,
				inviter_id : 1515827410430657150,
				date : 75,
			),
			new_participant : $client->chatParticipant(
				user_id : 3380850489143662515,
				inviter_id : -7766900440885496173,
				date : 14,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'U43OTgAknYzFmy5w',
				admin_id : -5863070743385253061,
				date : 87,
				start_date : 18,
				expire_date : 39,
				usage_limit : 19,
				usage : 57,
				requested : 4,
				subscription_expired : 82,
				title : 'SDiCT7H3a6lWcFLB',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 11,
					amount : -4359782441841997490,
				),
			),
			qts : 75,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 3822310253866408770,
			date : 83,
			actor_id : 1630221531441137242,
			user_id : -8616028928229412845,
			prev_participant : $client->channelParticipant(
				user_id : 1156496065279769925,
				date : 33,
				subscription_until_date : 86,
			),
			new_participant : $client->channelParticipant(
				user_id : -8880813303959506119,
				date : 47,
				subscription_until_date : 40,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'f0UriS6TK1OuD748',
				admin_id : -2619464839861285453,
				date : 81,
				start_date : 30,
				expire_date : 3,
				usage_limit : 70,
				usage : 41,
				requested : 93,
				subscription_expired : 1,
				title : 'Mz4iaVsYl1uSJKbk',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 45,
					amount : 6863988032431313474,
				),
			),
			qts : 66,
		),
		$client->updateBotStopped(
			user_id : -3260543281535088757,
			date : 45,
			stopped : false,
			qts : 47,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'SjzsmY6xUP1QnCLV',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -6631488966839387642,
			),
			bot_id : 6041424155445745052,
			commands : array(
				$client->botCommand(
					command : 'TBKl6MA2USjoJq9a',
					description : 'VjhFLNWGdKxHEv6S',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -8345166498051209666,
			),
			requests_pending : 4,
			recent_requesters : array(203062622298692644),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -522911975555379316,
			),
			date : 75,
			user_id : 7074227941953357617,
			about : '3KckW102OCaNmT6B',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'A3TUKYkro6WXNCRt',
				admin_id : 1443362392971007659,
				date : 5,
				start_date : 70,
				expire_date : 26,
				usage_limit : 49,
				usage : 84,
				requested : 29,
				subscription_expired : 70,
				title : 'rYwAtgMPSlIJnBQo',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 61,
					amount : -1333949763331181786,
				),
			),
			qts : 79,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -5396828008836877423,
			),
			msg_id : 3,
			top_msg_id : 22,
			saved_peer_id : $client->peerUser(
				user_id : -7350145645282620489,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 43,
						reaction : $client->reactionEmpty(...),
						count : 14,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 53,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 58,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 729745602916365811,
		),
		$client->updateBotMenuButton(
			bot_id : 850586215744523297,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 2847606870046621393,
			),
			msg_id : 12,
			transcription_id : -9002151063804339888,
			text : 'zVeZ4Khvwg7WkJtE',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -4706175921061698294,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -2982583391261591030,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 4320665489236154716,
			),
			msg_id : 50,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 34,
					h : 44,
					thumb : $client->photoSizeEmpty(
						type : 'gMbjAna1mK4vz2Dy',
					),
					video_duration : 68,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : -7470651800134087243,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 6319604493416440159,
			),
			story : $client->storyItemDeleted(
				id : 6,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : 899065336111530748,
			),
			max_id : 52,
		),
		$client->updateStoryID(
			id : 75,
			random_id : -6699105678227418013,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 54,
				cooldown_until_date : 73,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 3101133771222231634,
			),
			story_id : 44,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 6930731641628604294,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'nvb3oiXWKDJrI4j7',
				user_id : -8780725772378781696,
				giveaway_msg_id : 87,
				date : 57,
				expires : 57,
				used_gift_slug : '06rJ7fZAKx2WGyem',
				multiplier : 94,
				stars : 1884688381945804414,
			),
			qts : 70,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -3669517757148955550,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 5846846651799259814,
			),
			wallpaper : $client->wallPaper(
				id : -1447857769096352981,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 3506787523843198348,
				slug : 'IwahKpMfk1rNmObD',
				document : $client->documentEmpty(
					id : -5720005941304452616,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 35,
					second_background_color : 81,
					third_background_color : 83,
					fourth_background_color : 45,
					intensity : 73,
					rotation : 87,
					emoticon : 'hKRcyjYqdXFP4INA',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 437781324477075709,
			),
			msg_id : 0,
			date : 6,
			actor : $client->peerUser(
				user_id : 289057809830159241,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'wNBH8cDZvWj0lL9f',
				),
				$client->reactionCustomEmoji(
					document_id : -3890462497011313882,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '2VlfgbMkdZvQmPL7',
				),
				$client->reactionCustomEmoji(
					document_id : 3165507135979125993,
				),
				$client->reactionPaid(),
			),
			qts : 70,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -2861807392496557153,
			),
			msg_id : 49,
			date : 26,
			reactions : array(
				$client->reactionCount(
					chosen_order : 38,
					reaction : $client->reactionEmpty(),
					count : 21,
				),
			),
			qts : 3,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 2481984368011260971,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -2645718445525371066,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 6,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'wdjnZ8TYG906X5t4',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 26,
					shortcut : 'WjUPfxbmuqBdnJvk',
					top_message : 33,
					count : 82,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 95,
				shortcut : 'HNTLQG6Ilbm5wzYJ',
				top_message : 58,
				count : 18,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 4,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 48,
				peer_id : $client->peerUser(
					user_id : 524979802766319472,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 56,
			messages : array(1),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'Luzwg5jAoUJ7vKby',
				user_id : 8068756500377112388,
				dc_id : 33,
				date : 51,
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
			qts : 27,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'mQnHkWXorbGaPDxz',
			message : $client->messageEmpty(
				id : 45,
				peer_id : $client->peerUser(
					user_id : 2905816367741226000,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 78,
				peer_id : $client->peerUser(
					user_id : 3680925950706027063,
				),
			),
			qts : 45,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'qQWbpik4wEfeaORx',
			message : $client->messageEmpty(
				id : 95,
				peer_id : $client->peerUser(
					user_id : 4142595443214237963,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 62,
				peer_id : $client->peerUser(
					user_id : -8242128638339433422,
				),
			),
			qts : 91,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : '4UiJvOPLpKjtCbA3',
			peer : $client->peerUser(
				user_id : 3568773255882468931,
			),
			messages : array(99),
			qts : 56,
		),
		$client->updateNewStoryReaction(
			story_id : 83,
			peer : $client->peerUser(
				user_id : 5437037720654561037,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 4888854411605034364,
				nanos : 59,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -1457015104469220833,
			user_id : -8638873981829244493,
			connection_id : 'd9VFf3xechmiKZqO',
			message : $client->messageEmpty(
				id : 92,
				peer_id : $client->peerUser(
					user_id : -8382080757596639615,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 60,
				peer_id : $client->peerUser(
					user_id : 1556790999721602120,
				),
			),
			chat_instance : -284752342195892724,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -968929615482887411,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : -4375940578891862592,
					nanos : 54,
				),
				available_balance : $client->starsAmount(
					amount : 1855231260285929110,
					nanos : 16,
				),
				overall_revenue : $client->starsAmount(
					amount : -4332343669117386091,
					nanos : 92,
				),
				next_withdrawal_at : 79,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 3827156316252013852,
			payload : 'okAywH6zvKhgfxEl',
			qts : 29,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 54,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 11,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -1108393689192132893,
				access_hash : 5373624211700433806,
			),
			sub_chain_id : 54,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 9,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 2570430343889877677,
			saved_peer_id : $client->peerUser(
				user_id : 8219916187660702320,
			),
			read_max_id : 62,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -6233585789321961703,
			saved_peer_id : $client->peerUser(
				user_id : -3755124528422617502,
			),
			read_max_id : 12,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 267950603539216774,
			saved_peer_id : $client->peerUser(
				user_id : -8351564451135968812,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : 5057488773375886389,
				access_hash : -1226598771043578072,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 74,
				from_id : $client->peerUser(
					user_id : -3583133855615286626,
				),
				date : 5,
				message : $client->textWithEntities(
					text : 'le8y5oVnHC3kT1Wx',
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
				paid_message_stars : 7884041112381884851,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : 6002823991762091351,
				access_hash : -3635900374269786347,
			),
			from_id : $client->peerUser(
				user_id : 3553079747111893970,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : 1723052591287220445,
			),
			topic_id : 94,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : -6118041505420692420,
			),
			order : array(15),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : -1384426522350912269,
				access_hash : -4799250118595064066,
			),
			messages : array(85),
		),
		$client->updateStarGiftAuctionState(
			gift_id : 7034063089795958465,
			state : $client->starGiftAuctionState(
				version : 62,
				start_date : 6,
				end_date : 4,
				min_bid_amount : 498927172738057266,
				bid_levels : array(
					$client->auctionBidLevel(
						pos : 63,
						amount : 288592275648803031,
						date : 17,
					),
				),
				top_bidders : array(5253474807648229071),
				next_round_at : 93,
				gifts_left : 24,
				current_round : 89,
				total_rounds : 32,
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : 8973186488728923220,
			text : 'mBoqpVvDxiZJk39s',
		),
		$client->updateBotSubscriptionExpire(
			user_id : 2107091174550810282,
			payload : '7vSiblMN93oO2k1P',
			until_date : 12,
			qts : 55,
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : 8739183943667160553,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : -6006830948232183197,
				bid_date : 32,
				min_bid_amount : 1725833130950994950,
				peer : $client->peerUser(
					user_id : 3594864488902807536,
				),
				acquired_count : 56,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -4693273028963191371,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 2122485538480811250,
			title : 'jxLosmrIZ9yAPwgl',
			photo : $client->chatPhotoEmpty(),
			participants_count : 21,
			date : 75,
			version : 27,
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
				until_date : 35,
			),
		),
		$client->chatForbidden(
			id : -123486346932680293,
			title : 'BdRDys8ZAxjpuFN6',
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
			id : -8890677587573468009,
			access_hash : 4036090216997263191,
			title : 'EzJmVUtxgYrHZynu',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 70,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'NTjKOgn3d87wYXpf',
					reason : 'SKeT23m5k7FqIGi4',
					text : 'wRy897ndiABoubS2',
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
				until_date : 2,
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
				until_date : 32,
			),
			participants_count : 15,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 12,
			),
			color : $client->peerColor(
				color : 48,
				background_emoji_id : -6192249728318869662,
			),
			profile_color : $client->peerColor(
				color : 33,
				background_emoji_id : -964534137651036548,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 63,
			subscription_until_date : 100,
			bot_verification_icon : -3756183618795381188,
			send_paid_messages_stars : -3901248452439911299,
			linked_monoforum_id : 594715066440387021,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -7441569848688776909,
			access_hash : -8204005809235652128,
			title : 'sQLrBlZ87E5ScYIx',
			until_date : 28,
		),
	),
	users : array(
		$client->userEmpty(
			id : -593080105082845164,
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
			id : -8620960162572673914,
			access_hash : 2590984200988298447,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 56,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'sqwZyLYUX0jN7KR3',
					reason : 'ZTgUWc36pA5INGX9',
					text : 'Jtv9hk2EdrfGTnXx',
				),
			),
			bot_inline_placeholder : 'BxKGP4ewVcnD9OUT',
			lang_code : 'X1Y6uFriGTOLIgok',
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
				max_id : 18,
			),
			color : $client->peerColor(
				color : 34,
				background_emoji_id : -9021975817708565134,
			),
			profile_color : $client->peerColor(
				color : 31,
				background_emoji_id : 4452084915330395550,
			),
			bot_active_users : 84,
			bot_verification_icon : 5895636865596891948,
			send_paid_messages_stars : -797235357642032226,
		),
	),
	intermediate_state : $client->updates->state(
		pts : 80,
		qts : 27,
		date : 37,
		seq : 81,
		unread_count : 73,
	),
);
```