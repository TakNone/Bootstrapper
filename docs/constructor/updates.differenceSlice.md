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
			id : 69,
			peer_id : $client->peerUser(
				user_id : -5931769763931571987,
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
			id : 41,
			from_id : $client->peerUser(
				user_id : -6857385460083234648,
			),
			from_boosts_applied : 35,
			peer_id : $client->peerUser(
				user_id : 1170636417881374995,
			),
			saved_peer_id : $client->peerUser(
				user_id : 131739943545958709,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 4727805600194763522,
				),
				from_name : 'DvgNkBrQjzOeMFyV',
				date : 33,
				channel_post : 92,
				post_author : '9NUjVoYPqp5bAfsL',
				saved_from_peer : $client->peerUser(
					user_id : -2020810302405108252,
				),
				saved_from_msg_id : 92,
				saved_from_id : $client->peerUser(
					user_id : -6427366534246021935,
				),
				saved_from_name : 'dQYw7fZT2aAP1sJn',
				saved_date : 78,
				psa_type : 'rz9DIs3S6vPcg4YH',
			),
			via_bot_id : -9193550970198869005,
			via_business_bot_id : -6687151664514250972,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 99,
				reply_to_peer_id : $client->peerUser(
					user_id : -2272779668033909419,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'W3ET6utxMwGq2Vpa',
					date : 58,
					channel_post : 7,
					post_author : 'mNQK5EF4PqgeCGRt',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 22,
					saved_from_id : $client->peerUser(...),
					saved_from_name : '7AU9nGL8T0VvHotC',
					saved_date : 97,
					psa_type : '5oLB9D2P4TC1JHFr',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 5,
				quote_text : 'cwsWejuyO8iM24Bz',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 46,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 85,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 68,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 4,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 38,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 98,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 32,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 22,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 26,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 34,
						language : '2XCScpdIWBxlVOqv',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 38,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 0,
						user_id : 219594406170287805,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 48,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 99,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 17,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 21,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 13,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 67,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 23,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 95,
						document_id : 5527730681342319902,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 74,
					),
				),
				quote_offset : 74,
				todo_item_id : 56,
			),
			date : 24,
			message : '3DwVTB1kvxXpl6Eq',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 60,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 45,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 72,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 58,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 36,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 58,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 0,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 56,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 15,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 90,
					language : 'eAptMoZCHuykjlDR',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 38,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 41,
					user_id : -7157581185398555542,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 50,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 11,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 61,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 5,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 100,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 55,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 62,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 84,
					document_id : 1288122950281174461,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 17,
				),
			),
			views : 34,
			forwards : 64,
			replies : $client->messageReplies(
				comments : true,
				replies : 49,
				replies_pts : 55,
				recent_repliers : array(
					$client->peerUser(
						user_id : 6067894453647377046,
					),
					$client->peerChat(
						chat_id : -884284939011242365,
					),
					$client->peerChannel(
						channel_id : -7793181938396120540,
					),
				),
				channel_id : -3228132845773062763,
				max_id : 47,
				read_max_id : 6,
			),
			edit_date : 14,
			post_author : 'opWy7SENa86ZPutF',
			grouped_id : 8944421543495662854,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 86,
						reaction : $client->reactionEmpty(...),
						count : 100,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 39,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 35,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Jq5aBitgKn79WZDQ',
					reason : 'ZIMXPEe5OgKADz1j',
					text : 'yfl0bH8k7m6Thwtj',
				),
			),
			ttl_period : 85,
			quick_reply_shortcut_id : 98,
			effect : 1672285077728657208,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'VSUJGeAvLOuXZpIl',
				text : $client->textWithEntities(
					text : 'piAzYWE7xsefVdCo',
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
			report_delivery_until_date : 0,
			paid_message_stars : -751275596270647996,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -6125114525071050357,
					nanos : 28,
				),
				schedule_date : 83,
			),
			schedule_repeat_period : 29,
			summary_from_language : 'usHyoei3kQXErnW1',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 72,
			from_id : $client->peerUser(
				user_id : -113684898935427954,
			),
			peer_id : $client->peerUser(
				user_id : 4229630728569644595,
			),
			saved_peer_id : $client->peerUser(
				user_id : 2379361820530022543,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 4,
				reply_to_peer_id : $client->peerUser(
					user_id : -1614318572380705482,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'nqrpxDt34woJSEMC',
					date : 71,
					channel_post : 99,
					post_author : 'N8QRvDoFO15r4iJe',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 78,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'dICfOnrUjqxGQkiZ',
					saved_date : 19,
					psa_type : 'rGpkQOjKnc7VtR30',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 86,
				quote_text : 'If9pV08ynur2gEsa',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 1,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 50,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 31,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 18,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 25,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 51,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 35,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 39,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 43,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 68,
						language : 'eaIxQ169XiCU8NHb',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 83,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 73,
						user_id : 6047150803544077119,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 23,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 90,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 79,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 68,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 12,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 16,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 23,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 56,
						document_id : -3500487830474648190,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 23,
					),
				),
				quote_offset : 8,
				todo_item_id : 36,
			),
			date : 33,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 57,
						reaction : $client->reactionEmpty(...),
						count : 79,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 68,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 27,
					),
				),
			),
			ttl_period : 53,
		),
	),
	new_encrypted_messages : array(
		$client->encryptedMessage(
			random_id : 4274681702326084241,
			chat_id : 20,
			date : 67,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			file : $client->encryptedFileEmpty(),
		),
		$client->encryptedMessageService(
			random_id : 3797088963274257017,
			chat_id : 19,
			date : 26,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 40,
				peer_id : $client->peerUser(
					user_id : 3336490755644920154,
				),
			),
			pts : 78,
			pts_count : 81,
		),
		$client->updateMessageID(
			id : 42,
			random_id : 5786671025811427427,
		),
		$client->updateDeleteMessages(
			messages : array(80),
			pts : 40,
			pts_count : 61,
		),
		$client->updateUserTyping(
			user_id : 2873208819161334432,
			top_msg_id : 71,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -2160046154422031661,
			from_id : $client->peerUser(
				user_id : -4131079159008947640,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -1152396737116422340,
				self_participant : $client->chatParticipant(
					user_id : 2991297022503726429,
					inviter_id : 5858350204175240314,
					date : 42,
				),
			),
		),
		$client->updateUserStatus(
			user_id : -1149219888480923484,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 5775270802174755917,
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
			date : 8,
			device : 'Q2TWDrYEeB97jAqV',
			location : 'vkDx4aOZz2ldrTJw',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 2469041503548416090,
				chat_id : 78,
				date : 80,
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
				id : 73,
			),
			date : 52,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 23,
			max_date : 36,
			date : 63,
		),
		$client->updateChatParticipantAdd(
			chat_id : 7581582229112426101,
			user_id : -7844519073658590246,
			inviter_id : -2395307565871302158,
			date : 68,
			version : 65,
		),
		$client->updateChatParticipantDelete(
			chat_id : -7544299363308266507,
			user_id : -6776101991319667531,
			version : 25,
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
					id : 5,
					ip_address : '127.0.0.1',
					port : 72,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : -7494822277070649121,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : false,
				mute_until : 14,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : false,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 69,
			type : 'Ba1bz7th5UkSroH8',
			message : 'MpXjlOmTavLKouxP',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 50,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 2,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 14,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 94,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 0,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 45,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 21,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 52,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 46,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 22,
					language : 'WnXkwERbiftrK6Bg',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 80,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 60,
					user_id : -3969405082369214879,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 39,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 38,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 72,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 23,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 92,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 82,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 26,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 87,
					document_id : -3037511111869875913,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 75,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(7956795784573693437),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(2948921452835834079),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-4679249638000527565),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-5841781499323493423),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -6138044661972183538,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 66,
			peer : $client->peerUser(
				user_id : -6259882536639094100,
			),
			top_msg_id : 54,
			max_id : 6,
			still_unread_count : 42,
			pts : 0,
			pts_count : 97,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -5128273314216904511,
			),
			max_id : 54,
			pts : 23,
			pts_count : 82,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -5471240011707965666,
				url : 'https://docs.liveproto.dev',
			),
			pts : 39,
			pts_count : 78,
		),
		$client->updateReadMessagesContents(
			messages : array(8),
			pts : 77,
			pts_count : 58,
			date : 2,
		),
		$client->updateChannelTooLong(
			channel_id : -5783253061565654972,
			pts : 13,
		),
		$client->updateChannel(
			channel_id : -7446065009656515725,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 40,
				peer_id : $client->peerUser(
					user_id : 7665160850340015684,
				),
			),
			pts : 77,
			pts_count : 66,
		),
		$client->updateReadChannelInbox(
			folder_id : 13,
			channel_id : -6467959825781925076,
			max_id : 42,
			still_unread_count : 100,
			pts : 26,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 653290696448892574,
			messages : array(100),
			pts : 2,
			pts_count : 47,
		),
		$client->updateChannelMessageViews(
			channel_id : -7371099976339742810,
			id : 36,
			views : 9,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 8622645857808554563,
			user_id : -5572499536856204692,
			is_admin : false,
			version : 59,
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
					installed_date : 60,
					id : -6533287306476299213,
					access_hash : -7365449490008936371,
					title : 'YnlPp5JRr6HSsezV',
					short_name : 'OJw2lN13IbgDEyUc',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 44,
					thumb_version : 17,
					thumb_document_id : 7555653237798463505,
					count : 97,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'hyIVZmrL5W2gnJoD',
						documents : array(-4538607790288911942),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : -3243584076594959754,
						keyword : array('oD82cGmPItubEAZq'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : -487466720102101647,
					),
					$client->document(
						id : 4758238272916271885,
						access_hash : 3083767133588024615,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 90,
						mime_type : 'l2SNMKTnQLcqGVp9',
						size : 7515165681600070163,
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
						dc_id : 79,
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
			order : array(1717036254707240845),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 9049758361194015090,
			user_id : 3868342034280827023,
			query : '0S67JWyfY8uhNvjx',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : '3oDVX4jUJy2s0aZp',
		),
		$client->updateBotInlineSend(
			user_id : 4485603505590188547,
			query : 'FZVUoiPqlbn4M5av',
			geo : $client->geoPointEmpty(),
			id : 'vlNKFq809rV6TaDx',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 10,
				id : -311855874063420856,
				access_hash : 5578422068244167829,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 46,
				peer_id : $client->peerUser(
					user_id : 5887500587097438551,
				),
			),
			pts : 97,
			pts_count : 70,
		),
		$client->updateBotCallbackQuery(
			query_id : -9158258370372473829,
			user_id : -2816383409026233224,
			peer : $client->peerUser(
				user_id : 8246160598672178154,
			),
			msg_id : 13,
			chat_instance : 3292918606955664484,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'IpOA8N7Ga1MwBmlD',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 81,
				peer_id : $client->peerUser(
					user_id : 1706345045749395698,
				),
			),
			pts : 5,
			pts_count : 54,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -3116865566581695612,
			user_id : -333089055699856111,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 50,
				id : -7960696923978148179,
				access_hash : -2915399922953755638,
			),
			chat_instance : -1145215028561044910,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'hbHpDCYTiJxX24kl',
		),
		$client->updateReadChannelOutbox(
			channel_id : 4213726954389899469,
			max_id : 99,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 2545857113579006014,
			),
			top_msg_id : 96,
			saved_peer_id : $client->peerUser(
				user_id : 4307507233026170846,
			),
			draft : $client->draftMessageEmpty(
				date : 1,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 7627011194082500420,
			webpage : $client->webPageEmpty(
				id : 3691429217602529197,
				url : 'https://docs.liveproto.dev',
			),
			pts : 0,
			pts_count : 61,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 67,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -2919882603926811762,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 53,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 4419309389179518548,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 57,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'palysR5I9dqQgTHi',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -3280499029821759021,
			data : $client->dataJSON(
				data : 'DBCmpqz6ioWYutAn',
			),
			timeout : 30,
		),
		$client->updateBotShippingQuery(
			query_id : 2967227053464235673,
			user_id : 6901331761603634119,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'buA1e35NGKtx8lHO',
				street_line2 : '4L8WRApKFxY9lJjz',
				city : 'x2FHn8LUSYtyd4M6',
				state : 'WqQnByIoKFl2w7vH',
				country_iso2 : 'zWnsdbpl1gw54moG',
				post_code : 'rcuXNLhSOFEfby51',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -5834597595644732558,
			user_id : -7624151403615870218,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'DGT5C0RnIo23JprB',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'mp90CnLd4uqtcxsZ',
					street_line2 : 'w6QMnICxi7cm1Zgj',
					city : '0izjDZmNJbYsKQvR',
					state : 'Biz8MGe5OTvUolND',
					country_iso2 : 'ZskcaN9iwhpxb2lK',
					post_code : 'DWBIMQOPV6LdsCG2',
				),
			),
			shipping_option_id : 'CmShfc7kAjgurHB2',
			currency : 'WMNfApjTBg5dEJYu',
			total_amount : 5686641912377670389,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 1505541067991757989,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'Yj5f4pwLxCH1zJRb',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'vXdUnC4RDpKOyeIG',
				from_version : 63,
				version : 95,
				strings : array(
					$client->langPackString(
						key : 'HPFYAbJ5KIw7TWhn',
						value : 'GJiOQEzUPRFAoxW1',
					),
					$client->langPackStringPluralized(
						key : '701EoUmHjeBJsryg',
						zero_value : 'XYkvPphdmVODiBQC',
						one_value : 'io1IAEgNGbXPhDJK',
						two_value : 'U0J3fihONZCEmLWK',
						few_value : 'yD2kHBM80iazJnCA',
						many_value : '0f4ySbGoE8PsHhtl',
						other_value : 'BRhx6wCX7sJnN0tP',
					),
					$client->langPackStringDeleted(
						key : 'K7itucHQxbTd2RqC',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 5051766783355850204,
			top_msg_id : 92,
			saved_peer_id : $client->peerUser(
				user_id : 251603589113059614,
			),
			messages : array(96),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -8550617705343139398,
			available_min_id : 29,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 3330522872234519500,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : 6680016400540433782,
			),
		),
		$client->updateMessagePoll(
			poll_id : 7378134224139864198,
			poll : $client->poll(
				id : -3023809997261253095,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : 'Tv3GOZzIEVlAYbJX',
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
				close_period : 48,
				close_date : 24,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 70,
					),
				),
				total_voters : 47,
				recent_voters : array(
					$client->peerUser(
						user_id : -1699829425384226077,
					),
					$client->peerChat(
						chat_id : -6506019637213366408,
					),
					$client->peerChannel(
						channel_id : 2313427621235632683,
					),
				),
				solution : 'sGD5y68gA1pdNaEn',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 39,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 43,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 85,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 17,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 42,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 37,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 20,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 13,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 0,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 70,
						language : 'KMv4c8tmDZeE9kXg',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 93,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 28,
						user_id : 485723156418021579,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 97,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 55,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 8,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 31,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 32,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 2,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 20,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 2,
						document_id : 2992074717014557685,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 50,
					),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 1247748898594090283,
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
				until_date : 51,
			),
			version : 84,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : 1823841318953714910,
					),
					folder_id : 76,
				),
			),
			pts : 19,
			pts_count : 89,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -6543255526445176239,
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
				geo_distance : 47,
				request_chat_title : 'tDomQyLCF23vfd1l',
				request_chat_date : 30,
				business_bot_id : -5936581089042657563,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 5557754089996112345,
				registration_month : 'XwHD5KbvsSjl90IZ',
				phone_country : '+1234567890',
				name_change_date : 28,
				photo_change_date : 35,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : 5877435322260781732,
					),
					expires : 52,
					distance : 52,
				),
				$client->peerSelfLocated(
					expires : 9,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 3,
				peer_id : $client->peerUser(
					user_id : -369982195723676734,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -828553795850284113,
			),
			messages : array(10),
			sent_messages : array(95),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 6509241366631039369,
				access_hash : -8521606975594565654,
				slug : 'eFvBsIWAfo8px3Hu',
				title : 'DzpAqINctoehQl4Z',
				document : $client->documentEmpty(
					id : -2146493027426032417,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 67,
						outbox_accent_color : 41,
						message_colors : array(23),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'oCTuh6wWjLR4tFS0',
				installs_count : 23,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -3044151340484238122,
			),
			msg_id : 18,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 1957239196675099833,
			peer : $client->peerUser(
				user_id : -6491969738533453226,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 95,
		),
		$client->updateDialogFilter(
			id : 74,
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
					text : 'snGjqYRXASyD0Fwd',
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
				emoticon : 'QEcbZN5uLslS8yAG',
				color : 36,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(47),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 109233118226831487,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : 4672721905072052714,
			id : 70,
			forwards : 51,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -2137580272163410750,
			top_msg_id : 85,
			read_max_id : 3,
			broadcast_id : -955383083198370968,
			broadcast_post : 70,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 6330327156264077899,
			top_msg_id : 12,
			read_max_id : 35,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -194931531358660228,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -7363425996192582699,
			top_msg_id : 60,
			from_id : $client->peerUser(
				user_id : 4854709449746929806,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 5667645876104128697,
			),
			messages : array(78),
			pts : 45,
			pts_count : 45,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 7483202686269988231,
			messages : array(40),
			pts : 88,
			pts_count : 18,
		),
		$client->updateChat(
			chat_id : -8540204482407916234,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 6340962184803721745,
				access_hash : -6789119739065533312,
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
						user_id : -6298335793369817930,
					),
					date : 81,
					active_date : 65,
					source : 86,
					volume : 44,
					about : '8mWP5cLjbt1Z0nd6',
					raise_hand_rating : -5648950916344958384,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : '38sWOt1aY2lSKdwE',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 12,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : '4MoAq0O8IGg7QZVu',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 84,
					),
					paid_stars_total : -1824281225686769405,
				),
			),
			version : 31,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : -1259560964225912202,
			),
			call : $client->groupCallDiscarded(
				id : -9009918668879997807,
				access_hash : -5570973349998691179,
				duration : 46,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -8039187750384249923,
			),
			ttl_period : 14,
		),
		$client->updateChatParticipant(
			chat_id : 8882684038482293068,
			date : 41,
			actor_id : 5716968714740106688,
			user_id : 8128701867181237985,
			prev_participant : $client->chatParticipant(
				user_id : -772092437662964801,
				inviter_id : 3578877639783957197,
				date : 19,
			),
			new_participant : $client->chatParticipant(
				user_id : 4846007621127344300,
				inviter_id : -2953495186379209378,
				date : 34,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'rCZSt2wUKBpgqLIH',
				admin_id : -3332894954925409426,
				date : 9,
				start_date : 99,
				expire_date : 76,
				usage_limit : 48,
				usage : 33,
				requested : 93,
				subscription_expired : 4,
				title : 'W0OwxSA6GbmTeNcP',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 55,
					amount : -8170559458949157422,
				),
			),
			qts : 53,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -7315698511540443871,
			date : 85,
			actor_id : 5158722946739160721,
			user_id : 6894341641759722062,
			prev_participant : $client->channelParticipant(
				user_id : -7714386248653010195,
				date : 20,
				subscription_until_date : 80,
			),
			new_participant : $client->channelParticipant(
				user_id : -6806773541636995567,
				date : 6,
				subscription_until_date : 94,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'b0wkE3NFcotMz9Cl',
				admin_id : 1814129556424433651,
				date : 75,
				start_date : 17,
				expire_date : 30,
				usage_limit : 29,
				usage : 73,
				requested : 95,
				subscription_expired : 22,
				title : '5RQ0rOXywZsCBzx4',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 69,
					amount : 8025795979954908361,
				),
			),
			qts : 1,
		),
		$client->updateBotStopped(
			user_id : 866238520707243277,
			date : 61,
			stopped : true,
			qts : 99,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'PpQJ1GWh7aNe3b0V',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 5948875060738007093,
			),
			bot_id : -5113221913888523662,
			commands : array(
				$client->botCommand(
					command : 'yq0Lx9UI6XrZOuY5',
					description : 'sKyYLOFlSMaBQrEx',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 7015901224321196504,
			),
			requests_pending : 78,
			recent_requesters : array(7065875609445203786),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -4321051902606842793,
			),
			date : 23,
			user_id : 965132503706441292,
			about : '7mKjBNk4bpHwOZ2t',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'D1MVcNF8OAoISKku',
				admin_id : -3864609463332461681,
				date : 36,
				start_date : 17,
				expire_date : 15,
				usage_limit : 74,
				usage : 48,
				requested : 96,
				subscription_expired : 81,
				title : 'zasOxtAJoRIXBKLw',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 18,
					amount : 8987254954203932753,
				),
			),
			qts : 88,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 4071672384052389184,
			),
			msg_id : 83,
			top_msg_id : 35,
			saved_peer_id : $client->peerUser(
				user_id : -1578551100369623585,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 97,
						reaction : $client->reactionEmpty(...),
						count : 43,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 57,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 61,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 4837091899658033579,
		),
		$client->updateBotMenuButton(
			bot_id : 5036300658564812329,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -8406668989889904519,
			),
			msg_id : 34,
			transcription_id : -8150081751549166290,
			text : 'YDUmbIPiAFOcla3p',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 6944767193913724247,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 1785447647985326021,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -7175589849453080462,
			),
			msg_id : 60,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 56,
					h : 54,
					thumb : $client->photoSizeEmpty(
						type : 'XczoWRy6SFQCHgrq',
					),
					video_duration : 51,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : 3027913237764204384,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -7422888566521870457,
			),
			story : $client->storyItemDeleted(
				id : 14,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : 6175330851696815543,
			),
			max_id : 28,
		),
		$client->updateStoryID(
			id : 93,
			random_id : 8966382465001206038,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 69,
				cooldown_until_date : 10,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 6686909798315784499,
			),
			story_id : 58,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -3860864380753972369,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'lOBqwgNPLhzaEoSH',
				user_id : 8222684580078870451,
				giveaway_msg_id : 32,
				date : 37,
				expires : 98,
				used_gift_slug : 'zXGvfPrR85htFa0V',
				multiplier : 31,
				stars : -4554345660932702471,
			),
			qts : 89,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 1100107685600638888,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 2498081698127370622,
			),
			wallpaper : $client->wallPaper(
				id : 6092981577865211811,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -1079390050072231505,
				slug : 'HnqgNVw9cTtRfXDz',
				document : $client->documentEmpty(
					id : -867714542062887543,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 72,
					second_background_color : 78,
					third_background_color : 89,
					fourth_background_color : 27,
					intensity : 68,
					rotation : 81,
					emoticon : 'iFx8SVl5ZXmAcUG3',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -2102908883548503363,
			),
			msg_id : 22,
			date : 75,
			actor : $client->peerUser(
				user_id : -1222982068924607479,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'QpRqr3ndBGf8XzFK',
				),
				$client->reactionCustomEmoji(
					document_id : -1747629745716444340,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'c76AJwM1CdZ4QqaF',
				),
				$client->reactionCustomEmoji(
					document_id : 977117950771074587,
				),
				$client->reactionPaid(),
			),
			qts : 34,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -7185264562727773946,
			),
			msg_id : 73,
			date : 35,
			reactions : array(
				$client->reactionCount(
					chosen_order : 85,
					reaction : $client->reactionEmpty(),
					count : 67,
				),
			),
			qts : 64,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 3824766129721650394,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -991312505923492497,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 1,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'hKm9W7TsHMnFGlCX',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 85,
					shortcut : '6mpD05EJY8ZPSzbO',
					top_message : 36,
					count : 98,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 74,
				shortcut : '3vByY5sUuaLTQnCc',
				top_message : 82,
				count : 9,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 15,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 1,
				peer_id : $client->peerUser(
					user_id : -373671385885580647,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 19,
			messages : array(5),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'XwGnRKFlPL1QqaVc',
				user_id : 6130645285092821661,
				dc_id : 59,
				date : 82,
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
			qts : 61,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : '17ZyBmG8ntU9ge6K',
			message : $client->messageEmpty(
				id : 64,
				peer_id : $client->peerUser(
					user_id : -627085355714003007,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 24,
				peer_id : $client->peerUser(
					user_id : 6195686759866479843,
				),
			),
			qts : 90,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'DRIxVN4nXapT8Cwe',
			message : $client->messageEmpty(
				id : 34,
				peer_id : $client->peerUser(
					user_id : -1060400632173935320,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 48,
				peer_id : $client->peerUser(
					user_id : -5555565456459601258,
				),
			),
			qts : 17,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'ELWxGy2bwV9cJjdi',
			peer : $client->peerUser(
				user_id : -6412791754005050785,
			),
			messages : array(16),
			qts : 61,
		),
		$client->updateNewStoryReaction(
			story_id : 100,
			peer : $client->peerUser(
				user_id : 282385980110847563,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -5818195714054286466,
				nanos : 61,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 7334393608316144889,
			user_id : 4597385508594909820,
			connection_id : 'pPaLOCGXI83cFSTk',
			message : $client->messageEmpty(
				id : 50,
				peer_id : $client->peerUser(
					user_id : 5722779440827664812,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 12,
				peer_id : $client->peerUser(
					user_id : 4924452390608444969,
				),
			),
			chat_instance : 5833645754515730926,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -6730438167304186099,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : 3023280647935267558,
					nanos : 27,
				),
				available_balance : $client->starsAmount(
					amount : 2554596391610628478,
					nanos : 40,
				),
				overall_revenue : $client->starsAmount(
					amount : 6789488775242485594,
					nanos : 65,
				),
				next_withdrawal_at : 100,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -3628039820731512355,
			payload : 'uZVcpXPkEMShDajn',
			qts : 14,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 61,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 90,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 910781014268452412,
				access_hash : -1146578375344066341,
			),
			sub_chain_id : 73,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 70,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 6421710817808470223,
			saved_peer_id : $client->peerUser(
				user_id : -2802221504464559671,
			),
			read_max_id : 23,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -6044799988404454794,
			saved_peer_id : $client->peerUser(
				user_id : -9086513659261480433,
			),
			read_max_id : 74,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -6486478104626968839,
			saved_peer_id : $client->peerUser(
				user_id : 5248648519580903372,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : -5161933885723144077,
				access_hash : 8497907279691192583,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 65,
				from_id : $client->peerUser(
					user_id : -425023295590670130,
				),
				date : 88,
				message : $client->textWithEntities(
					text : 'lPOx1wiQnRoSyYKg',
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
				paid_message_stars : -3086076268988407529,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : -4130889597381524920,
				access_hash : -1209633672381337760,
			),
			from_id : $client->peerUser(
				user_id : -3120168304786015217,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : -5352394602973746455,
			),
			topic_id : 72,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : -6576157907197245308,
			),
			order : array(39),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : -2738877335281166289,
				access_hash : 1499325349290086214,
			),
			messages : array(67),
		),
		$client->updateStarGiftAuctionState(
			gift_id : -8881675874744974836,
			state : $client->starGiftAuctionStateNotModified(),
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : 4654421085810081363,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : 4047290000871142762,
				bid_date : 4,
				min_bid_amount : 5463800455414101118,
				bid_peer : $client->peerUser(
					user_id : -1615920501029573493,
				),
				acquired_count : 63,
			),
		),
		$client->updateEmojiGameInfo(
			info : $client->messages->emojiGameUnavailable(),
		),
		$client->updateStarGiftCraftFail(),
	),
	chats : array(
		$client->chatEmpty(
			id : -3934232894525901363,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -7517989884962771179,
			title : 'H0XeQlGfbWIJdrAi',
			photo : $client->chatPhotoEmpty(),
			participants_count : 40,
			date : 6,
			version : 20,
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
				until_date : 76,
			),
		),
		$client->chatForbidden(
			id : -9164924586946637013,
			title : 'LQ4nW5yPT3CSOR6F',
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
			id : 4259329353953045388,
			access_hash : 9083390715282632550,
			title : 'Wf7DhMEKHsijgoqx',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 99,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'G6sEjmAHF3dWIage',
					reason : 'MtIb64WsyozZv7pa',
					text : 'El21Jn46FuyDkobZ',
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
				until_date : 82,
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
				until_date : 23,
			),
			participants_count : 83,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 30,
			),
			color : $client->peerColor(
				color : 45,
				background_emoji_id : 5735286983614985373,
			),
			profile_color : $client->peerColor(
				color : 49,
				background_emoji_id : -3292093321236894627,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 65,
			subscription_until_date : 98,
			bot_verification_icon : -8792027054738535483,
			send_paid_messages_stars : -1305040591524415043,
			linked_monoforum_id : -5356831151283158842,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -8821189039370907475,
			access_hash : -3713274233946945342,
			title : 'G0m97yTORpJzgfYr',
			until_date : 46,
		),
	),
	users : array(
		$client->userEmpty(
			id : -9223356939085816408,
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
			id : -1696986478308848654,
			access_hash : 7489800420047445247,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 46,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'fbPBmtrFK3aIRqQ5',
					reason : 'KSMDFOgIC1tZTcsr',
					text : '9YcJ3xGtkLy54vCX',
				),
			),
			bot_inline_placeholder : '9OT1avhC0bSrBdzn',
			lang_code : 'mkl8pyaDu320jh5r',
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
				max_id : 50,
			),
			color : $client->peerColor(
				color : 69,
				background_emoji_id : -5417707525496451717,
			),
			profile_color : $client->peerColor(
				color : 38,
				background_emoji_id : 8192570129543645989,
			),
			bot_active_users : 94,
			bot_verification_icon : 932803693106158885,
			send_paid_messages_stars : -3015270198603074625,
		),
	),
	intermediate_state : $client->updates->state(
		pts : 34,
		qts : 75,
		date : 47,
		seq : 100,
		unread_count : 68,
	),
);
```