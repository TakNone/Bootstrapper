# updates.difference

**Description** : *Full list of occurred events*

**Layer** : 218

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
			id : 55,
			peer_id : $client->peerUser(
				user_id : 5508889209032261436,
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
			id : 7,
			from_id : $client->peerUser(
				user_id : 8397164259509420174,
			),
			from_boosts_applied : 11,
			peer_id : $client->peerUser(
				user_id : -652189588995543104,
			),
			saved_peer_id : $client->peerUser(
				user_id : 5419772857557606,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -4943262869531704265,
				),
				from_name : 'kfibWp5lSvHNIouX',
				date : 60,
				channel_post : 28,
				post_author : 'kmpBow0JPzCUQu7g',
				saved_from_peer : $client->peerUser(
					user_id : -4103437940640874353,
				),
				saved_from_msg_id : 31,
				saved_from_id : $client->peerUser(
					user_id : -4670829522110927601,
				),
				saved_from_name : 'ih2Dd0ZAbRto8sOE',
				saved_date : 24,
				psa_type : 'xSHCJlnUhEutK8VF',
			),
			via_bot_id : -7072845834906573649,
			via_business_bot_id : -1558096285811501036,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 61,
				reply_to_peer_id : $client->peerUser(
					user_id : -6135100801046928847,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'wWGxh0VXSCATd2qO',
					date : 86,
					channel_post : 5,
					post_author : 'vH7EgQP06yWn8cSY',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 77,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'O45KTus7UpgWaCRr',
					saved_date : 57,
					psa_type : 'c6zoLDSBF8ia1eNK',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 7,
				quote_text : '50sCgAExOokzTehY',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 2,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 11,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 10,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 35,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 93,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 8,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 83,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 16,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 58,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 80,
						language : 't4OsENMBDI3HkZGy',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 41,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 60,
						user_id : -8625926255980907395,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 76,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 9,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 47,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 94,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 62,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 100,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 37,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 35,
						document_id : -4589592241773033736,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 100,
					),
				),
				quote_offset : 59,
				todo_item_id : 73,
			),
			date : 84,
			message : 'OVmsvgnYhzuNJWPq',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 12,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 6,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 85,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 27,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 67,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 35,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 26,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 61,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 97,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 39,
					language : 'dVL3ayt14MGKTbuz',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 8,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 71,
					user_id : -9203409037839015401,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 35,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 25,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 32,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 9,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 9,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 96,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 40,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 17,
					document_id : -2835712341113248796,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 99,
				),
			),
			views : 21,
			forwards : 25,
			replies : $client->messageReplies(
				comments : true,
				replies : 5,
				replies_pts : 33,
				recent_repliers : array(
					$client->peerUser(
						user_id : -6305587898681513943,
					),
					$client->peerChat(
						chat_id : -3968159719406203981,
					),
					$client->peerChannel(
						channel_id : 2776231813851391406,
					),
				),
				channel_id : -2404087550689915074,
				max_id : 43,
				read_max_id : 95,
			),
			edit_date : 44,
			post_author : '1FoBOXmrqpWzTEHc',
			grouped_id : 8684904403186170908,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 16,
						reaction : $client->reactionEmpty(...),
						count : 28,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 14,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 21,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'lVBXbOz8K5E9Qkr4',
					reason : '7bZ5hJjmGqStAa2H',
					text : 'stwjBZmg7rf1LKE0',
				),
			),
			ttl_period : 49,
			quick_reply_shortcut_id : 73,
			effect : -1632432525953436659,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'TYZ5eCnRBL93u4vi',
				text : $client->textWithEntities(
					text : '6LctqBESCpOyeiVj',
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
			report_delivery_until_date : 38,
			paid_message_stars : -4212848557288614522,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 2350221139807583508,
					nanos : 39,
				),
				schedule_date : 71,
			),
			schedule_repeat_period : 55,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 80,
			from_id : $client->peerUser(
				user_id : -8436402376971344802,
			),
			peer_id : $client->peerUser(
				user_id : -8314685805766440644,
			),
			saved_peer_id : $client->peerUser(
				user_id : 750600633111115674,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 46,
				reply_to_peer_id : $client->peerUser(
					user_id : -8322311584237399186,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'RjdXDIMSQ0HcaGml',
					date : 51,
					channel_post : 93,
					post_author : 'eWCiDgsjl1qM8nYP',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 23,
					saved_from_id : $client->peerUser(...),
					saved_from_name : '1OGgbjMNlcsAYQVF',
					saved_date : 37,
					psa_type : '2Kwhkxqlnzf06uER',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 81,
				quote_text : 'fNxj0KSRg9yTmDkJ',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 91,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 76,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 14,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 93,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 26,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 97,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 61,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 59,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 42,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 10,
						language : '48HCWIcd3EeuzKo0',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 79,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 2,
						user_id : -3607362721155841247,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 20,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 44,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 39,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 75,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 78,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 89,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 67,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 79,
						document_id : 6499823367657188385,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 87,
					),
				),
				quote_offset : 58,
				todo_item_id : 18,
			),
			date : 54,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 84,
						reaction : $client->reactionEmpty(...),
						count : 34,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 29,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 97,
					),
				),
			),
			ttl_period : 91,
		),
	),
	new_encrypted_messages : array(
		$client->encryptedMessage(
			random_id : 5945560490038607815,
			chat_id : 94,
			date : 34,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			file : $client->encryptedFileEmpty(),
		),
		$client->encryptedMessageService(
			random_id : -6297072587303324410,
			chat_id : 26,
			date : 38,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 18,
				peer_id : $client->peerUser(
					user_id : -1096267018919218754,
				),
			),
			pts : 80,
			pts_count : 94,
		),
		$client->updateMessageID(
			id : 46,
			random_id : -6704054389061585036,
		),
		$client->updateDeleteMessages(
			messages : array(36),
			pts : 59,
			pts_count : 68,
		),
		$client->updateUserTyping(
			user_id : -1752794887155576441,
			top_msg_id : 83,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 411711864197355624,
			from_id : $client->peerUser(
				user_id : 9091461971909064684,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 5051884889808487525,
				self_participant : $client->chatParticipant(
					user_id : -8679703762464760307,
					inviter_id : -3583187955314476540,
					date : 1,
				),
			),
		),
		$client->updateUserStatus(
			user_id : 7899819869654727475,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 3384618987995618936,
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
			date : 42,
			device : 'jcfh80gPxNGnC2km',
			location : 'XcdOLFCjk34rAGbD',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -1406254765930824580,
				chat_id : 80,
				date : 18,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 58,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 92,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 6,
			),
			date : 14,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 61,
			max_date : 65,
			date : 59,
		),
		$client->updateChatParticipantAdd(
			chat_id : 7216104496362123239,
			user_id : -8971027026785960461,
			inviter_id : 5728683589434046045,
			date : 86,
			version : 74,
		),
		$client->updateChatParticipantDelete(
			chat_id : -4630394740723060899,
			user_id : -6887179399869785202,
			version : 8,
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
					id : 21,
					ip_address : '127.0.0.1',
					port : 82,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : 6754188919702994475,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : true,
				mute_until : 8,
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
			inbox_date : 0,
			type : 'L2Y3Nfl6p8iavd7t',
			message : 'cUSYxCbqv6GD1sgV',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 10,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 95,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 65,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 22,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 88,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 61,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 22,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 100,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 5,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 79,
					language : 'z80aJo2thEvRZwQV',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 3,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 16,
					user_id : -2171895689729555954,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 22,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 88,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 84,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 69,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 87,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 24,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 55,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 7,
					document_id : -5482212843714646574,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 58,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-5722476874116907173),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-5290502493361300819),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(8306538036560237836),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-8749881596241093812),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 1687305283449403927,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 97,
			peer : $client->peerUser(
				user_id : 2873829880011097862,
			),
			top_msg_id : 94,
			max_id : 39,
			still_unread_count : 2,
			pts : 84,
			pts_count : 70,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -6635742459961771724,
			),
			max_id : 20,
			pts : 16,
			pts_count : 65,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 4382900749885336874,
				url : 'https://docs.liveproto.dev',
			),
			pts : 62,
			pts_count : 30,
		),
		$client->updateReadMessagesContents(
			messages : array(72),
			pts : 32,
			pts_count : 14,
			date : 91,
		),
		$client->updateChannelTooLong(
			channel_id : 749495934190803260,
			pts : 76,
		),
		$client->updateChannel(
			channel_id : -1490754664645001619,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 53,
				peer_id : $client->peerUser(
					user_id : -5496543489669439351,
				),
			),
			pts : 94,
			pts_count : 82,
		),
		$client->updateReadChannelInbox(
			folder_id : 82,
			channel_id : -7034159638102206717,
			max_id : 57,
			still_unread_count : 35,
			pts : 20,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 515032908144705497,
			messages : array(48),
			pts : 49,
			pts_count : 62,
		),
		$client->updateChannelMessageViews(
			channel_id : 518164953228638346,
			id : 7,
			views : 88,
		),
		$client->updateChatParticipantAdmin(
			chat_id : -3999944460026358627,
			user_id : 2444603203243703339,
			is_admin : true,
			version : 23,
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
					installed_date : 70,
					id : -7821584186586340023,
					access_hash : -6151869713732730825,
					title : 'QG4IBsNOg3AUixWt',
					short_name : 'qbzANSanDgr7ZCIY',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 1,
					thumb_version : 14,
					thumb_document_id : -8995397190557156690,
					count : 76,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'vMSKDC91nHThR7Vg',
						documents : array(-3245207048610495690),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : -4008949678737306639,
						keyword : array('2xm7oCUPr1Tu9d8f'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : 2158236585272773060,
					),
					$client->document(
						id : 8121886954011622147,
						access_hash : 4842509629111997624,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 25,
						mime_type : 'pSqXUgGej38QcYbK',
						size : 956417727658723990,
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
						dc_id : 93,
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
			order : array(8242990075889742041),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -4796110165632376898,
			user_id : 5204386185986274916,
			query : 'lwEgohdBpAjabYxD',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'IGdxjJAr8E3Rp0S6',
		),
		$client->updateBotInlineSend(
			user_id : -6958090167102982000,
			query : 'ceKB0z9M8i2FtN65',
			geo : $client->geoPointEmpty(),
			id : 'Kdzueri1txgq9Ybv',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 65,
				id : 4375533652380925238,
				access_hash : -6519812318039002639,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 63,
				peer_id : $client->peerUser(
					user_id : -5719423906558485542,
				),
			),
			pts : 22,
			pts_count : 7,
		),
		$client->updateBotCallbackQuery(
			query_id : -1634770426867493788,
			user_id : 8313692049756690356,
			peer : $client->peerUser(
				user_id : 4583929565010962736,
			),
			msg_id : 41,
			chat_instance : -3524970254898343741,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'egCmDRafdKvo837Z',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 79,
				peer_id : $client->peerUser(
					user_id : 6373207282963468619,
				),
			),
			pts : 56,
			pts_count : 18,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -5949956777904465511,
			user_id : 9143466259264692136,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 70,
				id : 7646698192135108200,
				access_hash : -6402172987070042539,
			),
			chat_instance : 5881452544452258792,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : '2RnlME8gwrTUD4ZX',
		),
		$client->updateReadChannelOutbox(
			channel_id : -7579480326929170159,
			max_id : 77,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 3470063801402973632,
			),
			top_msg_id : 3,
			saved_peer_id : $client->peerUser(
				user_id : 1411580301785632619,
			),
			draft : $client->draftMessageEmpty(
				date : 12,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 6483854688847708091,
			webpage : $client->webPageEmpty(
				id : -192286620297163705,
				url : 'https://docs.liveproto.dev',
			),
			pts : 50,
			pts_count : 33,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 74,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -906240356644949467,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 13,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -8318162613301155976,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 10,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : '4PrdOoSv0h5pWB9R',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -2728125111176298549,
			data : $client->dataJSON(
				data : 'MdQCP8Sqkvln10Dj',
			),
			timeout : 81,
		),
		$client->updateBotShippingQuery(
			query_id : -6830605864282675083,
			user_id : -529263616195751179,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : '91LVeEqvA7NYzFZk',
				street_line2 : '3abYEmg4GAjneO1I',
				city : 'PS83RuLyGV0e71pg',
				state : 'gvVJEjmQ02T7GHFi',
				country_iso2 : 'pWPeo7xF1sza0Rtu',
				post_code : 'baVZ8NG40RFxASqJ',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -1494851257494551718,
			user_id : 7421152366265863643,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : '4X2szZeCvhoUOjcT',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'x8t39avIb4mejFz7',
					street_line2 : 'rfR7A125DxGJyWCw',
					city : 'K64ZxviXJScGCEj5',
					state : 'Pz2tM1OVq3wldeEg',
					country_iso2 : 'yojeKlMqEPW0F8J1',
					post_code : 'Xs0WaOuNPE4b7Sko',
				),
			),
			shipping_option_id : 'MBAL4p0VmW7aq2Gt',
			currency : 'BmnNlGt4fOA5xCva',
			total_amount : -5285369807332836918,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 1830825981503755599,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'gk2Vu7caxKvRPhpI',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : '7jVAmKgQ6SXaNPWD',
				from_version : 100,
				version : 27,
				strings : array(
					$client->langPackString(
						key : 'dSlqkaFzUC5nKrs8',
						value : '2pcZLxCSjA6fi7Jk',
					),
					$client->langPackStringPluralized(
						key : 'VdB2n3cSXC9LwFR8',
						zero_value : 'USe3ONvKWqzAg8dm',
						one_value : 'GoxU4T1asNngkAiq',
						two_value : 'hAF32Z8TPmLXQVMB',
						few_value : '3LMCgJzqn8rp615T',
						many_value : 'igPswdfv3Hhq8LZc',
						other_value : 'Dtyw0md5XukZbNfS',
					),
					$client->langPackStringDeleted(
						key : 'gAh6Dwcb1IQBFKH5',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -2640603382331730727,
			top_msg_id : 7,
			saved_peer_id : $client->peerUser(
				user_id : -3364148951118325735,
			),
			messages : array(24),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -2046495140688662109,
			available_min_id : 46,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 4680348771753209594,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : -4610654794001287940,
			),
		),
		$client->updateMessagePoll(
			poll_id : 2897318135681697416,
			poll : $client->poll(
				id : -1300385649920358754,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : 'BLliNsdox4trCkZh',
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
				close_period : 62,
				close_date : 11,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 61,
					),
				),
				total_voters : 13,
				recent_voters : array(
					$client->peerUser(
						user_id : 1070253890654402221,
					),
					$client->peerChat(
						chat_id : -5694797170024981462,
					),
					$client->peerChannel(
						channel_id : -8713693877201366060,
					),
				),
				solution : 'vei02r6uxG9VN3dt',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 54,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 42,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 32,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 36,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 69,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 46,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 51,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 26,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 96,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 79,
						language : 'U9rfND10H8EYM7qG',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 54,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 98,
						user_id : 7688169378763355531,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 91,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 12,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 20,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 35,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 15,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 33,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 87,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 93,
						document_id : -8868371125876336115,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 65,
					),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 6947385000454126648,
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
				until_date : 19,
			),
			version : 63,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : -8277230100751976190,
					),
					folder_id : 90,
				),
			),
			pts : 65,
			pts_count : 78,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 9091348338892414445,
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
				geo_distance : 30,
				request_chat_title : 'nNqeaow5tyIY38T9',
				request_chat_date : 99,
				business_bot_id : 3949705271929156854,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -7511528090934851863,
				registration_month : 'tIJclYsNrzbiLfWR',
				phone_country : '+1234567890',
				name_change_date : 59,
				photo_change_date : 44,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : 1506498527888356770,
					),
					expires : 57,
					distance : 39,
				),
				$client->peerSelfLocated(
					expires : 72,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 25,
				peer_id : $client->peerUser(
					user_id : -4159184875514583497,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 5399984520645384083,
			),
			messages : array(92),
			sent_messages : array(65),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 5974159033279063375,
				access_hash : -5557701061678840936,
				slug : '9oeH6Q75CDSf8AnT',
				title : 'uJleSVDczhONTXbf',
				document : $client->documentEmpty(
					id : 6628317562883076460,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 69,
						outbox_accent_color : 67,
						message_colors : array(28),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'Y0mWS37Z4DcBwrnk',
				installs_count : 4,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 1015757753167074299,
			),
			msg_id : 32,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 4570385099756349094,
			peer : $client->peerUser(
				user_id : 1739113048939568738,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 79,
		),
		$client->updateDialogFilter(
			id : 27,
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
				id : 13,
				title : $client->textWithEntities(
					text : 'oyCEALzD5Q7wUJdB',
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
				emoticon : 'OnfBWH7JPLyS2Y1v',
				color : 83,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(27),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -2443007355829188190,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -5244502038378104177,
			id : 45,
			forwards : 21,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -277912820251904761,
			top_msg_id : 21,
			read_max_id : 52,
			broadcast_id : 8788197988683763165,
			broadcast_post : 92,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -444852752422562592,
			top_msg_id : 63,
			read_max_id : 17,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 5121464894461384070,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : 39259983246815574,
			top_msg_id : 5,
			from_id : $client->peerUser(
				user_id : 372040413485213669,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -3377394984766400536,
			),
			messages : array(55),
			pts : 83,
			pts_count : 70,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -8071362946424873470,
			messages : array(93),
			pts : 94,
			pts_count : 74,
		),
		$client->updateChat(
			chat_id : -707712070148122200,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 7793800083471638805,
				access_hash : 7322613102162921771,
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
						user_id : -4240816458298823108,
					),
					date : 88,
					active_date : 59,
					source : 14,
					volume : 15,
					about : 'Zl6nLxRtYdvT4z5h',
					raise_hand_rating : -8666974589164688253,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : '1naotVE68MF5GWlv',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 2,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'NJB8C3URLeibyV5s',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 21,
					),
					paid_stars_total : 4738041651942466765,
				),
			),
			version : 8,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : -3928469254623766289,
			),
			call : $client->groupCallDiscarded(
				id : 2974514300218144740,
				access_hash : 1095445460315863661,
				duration : 84,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -4732868819852200460,
			),
			ttl_period : 87,
		),
		$client->updateChatParticipant(
			chat_id : -5887501017310807555,
			date : 4,
			actor_id : -5944641708546533686,
			user_id : 4915319686954706921,
			prev_participant : $client->chatParticipant(
				user_id : -8767625685834063416,
				inviter_id : 8050219400353147176,
				date : 100,
			),
			new_participant : $client->chatParticipant(
				user_id : -8809365938958409585,
				inviter_id : 2079857785122609192,
				date : 88,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'Kbc0muMgs67f3PLH',
				admin_id : 7785153741488832006,
				date : 52,
				start_date : 4,
				expire_date : 95,
				usage_limit : 38,
				usage : 74,
				requested : 27,
				subscription_expired : 45,
				title : 'FKGS1c5QrhBltsuW',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 52,
					amount : 2119657362795478779,
				),
			),
			qts : 91,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 5578676466554116922,
			date : 3,
			actor_id : 1881763451794359873,
			user_id : 2252869817423098822,
			prev_participant : $client->channelParticipant(
				user_id : 6468545251367746723,
				date : 23,
				subscription_until_date : 53,
			),
			new_participant : $client->channelParticipant(
				user_id : -178006731765150864,
				date : 45,
				subscription_until_date : 39,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'nCa25M3HfgYxEwF9',
				admin_id : -8241329393827458444,
				date : 24,
				start_date : 86,
				expire_date : 13,
				usage_limit : 32,
				usage : 15,
				requested : 87,
				subscription_expired : 73,
				title : '9ofCUzQK1crmuZTN',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 57,
					amount : -461918623689432287,
				),
			),
			qts : 90,
		),
		$client->updateBotStopped(
			user_id : 6905842710981564855,
			date : 61,
			stopped : true,
			qts : 59,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'EJpafCA0sLw3Zlbt',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -4734899030875586846,
			),
			bot_id : -7646978488485358466,
			commands : array(
				$client->botCommand(
					command : 'bNL6uzH5DoEMxsmG',
					description : 'GC8ueiWcj6SAD9aU',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -6323286741481457687,
			),
			requests_pending : 51,
			recent_requesters : array(-1924893457139324007),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -7481757874353354235,
			),
			date : 48,
			user_id : -3486783390374640201,
			about : 'kRXf1hVODMjUxPJI',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'MSxDpdj8uLnyHiVG',
				admin_id : 2447542451132400160,
				date : 10,
				start_date : 28,
				expire_date : 11,
				usage_limit : 72,
				usage : 36,
				requested : 47,
				subscription_expired : 47,
				title : 'TlyRroPbXKAiGWc3',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 20,
					amount : 6651888631787455423,
				),
			),
			qts : 34,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -228843578775481471,
			),
			msg_id : 81,
			top_msg_id : 80,
			saved_peer_id : $client->peerUser(
				user_id : -8692641660667851415,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 92,
						reaction : $client->reactionEmpty(...),
						count : 87,
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
						count : 10,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : -6076988800425950588,
		),
		$client->updateBotMenuButton(
			bot_id : -7947055454664268946,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -1925164279269541766,
			),
			msg_id : 73,
			transcription_id : 4784137446142871986,
			text : 'BhGHJWtClx9AVUsZ',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 4751269739838944387,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -5430255942937183270,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -8803390053948170237,
			),
			msg_id : 27,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 3,
					h : 85,
					thumb : $client->photoSizeEmpty(
						type : 'zOw4Z2Ml0toRKv6k',
					),
					video_duration : 67,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : -6085368469308365812,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -1547887788171998377,
			),
			story : $client->storyItemDeleted(
				id : 97,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : 8244308967997394118,
			),
			max_id : 64,
		),
		$client->updateStoryID(
			id : 68,
			random_id : 5759611591140977418,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 78,
				cooldown_until_date : 19,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 3032940833113347336,
			),
			story_id : 79,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -821572375102922866,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'evIJERFVdfDQCWkz',
				user_id : -1060223571608074128,
				giveaway_msg_id : 9,
				date : 100,
				expires : 76,
				used_gift_slug : 'LGjIh4iBOHQCc6tw',
				multiplier : 80,
				stars : 2299497546127645699,
			),
			qts : 30,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -3453927613288582942,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -2508409419165277163,
			),
			wallpaper : $client->wallPaper(
				id : -1172405868264906569,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 315910405494850565,
				slug : 'CnkQJPrgiatbI4qT',
				document : $client->documentEmpty(
					id : -5231149283323182860,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 9,
					second_background_color : 71,
					third_background_color : 54,
					fourth_background_color : 53,
					intensity : 28,
					rotation : 31,
					emoticon : '3BSEqbimvyaMKDAY',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -3668900524585950439,
			),
			msg_id : 71,
			date : 21,
			actor : $client->peerUser(
				user_id : 7401169987479971506,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'GsxPTYN0ho3p4zBU',
				),
				$client->reactionCustomEmoji(
					document_id : 773071200555540228,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '41sRQq3CkAdoiBnS',
				),
				$client->reactionCustomEmoji(
					document_id : -4836160600794347597,
				),
				$client->reactionPaid(),
			),
			qts : 83,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 4607827166316207099,
			),
			msg_id : 96,
			date : 8,
			reactions : array(
				$client->reactionCount(
					chosen_order : 21,
					reaction : $client->reactionEmpty(),
					count : 87,
				),
			),
			qts : 35,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -6530545693509649563,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -7688690669752488197,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 56,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'qI5MnwlbUyQFetHO',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 97,
					shortcut : 'CdycBM7PEF2roQAf',
					top_message : 28,
					count : 77,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 33,
				shortcut : 'yan10pHw9zt4MQqA',
				top_message : 41,
				count : 34,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 69,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 70,
				peer_id : $client->peerUser(
					user_id : 333745318920797336,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 27,
			messages : array(84),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'XstnuAPrd87Jj0gN',
				user_id : 886646913179942443,
				dc_id : 72,
				date : 68,
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
			qts : 9,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'SjkhMf29VcOobwmv',
			message : $client->messageEmpty(
				id : 46,
				peer_id : $client->peerUser(
					user_id : 6009889802308055277,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 22,
				peer_id : $client->peerUser(
					user_id : 850971091242392469,
				),
			),
			qts : 55,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'LwHVNvW2JQAUzKgC',
			message : $client->messageEmpty(
				id : 93,
				peer_id : $client->peerUser(
					user_id : -2777093258647863488,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 1,
				peer_id : $client->peerUser(
					user_id : 8439597939680006604,
				),
			),
			qts : 40,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'Ky5mulRxOBUTethW',
			peer : $client->peerUser(
				user_id : -1098731403061756688,
			),
			messages : array(11),
			qts : 47,
		),
		$client->updateNewStoryReaction(
			story_id : 41,
			peer : $client->peerUser(
				user_id : 3587679710364558530,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -2550940269072325434,
				nanos : 19,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -3310191887085864406,
			user_id : 2040037814346502886,
			connection_id : 'eINcP8dEMmQZ0Cyj',
			message : $client->messageEmpty(
				id : 1,
				peer_id : $client->peerUser(
					user_id : -1706448552886996107,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 61,
				peer_id : $client->peerUser(
					user_id : -6727062280205687807,
				),
			),
			chat_instance : 7850196699491050182,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 5327551984627297237,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : 2719738036647835891,
					nanos : 54,
				),
				available_balance : $client->starsAmount(
					amount : -7123418514119202376,
					nanos : 12,
				),
				overall_revenue : $client->starsAmount(
					amount : -6464002302238349338,
					nanos : 100,
				),
				next_withdrawal_at : 49,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -7047728033542960640,
			payload : 'KLiyWEPlJveGR0Sj',
			qts : 1,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 8,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 48,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -3512223038321692139,
				access_hash : -115504838302177849,
			),
			sub_chain_id : 93,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 22,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 19786998465942986,
			saved_peer_id : $client->peerUser(
				user_id : 5208226401772079914,
			),
			read_max_id : 27,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -1572295945562493929,
			saved_peer_id : $client->peerUser(
				user_id : -28078788748722033,
			),
			read_max_id : 31,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -8158906803147020675,
			saved_peer_id : $client->peerUser(
				user_id : -1043239019387262025,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : 7463282587642336336,
				access_hash : -8309324217791647488,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 64,
				from_id : $client->peerUser(
					user_id : -6939120286933772652,
				),
				date : 97,
				message : $client->textWithEntities(
					text : 'HAt7zZd4JmPpWSrO',
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
				paid_message_stars : 7019466472544741402,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : -4895194536260804406,
				access_hash : -1633186200057375655,
			),
			from_id : $client->peerUser(
				user_id : 5048810357404565760,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : 6839299063545962273,
			),
			topic_id : 68,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : 195957652452106764,
			),
			order : array(78),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : 7890494285785829758,
				access_hash : 803378350346933683,
			),
			messages : array(97),
		),
		$client->updateStarGiftAuctionState(
			gift_id : -3759410768128538095,
			state : $client->starGiftAuctionState(
				version : 7,
				start_date : 37,
				end_date : 15,
				min_bid_amount : -6548989205569281934,
				bid_levels : array(
					$client->auctionBidLevel(
						pos : 90,
						amount : -4653047747720608180,
						date : 100,
					),
				),
				top_bidders : array(-5946849705121565747),
				next_round_at : 78,
				gifts_left : 96,
				current_round : 82,
				total_rounds : 51,
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : -4246082853275574222,
			text : '5EDG7pRaL43lOBSc',
		),
		$client->updateBotSubscriptionExpire(
			user_id : -2193822520045048750,
			payload : 'QBZWN7MVsTRDwjay',
			until_date : 3,
			qts : 17,
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : -7852979321767189819,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : 7095701177012417836,
				bid_date : 66,
				min_bid_amount : -8419398720345282120,
				peer : $client->peerUser(
					user_id : 6902524202582332956,
				),
				acquired_count : 10,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -9148352591054436083,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -129303210096461157,
			title : '3dKArMuplB5n496i',
			photo : $client->chatPhotoEmpty(),
			participants_count : 16,
			date : 69,
			version : 90,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
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
				until_date : 99,
			),
		),
		$client->chatForbidden(
			id : 4428867434855610153,
			title : '315D8bcEiqJ62Rpt',
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
			id : -7521373156275277728,
			access_hash : 7509397642762983522,
			title : 'wRCSIyl48ef0Dub9',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 71,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '9fOCmwryIz82jJex',
					reason : 'BjYS0eCs6yrRi3pA',
					text : 'sLvpeAoMGcykTwJH',
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
				until_date : 98,
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
				until_date : 91,
			),
			participants_count : 52,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 10,
			),
			color : $client->peerColor(
				color : 50,
				background_emoji_id : -3963346170839273212,
			),
			profile_color : $client->peerColor(
				color : 23,
				background_emoji_id : -2646789985780366098,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 89,
			subscription_until_date : 2,
			bot_verification_icon : -1543317068594239250,
			send_paid_messages_stars : 8383327205533933786,
			linked_monoforum_id : 293304759408757750,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -8866621063142086329,
			access_hash : 8751698404623951929,
			title : 'goQWz0i4SIKDPhCd',
			until_date : 50,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6866868145853401018,
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
			id : -3018606631622444381,
			access_hash : -94105115561740623,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 1,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'wDSg4viXCeMjxq1A',
					reason : 'DQ68asWdYxoVu1zI',
					text : 'dZOofpFb9jDYUVwc',
				),
			),
			bot_inline_placeholder : 'kFaUhnxbJA5qNd1c',
			lang_code : 'ZHQc4zLuPMgS3C7l',
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
				max_id : 85,
			),
			color : $client->peerColor(
				color : 7,
				background_emoji_id : 567669447654445118,
			),
			profile_color : $client->peerColor(
				color : 94,
				background_emoji_id : -4783314131537104310,
			),
			bot_active_users : 43,
			bot_verification_icon : -6286187620499231191,
			send_paid_messages_stars : 1658934502624190954,
		),
	),
	state : $client->updates->state(
		pts : 29,
		qts : 96,
		date : 51,
		seq : 41,
		unread_count : 42,
	),
);
```