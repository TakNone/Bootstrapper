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
			id : 41,
			peer_id : $client->peerUser(
				user_id : 4711961158354224889,
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
			id : 54,
			from_id : $client->peerUser(
				user_id : -5751880152823733147,
			),
			from_boosts_applied : 49,
			peer_id : $client->peerUser(
				user_id : 435833980561547882,
			),
			saved_peer_id : $client->peerUser(
				user_id : -4073988250841131874,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 4660208992458278967,
				),
				from_name : 'Plq2MxeAJoWc5S6F',
				date : 10,
				channel_post : 33,
				post_author : 'QPHlYVFy1BTe80mz',
				saved_from_peer : $client->peerUser(
					user_id : -7156675040373890157,
				),
				saved_from_msg_id : 81,
				saved_from_id : $client->peerUser(
					user_id : 2081151870502258894,
				),
				saved_from_name : 'WadbRp5qtUTzwJs0',
				saved_date : 41,
				psa_type : 'CSipyxIGLUd4Ntv1',
			),
			via_bot_id : 1990736394630298669,
			via_business_bot_id : 8741876919841650791,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 23,
				reply_to_peer_id : $client->peerUser(
					user_id : 6438058219618688033,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'uc8oAhKNqD2F6za4',
					date : 23,
					channel_post : 54,
					post_author : 'Cnbhm4cgF6yW0sOE',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 85,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'z6IDm9nb8FV0Zo3M',
					saved_date : 1,
					psa_type : 'jatvFTC8QKRSkHLW',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 47,
				quote_text : '60LBwpvrEUW1mIkx',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 56,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 19,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 16,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 45,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 56,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 90,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 69,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 95,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 80,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 64,
						language : 'mZaksFxIOqpJ6Kgw',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 4,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 11,
						user_id : -9136300995616551015,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 49,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 51,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 91,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 47,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 21,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 11,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 73,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 76,
						document_id : 7549357838205625238,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 46,
					),
				),
				quote_offset : 82,
				todo_item_id : 61,
			),
			date : 52,
			message : 'ngYc2z5UmyRKAhdV',
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
					length : 35,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 80,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 61,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 26,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 19,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 17,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 48,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 49,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 15,
					language : 'JZYuydLKg5rPCj0m',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 60,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 92,
					user_id : -1675538157746283333,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 24,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 2,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 20,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 85,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 41,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 75,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 90,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 18,
					document_id : -7884646808672266403,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 98,
				),
			),
			views : 2,
			forwards : 81,
			replies : $client->messageReplies(
				comments : true,
				replies : 53,
				replies_pts : 71,
				recent_repliers : array(
					$client->peerUser(
						user_id : -4459442672257024559,
					),
					$client->peerChat(
						chat_id : 1504789480116729494,
					),
					$client->peerChannel(
						channel_id : -2846825477622298287,
					),
				),
				channel_id : 7121408569032855399,
				max_id : 8,
				read_max_id : 8,
			),
			edit_date : 97,
			post_author : 'hNB19KSRMAVbLwo8',
			grouped_id : 7595458654348269775,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 94,
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
						count : 51,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'BwAJ0kTWSUD2EmVr',
					reason : 'RigxFQeTDMjc3l6n',
					text : '308YbxJKslOqvrXo',
				),
			),
			ttl_period : 72,
			quick_reply_shortcut_id : 43,
			effect : 1082392114897288682,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'CY9keNE5ofwVDO3c',
				text : $client->textWithEntities(
					text : 'dXhqsLl2AKOzZ5WR',
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
			paid_message_stars : -1583668575395722143,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 2726591814003809560,
					nanos : 70,
				),
				schedule_date : 72,
			),
			schedule_repeat_period : 56,
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
				user_id : 8113354312290309785,
			),
			peer_id : $client->peerUser(
				user_id : -3268777416155006448,
			),
			saved_peer_id : $client->peerUser(
				user_id : 1866862915143133478,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 57,
				reply_to_peer_id : $client->peerUser(
					user_id : -8441041381812424458,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'pao5FnICXwH4KeJu',
					date : 83,
					channel_post : 88,
					post_author : 'N5ZCUiAsO9HSQaq2',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 22,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'g9jpobiYSQ5JOKv1',
					saved_date : 20,
					psa_type : 'D0ra9pfGIkSlKjn5',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 76,
				quote_text : 'liLwZsR5o7e6ASzp',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 85,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 74,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 98,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 92,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 23,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 18,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 53,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 46,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 49,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 14,
						language : 'tdeGspRgyc5SArjF',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 83,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 79,
						user_id : 4495340611596867140,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 91,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 62,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 24,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 38,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 30,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 0,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 14,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 32,
						document_id : -519377988027053473,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 24,
					),
				),
				quote_offset : 24,
				todo_item_id : 26,
			),
			date : 15,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 0,
						reaction : $client->reactionEmpty(...),
						count : 18,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 95,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 20,
					),
				),
			),
			ttl_period : 79,
		),
	),
	new_encrypted_messages : array(
		$client->encryptedMessage(
			random_id : 5433340759924615112,
			chat_id : 84,
			date : 9,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			file : $client->encryptedFileEmpty(),
		),
		$client->encryptedMessageService(
			random_id : -6421638580878415951,
			chat_id : 66,
			date : 0,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 48,
				peer_id : $client->peerUser(
					user_id : -3421991169135252410,
				),
			),
			pts : 40,
			pts_count : 57,
		),
		$client->updateMessageID(
			id : 57,
			random_id : 6392277618821589968,
		),
		$client->updateDeleteMessages(
			messages : array(21),
			pts : 95,
			pts_count : 88,
		),
		$client->updateUserTyping(
			user_id : 8184888209395343539,
			top_msg_id : 25,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 5663736470825257274,
			from_id : $client->peerUser(
				user_id : -8413980339680760820,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -1717677234380100197,
				self_participant : $client->chatParticipant(
					user_id : 3540322545175643895,
					inviter_id : 1387974883978952270,
					date : 85,
				),
			),
		),
		$client->updateUserStatus(
			user_id : -1935092614769252355,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -7726335702112172670,
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
			date : 44,
			device : 'hu2D1OLWGmyRjeYo',
			location : 'OTCKjD6AycqV3R28',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 656740950860939466,
				chat_id : 91,
				date : 63,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 63,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 91,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 55,
			),
			date : 21,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 73,
			max_date : 52,
			date : 49,
		),
		$client->updateChatParticipantAdd(
			chat_id : 5605092900586961898,
			user_id : -5849599791312236300,
			inviter_id : 1849614556325306228,
			date : 78,
			version : 40,
		),
		$client->updateChatParticipantDelete(
			chat_id : -8037223831221723420,
			user_id : -5377708875989580054,
			version : 9,
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
					id : 59,
					ip_address : '127.0.0.1',
					port : 60,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : -6705400098938396252,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : true,
				mute_until : 37,
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
			inbox_date : 77,
			type : 'xuLbhaS4eI9wAXsH',
			message : 'z68Z59WSYb3yvJso',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 6,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 8,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 10,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 7,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 99,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 14,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 55,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 100,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 44,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 58,
					language : 'IK9iwVDNPLXBxb8v',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 95,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 97,
					user_id : 6220078358720079237,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 20,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 41,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 12,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 23,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 76,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 82,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 83,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 41,
					document_id : -7001598544381348595,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 4,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(436704608036718952),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-4522303468356442399),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-2449759632144988611),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(3095437372722400461),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -4669117102008925482,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 46,
			peer : $client->peerUser(
				user_id : -4416628138613671544,
			),
			top_msg_id : 94,
			max_id : 12,
			still_unread_count : 7,
			pts : 85,
			pts_count : 87,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 1606135495198096260,
			),
			max_id : 20,
			pts : 68,
			pts_count : 55,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 5644864714439987246,
				url : 'https://docs.liveproto.dev',
			),
			pts : 24,
			pts_count : 40,
		),
		$client->updateReadMessagesContents(
			messages : array(68),
			pts : 44,
			pts_count : 89,
			date : 23,
		),
		$client->updateChannelTooLong(
			channel_id : -4777883257710848158,
			pts : 34,
		),
		$client->updateChannel(
			channel_id : -3486407139489287523,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 8,
				peer_id : $client->peerUser(
					user_id : -1056008955624357150,
				),
			),
			pts : 39,
			pts_count : 14,
		),
		$client->updateReadChannelInbox(
			folder_id : 14,
			channel_id : 1006130270712911903,
			max_id : 31,
			still_unread_count : 40,
			pts : 14,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -2699561965647505386,
			messages : array(67),
			pts : 97,
			pts_count : 22,
		),
		$client->updateChannelMessageViews(
			channel_id : -4611348334140440369,
			id : 83,
			views : 66,
		),
		$client->updateChatParticipantAdmin(
			chat_id : -1977374499858740954,
			user_id : -2297620662887034534,
			is_admin : true,
			version : 14,
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
					installed_date : 28,
					id : 5149555693513787023,
					access_hash : -7580504366479813427,
					title : 'AIYvtMDhuQgqHdwl',
					short_name : 'iYAcdlOCjzXpa6NZ',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 4,
					thumb_version : 31,
					thumb_document_id : 9214904475478490877,
					count : 77,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'rXNDEWFjqJ634KwR',
						documents : array(7430127779502036783),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : 8272796282335891858,
						keyword : array('pRcAJgnsfDP0NZbu'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : -2729921019789999238,
					),
					$client->document(
						id : -6487506374025873779,
						access_hash : -3101568462966666187,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 60,
						mime_type : 'ntDcjB3dl1ARVkUT',
						size : 8476084316673485017,
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
						dc_id : 25,
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
			order : array(3223325610905059251),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -3485888717541770562,
			user_id : -8894486307996004859,
			query : 'UO0SA4Dt8YoZ9m3W',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'lVnGaL9Q6XU1C0pT',
		),
		$client->updateBotInlineSend(
			user_id : -7930516570455747311,
			query : 'NLocPqMWG1sBQZ2i',
			geo : $client->geoPointEmpty(),
			id : 'ReQLgnN52kITBwas',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 60,
				id : 2950698783818019329,
				access_hash : -4446847228693181077,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 69,
				peer_id : $client->peerUser(
					user_id : -5118910277791222636,
				),
			),
			pts : 78,
			pts_count : 77,
		),
		$client->updateBotCallbackQuery(
			query_id : -2348041388875454480,
			user_id : -934099563451531094,
			peer : $client->peerUser(
				user_id : 8512239651091026329,
			),
			msg_id : 9,
			chat_instance : -5207008606963181997,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'jrk1poT0EPUabYNL',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 5,
				peer_id : $client->peerUser(
					user_id : -6447586428643292936,
				),
			),
			pts : 10,
			pts_count : 99,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 6743055048511287388,
			user_id : -2764412569435052331,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 56,
				id : 8928673522786174573,
				access_hash : -3419697560864875325,
			),
			chat_instance : 2296854108274807279,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'sfoPQK1kndAZCl2a',
		),
		$client->updateReadChannelOutbox(
			channel_id : 8785160718397233345,
			max_id : 8,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 8947618532210520681,
			),
			top_msg_id : 63,
			saved_peer_id : $client->peerUser(
				user_id : 1327281935224016826,
			),
			draft : $client->draftMessageEmpty(
				date : 29,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 7215289153098849771,
			webpage : $client->webPageEmpty(
				id : -9025278566055281157,
				url : 'https://docs.liveproto.dev',
			),
			pts : 99,
			pts_count : 92,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 64,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 1504872986730550366,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 31,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -4035540859660650258,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 39,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'bqcpHQYFCBRNTkZO',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -4912740021831566372,
			data : $client->dataJSON(
				data : 'Pi5lz1m9vtLs8eFp',
			),
			timeout : 25,
		),
		$client->updateBotShippingQuery(
			query_id : 7624057998417121664,
			user_id : -8919240942142716821,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : '2HP71bIyRNxpvsh6',
				street_line2 : '1wmPKVuDMdsHbQeX',
				city : 'MNGyD05bzc9Fes61',
				state : 'g4WVfK9ZCukBL8a5',
				country_iso2 : 'hOHD5Z17wAmgxUsN',
				post_code : 'vbF5EHWGCa7nomfT',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -740968081809893820,
			user_id : -1752171415850645159,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : '8iV6Qmr1Gs5FztTD',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : '8RWH37GPJKIt1DS6',
					street_line2 : '9C5jOYeZaNb3oK0M',
					city : 'WbURtgfze6jJAVwC',
					state : 'N4RJAv0hQcItVxus',
					country_iso2 : 'yEWfSaLxrcdw1Qge',
					post_code : 'jvbHtukq5hCKLdDy',
				),
			),
			shipping_option_id : 'RQqtaBjhkAE4ufe0',
			currency : 'IclbCijvktSYfXoU',
			total_amount : -2860922143567407863,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 486272377033387961,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'sE6bMfUvriuSVDJg',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'SDmZagdKY8izEbLe',
				from_version : 51,
				version : 30,
				strings : array(
					$client->langPackString(
						key : 'zyQEPY06X2KfB1To',
						value : 'wQkiYSeLto6EbKFH',
					),
					$client->langPackStringPluralized(
						key : 'PEb0XtMqlSRogN7K',
						zero_value : 'dUB9K83xnNAIkFiG',
						one_value : 'YNk2bGXKySA0FQvB',
						two_value : 'YojeuOWS26Hwdkgt',
						few_value : 'u7NA1XWCHthznvTS',
						many_value : 'LuA2XVYPtf0rhozH',
						other_value : '5dsfLqYT8mxp1gAS',
					),
					$client->langPackStringDeleted(
						key : 'fj51eYoc0VQxhkFs',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 3711843476652687600,
			top_msg_id : 64,
			saved_peer_id : $client->peerUser(
				user_id : -1631086504115570132,
			),
			messages : array(40),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 1169401270601055539,
			available_min_id : 67,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 2624517705130911076,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : 4333001597978082284,
			),
		),
		$client->updateMessagePoll(
			poll_id : -738371720928920061,
			poll : $client->poll(
				id : -6525435093487412572,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : '0n2FTBu7hqyIGjo5',
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
				close_period : 92,
				close_date : 33,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 58,
					),
				),
				total_voters : 94,
				recent_voters : array(
					$client->peerUser(
						user_id : 6226535510504718883,
					),
					$client->peerChat(
						chat_id : -7775180218631170818,
					),
					$client->peerChannel(
						channel_id : 8898711281539623839,
					),
				),
				solution : 'SbNpm64DMWnZodPj',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 12,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 76,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 57,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 86,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 65,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 53,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 82,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 20,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 66,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 7,
						language : 'egkOAzT5cIQH4Sm2',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 27,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 55,
						user_id : 1572514031993138548,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 34,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 11,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 37,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 73,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 42,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 69,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 91,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 31,
						document_id : -7183992223753131619,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 79,
					),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 1975026685345678643,
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
			version : 38,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : -3555848508003493080,
					),
					folder_id : 30,
				),
			),
			pts : 89,
			pts_count : 98,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -1048502134273592011,
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
				geo_distance : 71,
				request_chat_title : 'fdY5KJpLHboCOhT9',
				request_chat_date : 90,
				business_bot_id : 8334905445079915705,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 153752147819425781,
				registration_month : 'BDva4KORc3fJeUbu',
				phone_country : '+1234567890',
				name_change_date : 50,
				photo_change_date : 11,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : 8004708266334196874,
					),
					expires : 41,
					distance : 12,
				),
				$client->peerSelfLocated(
					expires : 37,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 87,
				peer_id : $client->peerUser(
					user_id : 8264053592556186838,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -3351824700083495573,
			),
			messages : array(51),
			sent_messages : array(45),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -6903629352684448759,
				access_hash : 8617727424214883935,
				slug : 'xIqY0bDPGhrEHXem',
				title : 'nWsc5a8Vjv69pfCX',
				document : $client->documentEmpty(
					id : 2793893856393295465,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 94,
						outbox_accent_color : 60,
						message_colors : array(73),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'XKRS9BW8hC4JUbjD',
				installs_count : 90,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -8983027496669226041,
			),
			msg_id : 35,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -8896167094896654741,
			peer : $client->peerUser(
				user_id : -479015586566918966,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 38,
		),
		$client->updateDialogFilter(
			id : 35,
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
					text : 'Eq8RIpAyOwWdCZ1P',
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
				emoticon : 'UHK5q3mwgrb7fEz8',
				color : 69,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(17),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -7426983337865075790,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -2501104475062314526,
			id : 33,
			forwards : 71,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -6088977450434190244,
			top_msg_id : 43,
			read_max_id : 17,
			broadcast_id : 6412898049255542835,
			broadcast_post : 12,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -5040112505201090556,
			top_msg_id : 12,
			read_max_id : 39,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 6219763210292775914,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : 7960073544675287653,
			top_msg_id : 0,
			from_id : $client->peerUser(
				user_id : -5619646411261308794,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -1181921256935468183,
			),
			messages : array(95),
			pts : 7,
			pts_count : 32,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -8576244549963712324,
			messages : array(0),
			pts : 50,
			pts_count : 31,
		),
		$client->updateChat(
			chat_id : -2773742675414997390,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -5231521791612145457,
				access_hash : 5646655017798818555,
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
						user_id : -6804936810609892380,
					),
					date : 21,
					active_date : 65,
					source : 80,
					volume : 96,
					about : 'yBzXKwOxHqTh7eaS',
					raise_hand_rating : -7367766603912688908,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'YJQXpUAPvOe59m0Z',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 99,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'XjKsIu7EmflFLUC0',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 25,
					),
					paid_stars_total : -1719705646507104879,
				),
			),
			version : 8,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : 528257549481258504,
			),
			call : $client->groupCallDiscarded(
				id : -481030690010618803,
				access_hash : -1141975020555006537,
				duration : 98,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 7511089612746891162,
			),
			ttl_period : 2,
		),
		$client->updateChatParticipant(
			chat_id : 784456922741038459,
			date : 21,
			actor_id : 5004824071098531394,
			user_id : -3564930757945471839,
			prev_participant : $client->chatParticipant(
				user_id : -3433400837628383612,
				inviter_id : -7058113089279780002,
				date : 88,
			),
			new_participant : $client->chatParticipant(
				user_id : -3021090528439446331,
				inviter_id : 2183349955792945024,
				date : 19,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'vN7oh1pKieT6kLy9',
				admin_id : 6935857775458524343,
				date : 13,
				start_date : 76,
				expire_date : 92,
				usage_limit : 69,
				usage : 10,
				requested : 98,
				subscription_expired : 88,
				title : 'yS6urnFUlBJT1hmi',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 59,
					amount : -4797947568648697599,
				),
			),
			qts : 64,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -738405098057904624,
			date : 13,
			actor_id : 2132306553700740587,
			user_id : 8071902014505715110,
			prev_participant : $client->channelParticipant(
				user_id : 3454340300219805500,
				date : 83,
				subscription_until_date : 16,
			),
			new_participant : $client->channelParticipant(
				user_id : -6666091592509959740,
				date : 11,
				subscription_until_date : 46,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'I5h7DgM9SjmTCUR1',
				admin_id : 8775196981178083495,
				date : 51,
				start_date : 65,
				expire_date : 31,
				usage_limit : 39,
				usage : 52,
				requested : 48,
				subscription_expired : 36,
				title : 'vcWz7NhM64ilg1nC',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 70,
					amount : 7253634713930206234,
				),
			),
			qts : 16,
		),
		$client->updateBotStopped(
			user_id : 3320404788384996228,
			date : 2,
			stopped : true,
			qts : 26,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'd81ZexJLvbG3MKum',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -1979933856840941139,
			),
			bot_id : 5655475626698361155,
			commands : array(
				$client->botCommand(
					command : 'oAdgweyYGzPNiTZV',
					description : 'z7IS8RxCvNjP4BVp',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -2956253586904781902,
			),
			requests_pending : 31,
			recent_requesters : array(804889294623509555),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -7828455207628388546,
			),
			date : 40,
			user_id : -1449526463062220625,
			about : '5gNWvRsUm1MD3Akn',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'sz0YLEW1uClDnx76',
				admin_id : 5840734641358797627,
				date : 18,
				start_date : 1,
				expire_date : 86,
				usage_limit : 3,
				usage : 81,
				requested : 94,
				subscription_expired : 95,
				title : 'BcuQLvRrTp9MN07W',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 3,
					amount : 9001206118497659997,
				),
			),
			qts : 81,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 5072714462565457706,
			),
			msg_id : 42,
			top_msg_id : 29,
			saved_peer_id : $client->peerUser(
				user_id : 3364106039490948204,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 45,
						reaction : $client->reactionEmpty(...),
						count : 37,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 66,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 16,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 7939297778387270092,
		),
		$client->updateBotMenuButton(
			bot_id : 5130071040860783557,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 4998326522441663798,
			),
			msg_id : 33,
			transcription_id : -914151864160938763,
			text : 'FibBwTLIgmX3GsYx',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -3253662511833115209,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -7810353626122605066,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 6597006588874701200,
			),
			msg_id : 17,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 15,
					h : 59,
					thumb : $client->photoSizeEmpty(
						type : '6OXeBIZ21pcq9YnP',
					),
					video_duration : 63,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : 4830026971523104466,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 2215374599500974983,
			),
			story : $client->storyItemDeleted(
				id : 26,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : 5455910769448784240,
			),
			max_id : 7,
		),
		$client->updateStoryID(
			id : 52,
			random_id : 3804283917079100215,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 92,
				cooldown_until_date : 11,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -3570755097268122172,
			),
			story_id : 77,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 6239195864784373074,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : '7SxnRXfoHK6MCUQl',
				user_id : 1622936629939236649,
				giveaway_msg_id : 68,
				date : 84,
				expires : 26,
				used_gift_slug : 'OoL1J3thWFQHG2eq',
				multiplier : 97,
				stars : -2313946346851335594,
			),
			qts : 25,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -159492960045684364,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 2753721136335568126,
			),
			wallpaper : $client->wallPaper(
				id : 8355499551892688980,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -2267174472499054025,
				slug : '0BEgHTDGSlNOFsxq',
				document : $client->documentEmpty(
					id : 5667125655144943659,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 60,
					second_background_color : 19,
					third_background_color : 57,
					fourth_background_color : 25,
					intensity : 80,
					rotation : 94,
					emoticon : 'RMHG3IhSDZny0w4s',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -1549270517387534872,
			),
			msg_id : 68,
			date : 89,
			actor : $client->peerUser(
				user_id : 1718992425402356911,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'r98A6Iw2B1kdjCeH',
				),
				$client->reactionCustomEmoji(
					document_id : -48354212901135957,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'HfTKZXNoyjASbW3L',
				),
				$client->reactionCustomEmoji(
					document_id : -7740925748009309004,
				),
				$client->reactionPaid(),
			),
			qts : 90,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 4133274785279473940,
			),
			msg_id : 5,
			date : 95,
			reactions : array(
				$client->reactionCount(
					chosen_order : 72,
					reaction : $client->reactionEmpty(),
					count : 45,
				),
			),
			qts : 91,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 5871709560672563334,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -1443244738237998782,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 75,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'K10MkaPqXdIcfl47',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 40,
					shortcut : 'QRPYhDZFkt7uEaNm',
					top_message : 84,
					count : 56,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 60,
				shortcut : 'DMlAprGXwSZ3OzHy',
				top_message : 58,
				count : 84,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 93,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 46,
				peer_id : $client->peerUser(
					user_id : 3943357729731772053,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 15,
			messages : array(47),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'C4fDBLxaog9FXcSR',
				user_id : 6166437666494369774,
				dc_id : 48,
				date : 50,
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
			qts : 74,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'HRbSN5ZUPnYhwflM',
			message : $client->messageEmpty(
				id : 66,
				peer_id : $client->peerUser(
					user_id : -3295471336665090890,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 6,
				peer_id : $client->peerUser(
					user_id : -879672590670973471,
				),
			),
			qts : 37,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'yincY7t64ZDK5uQ1',
			message : $client->messageEmpty(
				id : 65,
				peer_id : $client->peerUser(
					user_id : 7477260202699438623,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 0,
				peer_id : $client->peerUser(
					user_id : -9058171182650593249,
				),
			),
			qts : 84,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'zoWS3vjwPVeGrymX',
			peer : $client->peerUser(
				user_id : 3455161308522020429,
			),
			messages : array(13),
			qts : 9,
		),
		$client->updateNewStoryReaction(
			story_id : 26,
			peer : $client->peerUser(
				user_id : 3145658916588174529,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 2867713466539004093,
				nanos : 57,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -589974331038977364,
			user_id : 3327323356856353921,
			connection_id : 'ZIFcWPm3oRU0HY8u',
			message : $client->messageEmpty(
				id : 77,
				peer_id : $client->peerUser(
					user_id : 5081172024500019893,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 98,
				peer_id : $client->peerUser(
					user_id : -5282875588694845150,
				),
			),
			chat_instance : -4533754226051595058,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 1824173975371230804,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : -7354760069003176927,
					nanos : 36,
				),
				available_balance : $client->starsAmount(
					amount : -1466820011573115139,
					nanos : 53,
				),
				overall_revenue : $client->starsAmount(
					amount : -1032929725358484982,
					nanos : 25,
				),
				next_withdrawal_at : 19,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 3494939417870904655,
			payload : 'yhmbo2Zzs0vXJnKt',
			qts : 46,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 39,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 73,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -1251698126692241182,
				access_hash : -8170912276124604517,
			),
			sub_chain_id : 62,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 24,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 4422284158576170737,
			saved_peer_id : $client->peerUser(
				user_id : 8384768121278130411,
			),
			read_max_id : 38,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -7565938662848399112,
			saved_peer_id : $client->peerUser(
				user_id : 5521296840531936183,
			),
			read_max_id : 2,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 2865854610115130849,
			saved_peer_id : $client->peerUser(
				user_id : -5105798391545932671,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : 4919831482755039993,
				access_hash : -1107070281541803634,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 56,
				from_id : $client->peerUser(
					user_id : -949391844788407341,
				),
				date : 91,
				message : $client->textWithEntities(
					text : '3ohFEq4JDw1yaplR',
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
				paid_message_stars : 910470551683812714,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : -7381772118283649986,
				access_hash : 6729492035535397443,
			),
			from_id : $client->peerUser(
				user_id : 1320783144896691117,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : -1244115442468093418,
			),
			topic_id : 80,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : 5583837727043689534,
			),
			order : array(61),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : -1819138267671439639,
				access_hash : 8959967814923391434,
			),
			messages : array(15),
		),
		$client->updateStarGiftAuctionState(
			gift_id : 6750005424876503537,
			state : $client->starGiftAuctionState(
				version : 17,
				start_date : 76,
				end_date : 61,
				min_bid_amount : 2363979509068946454,
				bid_levels : array(
					$client->auctionBidLevel(
						pos : 32,
						amount : -983512480673889190,
						date : 18,
					),
				),
				top_bidders : array(6833911812588268771),
				next_round_at : 59,
				gifts_left : 26,
				current_round : 22,
				total_rounds : 4,
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : 3928634746277088104,
			text : 'cYD73wAy4j0KsgFO',
		),
		$client->updateBotSubscriptionExpire(
			user_id : 7140134732009770182,
			payload : 'YBxtH5FGVXkQTecu',
			until_date : 93,
			qts : 36,
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : 8657952038773033139,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : -6423355405025678900,
				bid_date : 77,
				min_bid_amount : 9000295520253721041,
				peer : $client->peerUser(
					user_id : -195268572027952434,
				),
				acquired_count : 7,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -3808914211979712573,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -7505468582693288006,
			title : 'Yd3zoXIvt28ZWSRD',
			photo : $client->chatPhotoEmpty(),
			participants_count : 95,
			date : 62,
			version : 0,
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
				until_date : 67,
			),
		),
		$client->chatForbidden(
			id : 3136183180591525461,
			title : 'elSJWGcQHAT7EmoV',
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
			id : 7109795513554645810,
			access_hash : -4169502118148598466,
			title : 'qvH5jeklywTd2cNR',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 41,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'TCnyJL7Kijx1ramo',
					reason : '6e7puCFWMOR2NtDh',
					text : 'uRTKxDIrqnwbPLGd',
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
				until_date : 49,
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
				until_date : 45,
			),
			participants_count : 19,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 47,
			),
			color : $client->peerColor(
				color : 40,
				background_emoji_id : 9020644811669635502,
			),
			profile_color : $client->peerColor(
				color : 4,
				background_emoji_id : -514908763421510596,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 100,
			subscription_until_date : 32,
			bot_verification_icon : 1533642379874827254,
			send_paid_messages_stars : -7321131487424555457,
			linked_monoforum_id : -202758611832629070,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -5376942196015420128,
			access_hash : -8893964750185297048,
			title : 'K4XtRbsTicGYCBwE',
			until_date : 98,
		),
	),
	users : array(
		$client->userEmpty(
			id : -5901103220885909610,
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
			id : 2376035119470556265,
			access_hash : -4835987727558370136,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 59,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '8M7eHh0szTmvLEtx',
					reason : 'Dpx3aej8czO4Btms',
					text : 'Ryk2gqsDeZ8L7j6f',
				),
			),
			bot_inline_placeholder : '8h2itVklueHWgXS6',
			lang_code : 'X5pErK4waSvNHWO9',
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
				max_id : 33,
			),
			color : $client->peerColor(
				color : 4,
				background_emoji_id : -615273000185093556,
			),
			profile_color : $client->peerColor(
				color : 68,
				background_emoji_id : 9126989437448160292,
			),
			bot_active_users : 35,
			bot_verification_icon : -5423864011334431536,
			send_paid_messages_stars : 8314977046375434574,
		),
	),
	state : $client->updates->state(
		pts : 66,
		qts : 75,
		date : 70,
		seq : 53,
		unread_count : 43,
	),
);
```