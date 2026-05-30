# updates.differenceSlice

**Description** : *Incomplete list of occurred events*

**Layer** : 222

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
			id : 62,
			peer_id : $client->peerUser(
				user_id : -866631640170430602,
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
			id : 21,
			from_id : $client->peerUser(
				user_id : 779847093620813576,
			),
			from_boosts_applied : 35,
			peer_id : $client->peerUser(
				user_id : 1109220553283701090,
			),
			saved_peer_id : $client->peerUser(
				user_id : -925811392079791211,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 1149191296698422553,
				),
				from_name : 'AKRWVhE4lqpoLf97',
				date : 63,
				channel_post : 55,
				post_author : '7YBmf0uKTga1VUCv',
				saved_from_peer : $client->peerUser(
					user_id : 5363532169730541312,
				),
				saved_from_msg_id : 69,
				saved_from_id : $client->peerUser(
					user_id : 1936204679066435824,
				),
				saved_from_name : 'ahd2wrHTZfz5ucDA',
				saved_date : 62,
				psa_type : 'U7EIsZ5ziFl4Qo1M',
			),
			via_bot_id : 3619325600994786706,
			via_business_bot_id : -3879966023766920703,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 0,
				reply_to_peer_id : $client->peerUser(
					user_id : 5445084847201734535,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'xEgd53RhQ0faGyvo',
					date : 91,
					channel_post : 91,
					post_author : 'IS5k9ciOVCUjstZ4',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 21,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'vzJNp6X3l1FkUnoO',
					saved_date : 58,
					psa_type : 'dftQgl1myq58iIVa',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 19,
				quote_text : 'gHyGjMQKERF1xDbf',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 2,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 2,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 28,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 85,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 1,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 23,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 33,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 93,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 41,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 81,
						language : '5AUwVaEf0vbmDMXS',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 40,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 30,
						user_id : 3005533852163710130,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 63,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 84,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 4,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 18,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 32,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 29,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 11,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 48,
						document_id : 7156721420205597413,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 12,
					),
				),
				quote_offset : 30,
				todo_item_id : 20,
			),
			date : 3,
			message : 'HdQMD0BugxiX15JS',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 54,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 53,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 49,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 34,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 74,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 52,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 69,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 73,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 32,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 61,
					language : 'gnNP902v6iKd47Gr',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 94,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 76,
					user_id : 2155712409627378409,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 10,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 61,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 87,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 8,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 88,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 78,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 13,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 91,
					document_id : 4303955033874455698,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 82,
				),
			),
			views : 28,
			forwards : 54,
			replies : $client->messageReplies(
				comments : true,
				replies : 68,
				replies_pts : 46,
				recent_repliers : array(
					$client->peerUser(
						user_id : 740120934876843866,
					),
					$client->peerChat(
						chat_id : -3295038057743744741,
					),
					$client->peerChannel(
						channel_id : 4733318513754498362,
					),
				),
				channel_id : 8427972835063886121,
				max_id : 79,
				read_max_id : 45,
			),
			edit_date : 35,
			post_author : 'cW2xr93y8b7d5VNH',
			grouped_id : 2646982766778836690,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 83,
						reaction : $client->reactionEmpty(...),
						count : 64,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 84,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 91,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'oOr9F0WxVQe2B47D',
					reason : '7QqEFhk2oWZfA5Vb',
					text : 'yZi4kH0hGPSWYbrV',
				),
			),
			ttl_period : 52,
			quick_reply_shortcut_id : 12,
			effect : 299845924568532632,
			factcheck : $client->factCheck(
				need_check : true,
				country : '6IaSmzLlTWMw0fNH',
				text : $client->textWithEntities(
					text : 'pA8m1Forgzxtsfyi',
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
			report_delivery_until_date : 12,
			paid_message_stars : -2211296790434879320,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 6158940499551497948,
					nanos : 30,
				),
				schedule_date : 80,
			),
			schedule_repeat_period : 38,
			summary_from_language : 'ld8fiR5VWqStwXQk',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 81,
			from_id : $client->peerUser(
				user_id : -7941272088436333208,
			),
			peer_id : $client->peerUser(
				user_id : 5251147848683853431,
			),
			saved_peer_id : $client->peerUser(
				user_id : -6093318176788952297,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 96,
				reply_to_peer_id : $client->peerUser(
					user_id : 8908724812454774962,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'P8fStVYuydavN1zO',
					date : 36,
					channel_post : 92,
					post_author : 'E0TlkRqS1JCNfABP',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 96,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'tDo4gGW6xzYfkmhe',
					saved_date : 13,
					psa_type : '1Qc3Exm85qkyDYHb',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 37,
				quote_text : 'lhAuEt6caUBT2nvy',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 66,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 54,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 38,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 65,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 63,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 87,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 19,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 50,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 1,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 35,
						language : 'wSHi5pN8hMJuRbIl',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 6,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 30,
						user_id : -1167816466665566437,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 57,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 38,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 5,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 74,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 25,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 12,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 26,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 87,
						document_id : -7206678538201058317,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 90,
					),
				),
				quote_offset : 98,
				todo_item_id : 24,
			),
			date : 63,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 32,
						reaction : $client->reactionEmpty(...),
						count : 95,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 97,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 4,
					),
				),
			),
			ttl_period : 15,
		),
	),
	new_encrypted_messages : array(
		$client->encryptedMessage(
			random_id : -6819488340006112887,
			chat_id : 74,
			date : 36,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			file : $client->encryptedFileEmpty(),
		),
		$client->encryptedMessageService(
			random_id : 141028860454617766,
			chat_id : 85,
			date : 75,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 99,
				peer_id : $client->peerUser(
					user_id : 4603663655480296608,
				),
			),
			pts : 9,
			pts_count : 1,
		),
		$client->updateMessageID(
			id : 68,
			random_id : 16869905432182472,
		),
		$client->updateDeleteMessages(
			messages : array(84),
			pts : 54,
			pts_count : 2,
		),
		$client->updateUserTyping(
			user_id : -1893544384979382194,
			top_msg_id : 43,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -3285739908729795209,
			from_id : $client->peerUser(
				user_id : 7618751463518947373,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 4716003157695178486,
				self_participant : $client->chatParticipant(
					user_id : -6032511644676866583,
					inviter_id : -4907419985123777771,
					date : 39,
				),
			),
		),
		$client->updateUserStatus(
			user_id : 3327894386113854599,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -4418354515407547184,
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
			date : 100,
			device : 'KtYjODPWXTycsImp',
			location : 'MKby3NzOYuPqwRi5',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 4124716633459913474,
				chat_id : 29,
				date : 9,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 55,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 10,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 58,
			),
			date : 12,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 66,
			max_date : 16,
			date : 23,
		),
		$client->updateChatParticipantAdd(
			chat_id : -2210117983771692945,
			user_id : 5445967287685429077,
			inviter_id : 6594240636410439267,
			date : 45,
			version : 69,
		),
		$client->updateChatParticipantDelete(
			chat_id : 6553140169492096321,
			user_id : -1660412709696263915,
			version : 90,
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
					id : 90,
					ip_address : '127.0.0.1',
					port : 35,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : -4291145785875233457,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : true,
				mute_until : 0,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : false,
				stories_hide_sender : true,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 6,
			type : 'RYLkPUfqoGe3n5Tw',
			message : 'OQqIrzxvMYu8ieTP',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 84,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 11,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 37,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 45,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 9,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 84,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 96,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 69,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 68,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 84,
					language : 'DEPnXkjuoiV0KMSd',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 5,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 77,
					user_id : -5769876952442438455,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 79,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 17,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 77,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 90,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 19,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 46,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 16,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 100,
					document_id : -5773718599148354196,
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
					users : array(-3749308833071234401),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(1333061825615341191),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(1259683468158045108),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(1486332480296288030),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 7287008133732998964,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 14,
			peer : $client->peerUser(
				user_id : 4961957191960459747,
			),
			top_msg_id : 50,
			max_id : 30,
			still_unread_count : 23,
			pts : 62,
			pts_count : 91,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -900685546042894081,
			),
			max_id : 81,
			pts : 54,
			pts_count : 51,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -3487939941917748249,
				url : 'https://docs.liveproto.dev',
			),
			pts : 28,
			pts_count : 53,
		),
		$client->updateReadMessagesContents(
			messages : array(42),
			pts : 64,
			pts_count : 15,
			date : 59,
		),
		$client->updateChannelTooLong(
			channel_id : -4290348212597513984,
			pts : 29,
		),
		$client->updateChannel(
			channel_id : -375116850605720010,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 83,
				peer_id : $client->peerUser(
					user_id : -7910802714151230322,
				),
			),
			pts : 100,
			pts_count : 96,
		),
		$client->updateReadChannelInbox(
			folder_id : 19,
			channel_id : 4414508518535681083,
			max_id : 11,
			still_unread_count : 39,
			pts : 83,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -2048089072051426173,
			messages : array(100),
			pts : 90,
			pts_count : 28,
		),
		$client->updateChannelMessageViews(
			channel_id : 7740932868130917353,
			id : 20,
			views : 100,
		),
		$client->updateChatParticipantAdmin(
			chat_id : -9067654453940034497,
			user_id : -871518527912072264,
			is_admin : false,
			version : 30,
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
					installed_date : 20,
					id : -8855419096634995283,
					access_hash : -311511033111414788,
					title : 'lRGBsFH3PvLCU6ue',
					short_name : 'UJZm3X2RAvnbtYdF',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 79,
					thumb_version : 7,
					thumb_document_id : 7197011750210105460,
					count : 85,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'fmO1W57jzQkStG9I',
						documents : array(-3212461791820960228),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : -8690191544899118054,
						keyword : array('uRMxK10kEDN2zoYQ'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : 7534069494896566661,
					),
					$client->document(
						id : 4137755084096575874,
						access_hash : -9201485663435230118,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 40,
						mime_type : 'Gh3aq6Kd9Pmn8Twy',
						size : -4841365692664151168,
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
			order : array(3422624692143481957),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 2603927592352441731,
			user_id : 7107776656507938556,
			query : '0Zgma5FuCdSoicYW',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : '5vByicjpJHmUd1EC',
		),
		$client->updateBotInlineSend(
			user_id : -4274240851249634863,
			query : 'vCRQE3TgUr4GIiFS',
			geo : $client->geoPointEmpty(),
			id : 'MYhrdCqaWVm8R4AB',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 69,
				id : 3583186937880039164,
				access_hash : 5275272249958488041,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 38,
				peer_id : $client->peerUser(
					user_id : -6330461027630285428,
				),
			),
			pts : 43,
			pts_count : 0,
		),
		$client->updateBotCallbackQuery(
			query_id : 7600948981768625403,
			user_id : -5243239145130118069,
			peer : $client->peerUser(
				user_id : -1486279890469653138,
			),
			msg_id : 29,
			chat_instance : 2378206732778000234,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'iNJV4SHWKXUlfGEo',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 0,
				peer_id : $client->peerUser(
					user_id : -362325476531180038,
				),
			),
			pts : 54,
			pts_count : 96,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 2460155076395340015,
			user_id : -5782764945023429656,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 47,
				id : 3391112305182992007,
				access_hash : -2822802813148263936,
			),
			chat_instance : -3925403722608504128,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'BHn2mS7ORUDuL5ek',
		),
		$client->updateReadChannelOutbox(
			channel_id : -7630245059868283052,
			max_id : 86,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 1325042193555688675,
			),
			top_msg_id : 63,
			saved_peer_id : $client->peerUser(
				user_id : 2209006476006346614,
			),
			draft : $client->draftMessageEmpty(
				date : 39,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 3109688317983894659,
			webpage : $client->webPageEmpty(
				id : 7118522272217154531,
				url : 'https://docs.liveproto.dev',
			),
			pts : 74,
			pts_count : 1,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 40,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -7580212443600512187,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 59,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 1333766158465572758,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 72,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'nlusEQJ9q6AfVpoy',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 6156071061023332420,
			data : $client->dataJSON(
				data : 'qDcSKIQWx3aOUevs',
			),
			timeout : 44,
		),
		$client->updateBotShippingQuery(
			query_id : 6788858317778441673,
			user_id : -1144488813247884562,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'jqzKx6cEBF1Rp2wL',
				street_line2 : 'hglEPoabrDWnNjZV',
				city : 'cLjVCQMmb1e7od6J',
				state : 'EqND1o7UZlXue5Rh',
				country_iso2 : 'pf8saUceOX0bVPC4',
				post_code : 'S5wIBvYzdlcRiW12',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -2018968492942860283,
			user_id : -358691515020406340,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'vlbcXYBKR7tuShsq',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : '4pl5CDhKf1o20rcb',
					street_line2 : 'pZLuXJRGP3gN8ys2',
					city : 'G43hqDS7icfJa0Hu',
					state : 'VX54ZObEaxk6nq8A',
					country_iso2 : 'ryWSeZdAFOsVlM9q',
					post_code : 'MKS5ugLYjqCWicsU',
				),
			),
			shipping_option_id : 'izMpTN9lH2O4ocqI',
			currency : 'dwlcfDgCUybm9Ph6',
			total_amount : 5914583093777028296,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -1887155496554679026,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'J5lawrQqeRsd3Zob',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'KYeJOQbnWmsXif89',
				from_version : 47,
				version : 18,
				strings : array(
					$client->langPackString(
						key : 'MPNrxGtn9BHOkius',
						value : 'FTvMU4CEQrOS8Pl3',
					),
					$client->langPackStringPluralized(
						key : 'X6vy9guKZw5Njcmr',
						zero_value : 'x6HnioVNDe9u1Ed7',
						one_value : '06OlVM7WSG5KYi2C',
						two_value : '89qbh2ZwIRWrycHe',
						few_value : '8nxaJZ9KLe1GNDcw',
						many_value : 'VjtqdcNwCbAlaSGr',
						other_value : '7cxnRgDLb25ZtJKp',
					),
					$client->langPackStringDeleted(
						key : 'SVGni4KuIjZp3Qmc',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 3456826952655335169,
			top_msg_id : 14,
			saved_peer_id : $client->peerUser(
				user_id : 1024947413901036860,
			),
			messages : array(54),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 1625760490916805759,
			available_min_id : 49,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 9054284674620621209,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : 7199028992790988844,
			),
		),
		$client->updateMessagePoll(
			poll_id : -6608634965326806077,
			poll : $client->poll(
				id : -6007545533630117563,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : 'OpvyWGI2kh80VU41',
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
				close_period : 95,
				close_date : 82,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 100,
					),
				),
				total_voters : 13,
				recent_voters : array(
					$client->peerUser(
						user_id : -4878534948104010097,
					),
					$client->peerChat(
						chat_id : 2680610710158502324,
					),
					$client->peerChannel(
						channel_id : 8688877025138254409,
					),
				),
				solution : 'uidfP1prIaxDTOoA',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 7,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 76,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 52,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 22,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 78,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 17,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 82,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 30,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 57,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 53,
						language : 'hRCi0zA5IHwLnB6F',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 72,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 86,
						user_id : 6034540035881112382,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 31,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 34,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 98,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 56,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 32,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 85,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 78,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 44,
						document_id : 6629488412906880895,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 55,
					),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : -7205193423902918685,
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
				until_date : 54,
			),
			version : 74,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : -3257236201421127134,
					),
					folder_id : 41,
				),
			),
			pts : 43,
			pts_count : 58,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 2619511259348082108,
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
				geo_distance : 52,
				request_chat_title : 'VLa1jyJT59rcpznN',
				request_chat_date : 97,
				business_bot_id : -7169973823545380923,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -5070613956992487442,
				registration_month : 'vZowCHdnjhG0aNTQ',
				phone_country : '+1234567890',
				name_change_date : 85,
				photo_change_date : 87,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : 9060270749503187625,
					),
					expires : 76,
					distance : 23,
				),
				$client->peerSelfLocated(
					expires : 58,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 23,
				peer_id : $client->peerUser(
					user_id : 889286604912824257,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -7259183770997135256,
			),
			messages : array(1),
			sent_messages : array(52),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -1147984120557433399,
				access_hash : 1513073216890223653,
				slug : 'rbDU4yPCIKu2lNmo',
				title : '0nDmOEwLS3ydQsFt',
				document : $client->documentEmpty(
					id : -348347847047853321,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 7,
						outbox_accent_color : 69,
						message_colors : array(39),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'aH0WCZn5BGQt9cTm',
				installs_count : 53,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 4521230951890747328,
			),
			msg_id : 77,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -1343442467264639730,
			peer : $client->peerUser(
				user_id : 736552563136722421,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 18,
		),
		$client->updateDialogFilter(
			id : 51,
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
				id : 74,
				title : $client->textWithEntities(
					text : 'egUBSntJObzXIc2o',
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
				emoticon : 'ieDdkOjzEvy9CJWN',
				color : 26,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(4),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 5033319453165815680,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -105794634868766244,
			id : 58,
			forwards : 98,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -4071877544750279487,
			top_msg_id : 44,
			read_max_id : 13,
			broadcast_id : -8878468490321597858,
			broadcast_post : 0,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 2102913792779110204,
			top_msg_id : 63,
			read_max_id : 92,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 6427224436501236011,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -6950350455850408419,
			top_msg_id : 71,
			from_id : $client->peerUser(
				user_id : -8057889952486591375,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -2658626130860541983,
			),
			messages : array(17),
			pts : 54,
			pts_count : 66,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 7313907686442419092,
			messages : array(31),
			pts : 45,
			pts_count : 36,
		),
		$client->updateChat(
			chat_id : -5531124838563539457,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -8941274906421219999,
				access_hash : 8341594024387046691,
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
						user_id : -3138501946903343225,
					),
					date : 28,
					active_date : 85,
					source : 64,
					volume : 84,
					about : 'lE4Yvm1Orb7XWhq8',
					raise_hand_rating : -2586439694637653807,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'fvsRrVwib60WNKSI',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 14,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'YwJuBaX4GUrfbh3m',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 16,
					),
					paid_stars_total : -6136283630840356542,
				),
			),
			version : 14,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : 7546706591947097893,
			),
			call : $client->groupCallDiscarded(
				id : 6307185429499327928,
				access_hash : -9057179332588320770,
				duration : 64,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 2960839148166572787,
			),
			ttl_period : 62,
		),
		$client->updateChatParticipant(
			chat_id : 1410910030749689945,
			date : 95,
			actor_id : 8551398356846758342,
			user_id : 6640308046176905847,
			prev_participant : $client->chatParticipant(
				user_id : 7601933539153859480,
				inviter_id : 4154735228480325040,
				date : 85,
			),
			new_participant : $client->chatParticipant(
				user_id : 2804092419692441438,
				inviter_id : -1023867473077967526,
				date : 10,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : '4JOfGWrT5unEzi1B',
				admin_id : -8706149913177119307,
				date : 20,
				start_date : 4,
				expire_date : 72,
				usage_limit : 15,
				usage : 51,
				requested : 53,
				subscription_expired : 31,
				title : 'kVpcHKsbYgFDBdMv',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 8,
					amount : 8427438557155718454,
				),
			),
			qts : 73,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 8443871746463468677,
			date : 65,
			actor_id : -5145973103382905440,
			user_id : -4638006254722359526,
			prev_participant : $client->channelParticipant(
				user_id : -5063738915492279153,
				date : 30,
				subscription_until_date : 0,
			),
			new_participant : $client->channelParticipant(
				user_id : 5318640823299039140,
				date : 10,
				subscription_until_date : 84,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'CRVQkG16vgq0obzt',
				admin_id : -868431740890007142,
				date : 34,
				start_date : 55,
				expire_date : 76,
				usage_limit : 47,
				usage : 47,
				requested : 31,
				subscription_expired : 6,
				title : '2otnwMsJqOg9eIQp',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 9,
					amount : -4787073368587494662,
				),
			),
			qts : 99,
		),
		$client->updateBotStopped(
			user_id : -3348751027025271951,
			date : 22,
			stopped : false,
			qts : 81,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'nALsdPR0eGQuYDEk',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 3027640300933720097,
			),
			bot_id : 7534208186132257970,
			commands : array(
				$client->botCommand(
					command : 'qlXPDV6vSMagdeKi',
					description : 'XgfHIGLzuntOW5JZ',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 4846648872848513223,
			),
			requests_pending : 42,
			recent_requesters : array(-452830606062530050),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 3479269785949680700,
			),
			date : 53,
			user_id : -5424196207897095986,
			about : 'FjbWqQaPMxVnf4Y7',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'XFUJTrcul6tPiSmO',
				admin_id : -6205425725066838056,
				date : 70,
				start_date : 93,
				expire_date : 98,
				usage_limit : 31,
				usage : 14,
				requested : 2,
				subscription_expired : 22,
				title : 'wgXmrvsVRQyZLUpi',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 58,
					amount : 8836897998590303938,
				),
			),
			qts : 28,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -7062293605012538944,
			),
			msg_id : 43,
			top_msg_id : 50,
			saved_peer_id : $client->peerUser(
				user_id : -5169274780747735585,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 26,
						reaction : $client->reactionEmpty(...),
						count : 13,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 61,
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
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 355101595541139799,
		),
		$client->updateBotMenuButton(
			bot_id : -7265552682874897115,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -2842175499195592405,
			),
			msg_id : 88,
			transcription_id : 7786325443487563373,
			text : 'yn3YINZabr1wgDz6',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -5278082065733582312,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -217299507935931522,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 8649510390686378523,
			),
			msg_id : 42,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 63,
					h : 26,
					thumb : $client->photoSizeEmpty(
						type : 'IXSnjvgt2794KG1y',
					),
					video_duration : 76,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : 4028954421801279256,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -8325938219859790805,
			),
			story : $client->storyItemDeleted(
				id : 62,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -3584706694334345192,
			),
			max_id : 23,
		),
		$client->updateStoryID(
			id : 26,
			random_id : 2791084381394630619,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 25,
				cooldown_until_date : 79,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -4093878431608035173,
			),
			story_id : 47,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 5421642625509260975,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'c8uV4qtCQENdH6XL',
				user_id : 8283516191380186544,
				giveaway_msg_id : 51,
				date : 76,
				expires : 78,
				used_gift_slug : 'DW57pubSCxiTHwcI',
				multiplier : 1,
				stars : 6859464532997985379,
			),
			qts : 73,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 1165559419526206304,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 2568500227036636009,
			),
			wallpaper : $client->wallPaper(
				id : -951655804582420444,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -5093098650838071828,
				slug : 'Vd0XLg2JQfjzchlm',
				document : $client->documentEmpty(
					id : -2772866617057891497,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 81,
					second_background_color : 24,
					third_background_color : 9,
					fourth_background_color : 10,
					intensity : 85,
					rotation : 37,
					emoticon : 'CXZ5pT0LJgRqcmuK',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 526515701217372867,
			),
			msg_id : 72,
			date : 50,
			actor : $client->peerUser(
				user_id : 5181325108166808343,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'P1p0I4blUsFt2wer',
				),
				$client->reactionCustomEmoji(
					document_id : -4019992726642910039,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'CXAalvB9S0ZgJOjT',
				),
				$client->reactionCustomEmoji(
					document_id : 1186069511953538976,
				),
				$client->reactionPaid(),
			),
			qts : 8,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 76436418632517598,
			),
			msg_id : 91,
			date : 15,
			reactions : array(
				$client->reactionCount(
					chosen_order : 38,
					reaction : $client->reactionEmpty(),
					count : 35,
				),
			),
			qts : 5,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -1685075108170720075,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -6549656155855521684,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 53,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'yYemIf2N0JaTMHBF',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 78,
					shortcut : 'K5XtkGgjBIrqhwsp',
					top_message : 13,
					count : 12,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 36,
				shortcut : 'mYJ97iXx3eVfk1SH',
				top_message : 21,
				count : 42,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 87,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 58,
				peer_id : $client->peerUser(
					user_id : -3723913250027058791,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 58,
			messages : array(75),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'r90olTiMy2hCfHgj',
				user_id : -7691120111655933514,
				dc_id : 81,
				date : 24,
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
			qts : 0,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'RNFhftaLHcUYJXWE',
			message : $client->messageEmpty(
				id : 14,
				peer_id : $client->peerUser(
					user_id : 3383176941289241865,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 72,
				peer_id : $client->peerUser(
					user_id : -2341178224963468966,
				),
			),
			qts : 58,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'WiABHE4quF3JReUD',
			message : $client->messageEmpty(
				id : 71,
				peer_id : $client->peerUser(
					user_id : -5718611490166929022,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 57,
				peer_id : $client->peerUser(
					user_id : -5278355883469748707,
				),
			),
			qts : 16,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'krIZm1Gy3qKDHfCM',
			peer : $client->peerUser(
				user_id : 6128951037644305326,
			),
			messages : array(31),
			qts : 35,
		),
		$client->updateNewStoryReaction(
			story_id : 56,
			peer : $client->peerUser(
				user_id : -3474906128300964951,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 3307601503571403155,
				nanos : 31,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -5614249263079002064,
			user_id : 1876203602430832764,
			connection_id : 'XkK2FcyASQDgYPVr',
			message : $client->messageEmpty(
				id : 30,
				peer_id : $client->peerUser(
					user_id : -2791377176888431592,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 22,
				peer_id : $client->peerUser(
					user_id : -3584973390189856349,
				),
			),
			chat_instance : -6827295937401871493,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -1812894001577642635,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : -1284866665034856602,
					nanos : 75,
				),
				available_balance : $client->starsAmount(
					amount : 2879202847967449397,
					nanos : 11,
				),
				overall_revenue : $client->starsAmount(
					amount : -3734218143145280880,
					nanos : 39,
				),
				next_withdrawal_at : 87,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -1937743891217680913,
			payload : 'tTM0cgSauAi8fRpH',
			qts : 17,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 55,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 53,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -1927555170818268276,
				access_hash : -6045985130974299554,
			),
			sub_chain_id : 38,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 12,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -8962771738248649604,
			saved_peer_id : $client->peerUser(
				user_id : 2451128991985892542,
			),
			read_max_id : 61,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 4241761481951963736,
			saved_peer_id : $client->peerUser(
				user_id : -4823917539929664565,
			),
			read_max_id : 4,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 4442461266756554215,
			saved_peer_id : $client->peerUser(
				user_id : 2032339224187554411,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : 4571504791285354314,
				access_hash : 6997339479712203792,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 86,
				from_id : $client->peerUser(
					user_id : -5799792320203479841,
				),
				date : 8,
				message : $client->textWithEntities(
					text : 'KZbBt0Gxv7NjOEHq',
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
				paid_message_stars : 7051725947602872380,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : -6232073389474141096,
				access_hash : 1810893451670391212,
			),
			from_id : $client->peerUser(
				user_id : 7224786168726324933,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : 2063565173036972790,
			),
			topic_id : 96,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : 1916462457910951598,
			),
			order : array(64),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : -7788797818880532572,
				access_hash : 4355250691334832142,
			),
			messages : array(78),
		),
		$client->updateStarGiftAuctionState(
			gift_id : 3963766134212137942,
			state : $client->starGiftAuctionStateNotModified(),
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : 1205306556335236059,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : -4626963669361397194,
				bid_date : 43,
				min_bid_amount : -2900345487376510,
				bid_peer : $client->peerUser(
					user_id : -6897716969967287711,
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
			id : -7704470793554920022,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 7535679931173024839,
			title : 'VmE8OMe4hYIB9Dzf',
			photo : $client->chatPhotoEmpty(),
			participants_count : 63,
			date : 23,
			version : 13,
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
				until_date : 39,
			),
		),
		$client->chatForbidden(
			id : -1682287717870061990,
			title : 'VQbnRs91iPglaIkj',
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
			id : 1935088921068247041,
			access_hash : 3466484031936454489,
			title : 'Nf2gq4MCJeo39TnS',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 29,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'YsRt8hckIZyviaOE',
					reason : 'YOZ3uxD9qMtI1yQ7',
					text : 'XS86AYdeVQbJKcj7',
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
				until_date : 58,
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
				until_date : 48,
			),
			participants_count : 34,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 88,
			),
			color : $client->peerColor(
				color : 57,
				background_emoji_id : -8951975991397830803,
			),
			profile_color : $client->peerColor(
				color : 46,
				background_emoji_id : 1535155829473428294,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 70,
			subscription_until_date : 56,
			bot_verification_icon : 2757562713298198377,
			send_paid_messages_stars : -6781923275463160592,
			linked_monoforum_id : 444333166328279722,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 4564834558031017229,
			access_hash : -2151697536752338058,
			title : '3wIV9na7RGcTM8qg',
			until_date : 31,
		),
	),
	users : array(
		$client->userEmpty(
			id : -7495553228508321718,
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
			id : -8562756502207320467,
			access_hash : -8096325257381832998,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 61,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'QOyHtwEnh58AeKmS',
					reason : '1g2zl9kMyw0EXOvn',
					text : 'SQwAlMazGxJvCf7I',
				),
			),
			bot_inline_placeholder : 'ILPu1RviKz6egOtH',
			lang_code : 'IBgPambrFid5teLl',
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
				max_id : 95,
			),
			color : $client->peerColor(
				color : 75,
				background_emoji_id : -7895427380192486619,
			),
			profile_color : $client->peerColor(
				color : 63,
				background_emoji_id : -975203543150336952,
			),
			bot_active_users : 80,
			bot_verification_icon : 2792880033173976497,
			send_paid_messages_stars : -778051126945226559,
		),
	),
	intermediate_state : $client->updates->state(
		pts : 1,
		qts : 89,
		date : 100,
		seq : 94,
		unread_count : 0,
	),
);
```