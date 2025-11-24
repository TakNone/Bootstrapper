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
			id : 1,
			peer_id : $client->peerUser(
				user_id : -7068076360565730634,
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
				user_id : 2497743097203216704,
			),
			from_boosts_applied : 20,
			peer_id : $client->peerUser(
				user_id : -4198344132059480761,
			),
			saved_peer_id : $client->peerUser(
				user_id : 8534226669012968557,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 8675332263699629404,
				),
				from_name : 'wnclPA6bNSaOW81e',
				date : 13,
				channel_post : 51,
				post_author : 'JsHIdf8iR4zXCxEQ',
				saved_from_peer : $client->peerUser(
					user_id : 881744006108677349,
				),
				saved_from_msg_id : 88,
				saved_from_id : $client->peerUser(
					user_id : 1405306175151878830,
				),
				saved_from_name : 'IpsG20mNBYUk6f4D',
				saved_date : 12,
				psa_type : 'VfXTsvYqSPailgxm',
			),
			via_bot_id : 7571381703892679494,
			via_business_bot_id : 4737012795308717642,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 71,
				reply_to_peer_id : $client->peerUser(
					user_id : 3813666260224570766,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '51dZMIp46G72VPbl',
					date : 85,
					channel_post : 25,
					post_author : 'Zrw6MKexbpsyBEPT',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 43,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'aYzKywUeMchirSEm',
					saved_date : 1,
					psa_type : '6v8kcJIzMWBt2Yj1',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 36,
				quote_text : '5gFmeI9wq6EAMRob',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 82,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 12,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 90,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 45,
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
						length : 28,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 76,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 47,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 86,
						language : 'HMtRpfw5Uh9oqVDu',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 43,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 12,
						user_id : -6706480407830725742,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 5,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 25,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 98,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 30,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 27,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 87,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 44,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 25,
						document_id : 3972655167663771984,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 59,
					),
				),
				quote_offset : 86,
				todo_item_id : 60,
			),
			date : 57,
			message : 'ZQCpsaGrxq6k3jhn',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 72,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 34,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 63,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 30,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 96,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 73,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 43,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 72,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 39,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 98,
					language : 'FNHpvtKgobERWAV9',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 95,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 58,
					user_id : -2779314275271362381,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 63,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 75,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 12,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 57,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 39,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 34,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 66,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 50,
					document_id : -5258324379000461748,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 2,
				),
			),
			views : 20,
			forwards : 63,
			replies : $client->messageReplies(
				comments : true,
				replies : 2,
				replies_pts : 24,
				recent_repliers : array(
					$client->peerUser(
						user_id : 4141281137331728297,
					),
					$client->peerChat(
						chat_id : -2963384159500442628,
					),
					$client->peerChannel(
						channel_id : 1132658304874095807,
					),
				),
				channel_id : -7363511760020184534,
				max_id : 10,
				read_max_id : 20,
			),
			edit_date : 79,
			post_author : 'FZ0gvsoajn7cYTdM',
			grouped_id : -4396762672517511440,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 13,
						reaction : $client->reactionEmpty(...),
						count : 73,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 40,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 2,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ysoArBNtqIeKbT0Q',
					reason : 'QXnsPjDgHUWyS1mV',
					text : 'yCdfc1A5TR6oqIVM',
				),
			),
			ttl_period : 10,
			quick_reply_shortcut_id : 63,
			effect : -142154690758477831,
			factcheck : $client->factCheck(
				need_check : true,
				country : '3xNZCYR9e0v5Sdiw',
				text : $client->textWithEntities(
					text : 's1Dgdi6PVLG2w8rn',
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
			report_delivery_until_date : 43,
			paid_message_stars : 628914065260897226,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -6177973300301419645,
					nanos : 86,
				),
				schedule_date : 100,
			),
			schedule_repeat_period : 87,
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
				user_id : -4022938761177482771,
			),
			peer_id : $client->peerUser(
				user_id : -7492858717034069397,
			),
			saved_peer_id : $client->peerUser(
				user_id : -3002379844989106999,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 84,
				reply_to_peer_id : $client->peerUser(
					user_id : -2838560380333167815,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'fdO4KQuB0F2YpsZ6',
					date : 52,
					channel_post : 9,
					post_author : '3CnfAV1YIpqhaRFP',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 57,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'TZuMBS4wxaKm9pDH',
					saved_date : 59,
					psa_type : 'Nz7XySRlQwrf9WKu',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 52,
				quote_text : 'HncUjST8p5qkJolh',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 16,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 98,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 74,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 6,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 59,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 11,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 51,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 71,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 16,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 28,
						language : 'XZqI1kRxUEmlHVcS',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 30,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 43,
						user_id : 5360545024642858986,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 18,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 74,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 14,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 50,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 43,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 36,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 12,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 16,
						document_id : 1747996292192424154,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 22,
					),
				),
				quote_offset : 11,
				todo_item_id : 95,
			),
			date : 76,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 1,
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
						date : 31,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 46,
					),
				),
			),
			ttl_period : 71,
		),
	),
	new_encrypted_messages : array(
		$client->encryptedMessage(
			random_id : 6009975082179233592,
			chat_id : 75,
			date : 83,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			file : $client->encryptedFileEmpty(),
		),
		$client->encryptedMessageService(
			random_id : -385480476618174802,
			chat_id : 97,
			date : 79,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 31,
				peer_id : $client->peerUser(
					user_id : -839515998827844536,
				),
			),
			pts : 28,
			pts_count : 73,
		),
		$client->updateMessageID(
			id : 25,
			random_id : 7417157530266114341,
		),
		$client->updateDeleteMessages(
			messages : array(34),
			pts : 35,
			pts_count : 60,
		),
		$client->updateUserTyping(
			user_id : -2547579132964306403,
			top_msg_id : 29,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -7149037158076310215,
			from_id : $client->peerUser(
				user_id : 3614861734035523769,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 155910880636157848,
				self_participant : $client->chatParticipant(
					user_id : -1963860083403362861,
					inviter_id : -164059552214871570,
					date : 38,
				),
			),
		),
		$client->updateUserStatus(
			user_id : 607782037620522280,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -7164988765236531425,
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
			date : 51,
			device : 'xNH6tJk1ODB0YXES',
			location : '7HGZkU5LEnAi4R8l',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 5506497141926416889,
				chat_id : 11,
				date : 40,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 55,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 62,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 66,
			),
			date : 85,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 57,
			max_date : 96,
			date : 40,
		),
		$client->updateChatParticipantAdd(
			chat_id : -5543155493721620528,
			user_id : 6562625262762038879,
			inviter_id : -4571832357514890470,
			date : 30,
			version : 74,
		),
		$client->updateChatParticipantDelete(
			chat_id : 5370839776968635657,
			user_id : -4372861929303881537,
			version : 55,
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
					id : 48,
					ip_address : '127.0.0.1',
					port : 5,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : 1937296523602537546,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : true,
				mute_until : 42,
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
			inbox_date : 8,
			type : 'IwdEq46zQVaKF7O9',
			message : '05PTLBF8poZlDSyV',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 100,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 61,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 0,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 71,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 27,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 82,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 41,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 98,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 96,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 88,
					language : 'Jm4wSGxXh3DUpqzL',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 6,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 37,
					user_id : -3956267257756817364,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 45,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 35,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 82,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 1,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 49,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 20,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 21,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 32,
					document_id : -455443333190844127,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 64,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-6260238893690152690),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-29013215932828199),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-6198182677585509653),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(7674231398240872825),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 2260587354194889769,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 25,
			peer : $client->peerUser(
				user_id : 8052198690908282427,
			),
			top_msg_id : 74,
			max_id : 22,
			still_unread_count : 80,
			pts : 64,
			pts_count : 60,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 3771191776764305383,
			),
			max_id : 97,
			pts : 1,
			pts_count : 13,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -355782593134071355,
				url : 'https://docs.liveproto.dev',
			),
			pts : 79,
			pts_count : 74,
		),
		$client->updateReadMessagesContents(
			messages : array(61),
			pts : 22,
			pts_count : 66,
			date : 1,
		),
		$client->updateChannelTooLong(
			channel_id : -3573241553342055570,
			pts : 0,
		),
		$client->updateChannel(
			channel_id : 6622606080435418330,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 72,
				peer_id : $client->peerUser(
					user_id : -6320699746597345284,
				),
			),
			pts : 86,
			pts_count : 82,
		),
		$client->updateReadChannelInbox(
			folder_id : 52,
			channel_id : 8079629481569152461,
			max_id : 52,
			still_unread_count : 71,
			pts : 29,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -2663792729604533688,
			messages : array(89),
			pts : 0,
			pts_count : 50,
		),
		$client->updateChannelMessageViews(
			channel_id : 1878569508215830613,
			id : 94,
			views : 52,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 7593325695999084950,
			user_id : 7826986129425432497,
			is_admin : false,
			version : 64,
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
					installed_date : 27,
					id : -1470219208861610648,
					access_hash : -1955975252462221435,
					title : 'kUJn80DxXr9SEtAC',
					short_name : 'eTqBZF4NvRhM2CdE',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 88,
					thumb_version : 70,
					thumb_document_id : 9000644248680345629,
					count : 76,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'zVaI1reiLy7KnWgU',
						documents : array(-178300802205960663),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : -4255766755731681951,
						keyword : array('BHjSPgEFzWqZp1TN'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : 1174161679747721488,
					),
					$client->document(
						id : 2427191211130872172,
						access_hash : 2652669273415956024,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 17,
						mime_type : 'A96jsr05lyv1nkSa',
						size : 5106244972041205883,
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
						dc_id : 11,
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
			order : array(5949340798068310000),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 3010930733036504431,
			user_id : 3768989329501278433,
			query : 'RY9zrVkogtyKwUuJ',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'lTDMiJQorXYvausO',
		),
		$client->updateBotInlineSend(
			user_id : -8115941088147221490,
			query : 'PGWA10Kl39ZgJOfi',
			geo : $client->geoPointEmpty(),
			id : 'ePtwaygfJlY92BE1',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 13,
				id : -4739146926861672953,
				access_hash : 1703233359311257552,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 79,
				peer_id : $client->peerUser(
					user_id : 6205742175379085727,
				),
			),
			pts : 20,
			pts_count : 5,
		),
		$client->updateBotCallbackQuery(
			query_id : -3085068050661110118,
			user_id : 8515455643538491808,
			peer : $client->peerUser(
				user_id : 7812343209286296882,
			),
			msg_id : 40,
			chat_instance : 1306674588001574605,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : '7Otuhs0mCJIkzfoi',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 29,
				peer_id : $client->peerUser(
					user_id : -5055847062729344056,
				),
			),
			pts : 73,
			pts_count : 30,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -6023663946182843108,
			user_id : -4907724242546974927,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 80,
				id : 6077295177116024320,
				access_hash : -2428344113389538369,
			),
			chat_instance : 3268807619020047230,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'uL2EyJncYGXoBWw3',
		),
		$client->updateReadChannelOutbox(
			channel_id : -1279113494179784461,
			max_id : 11,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : -1024468728333520958,
			),
			top_msg_id : 15,
			saved_peer_id : $client->peerUser(
				user_id : 4541593808031964202,
			),
			draft : $client->draftMessageEmpty(
				date : 2,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -1793284135063290064,
			webpage : $client->webPageEmpty(
				id : 630861420799287746,
				url : 'https://docs.liveproto.dev',
			),
			pts : 38,
			pts_count : 43,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 43,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -4329155123462587906,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 87,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -2300445706993743151,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 55,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'gyoK9nv6kw7ULEM4',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -2596427155181317098,
			data : $client->dataJSON(
				data : 'hy1aflJ8TuYNgjsB',
			),
			timeout : 57,
		),
		$client->updateBotShippingQuery(
			query_id : 8888512242168536579,
			user_id : 6206040061675145427,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'QHhwuRjSskzGvel6',
				street_line2 : 'JsbET9rByamfwluY',
				city : 'EsF6QaAWVjnlbBO3',
				state : 'FljKqRhr3o4YvU7a',
				country_iso2 : 'mWJ3i8TkGdjO02SK',
				post_code : 'VX32D4jpLvtesaJC',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -40183023154646804,
			user_id : -5081812295711605001,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'n5KAIDgWHfhlqsE7',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : '4vkpGdftbo1hTlNc',
					street_line2 : '3ZQB7ctLXDjizIY6',
					city : 'sLeuJVQvdqoNfKkP',
					state : 'XlDa6Qjz73GKc9d8',
					country_iso2 : 'xVvq51sSAHrTX0jW',
					post_code : 'GpDkP19xNdhSWl6y',
				),
			),
			shipping_option_id : 'hogm7TL1MtAzw3pF',
			currency : 'K6OTi08FEwPy213W',
			total_amount : -4038201295902946256,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -4403215672611001752,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'M470lXkvtPzDxcGi',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 't8JsfYI7qU6QVWDZ',
				from_version : 91,
				version : 1,
				strings : array(
					$client->langPackString(
						key : 'OaJWkSo1yNs9RXgv',
						value : 'L87WUsk5jvhgpfKS',
					),
					$client->langPackStringPluralized(
						key : 'bYqWZ9mslDxFQX6L',
						zero_value : 'WIL60UaGMX3gxcbw',
						one_value : '95iYUlm3thOZ4Fbx',
						two_value : 'MLVC4Q3ZdDrnaAi5',
						few_value : 'D78GnOmLNyi94RwW',
						many_value : 'obXCB5HihNm1LKAr',
						other_value : 'yAgj4VQZxebP5GUf',
					),
					$client->langPackStringDeleted(
						key : '740OaiITPVpsnEqc',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 8275643682171626159,
			top_msg_id : 83,
			saved_peer_id : $client->peerUser(
				user_id : 6695670606009457890,
			),
			messages : array(99),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 6915792739167974988,
			available_min_id : 1,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -2526823154782038587,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : 8565620466624600816,
			),
		),
		$client->updateMessagePoll(
			poll_id : 4506678914961347419,
			poll : $client->poll(
				id : 9066675199507973498,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : '2pn1yTruBqfieU3G',
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
				close_period : 54,
				close_date : 67,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 38,
					),
				),
				total_voters : 36,
				recent_voters : array(
					$client->peerUser(
						user_id : 4960967725362863551,
					),
					$client->peerChat(
						chat_id : -7799940549196239872,
					),
					$client->peerChannel(
						channel_id : -7263701229046718807,
					),
				),
				solution : 'ZDmgIa5swtV9iGQE',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 99,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 1,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 20,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 50,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 7,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 43,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 88,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 73,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 92,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 4,
						language : 'DpHSPctGwJzaM0kX',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 2,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 90,
						user_id : 3875979782303392785,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 81,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 96,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 20,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 44,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 84,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 47,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 12,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 6,
						document_id : -2066131986725044673,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 66,
					),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 3335719303699713665,
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
			version : 42,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : 1765240645149901237,
					),
					folder_id : 31,
				),
			),
			pts : 22,
			pts_count : 62,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 8655393312954176316,
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
				geo_distance : 80,
				request_chat_title : '7w28lkjWYyzT5iBM',
				request_chat_date : 32,
				business_bot_id : 3636141612297869017,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 1198108187176100502,
				registration_month : 'tcDx2UZpPVj4gwYr',
				phone_country : '+1234567890',
				name_change_date : 5,
				photo_change_date : 39,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : 6476239187878153730,
					),
					expires : 18,
					distance : 75,
				),
				$client->peerSelfLocated(
					expires : 81,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 38,
				peer_id : $client->peerUser(
					user_id : 1130624932662628649,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -2463925441653416503,
			),
			messages : array(3),
			sent_messages : array(4),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -7422916411512112657,
				access_hash : 3122623432898974846,
				slug : 'Rr4wq7TeLD0cWiOb',
				title : 'wsxfKcG7OdJb5NVi',
				document : $client->documentEmpty(
					id : 1232116178340904571,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 84,
						outbox_accent_color : 38,
						message_colors : array(44),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'ZIADw2VgPlSt0Rb9',
				installs_count : 9,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -4080257136495561874,
			),
			msg_id : 66,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -5675793552843304998,
			peer : $client->peerUser(
				user_id : -8290739699762132195,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 98,
		),
		$client->updateDialogFilter(
			id : 56,
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
				id : 20,
				title : $client->textWithEntities(
					text : 'PrpQKU3VzXTyaui8',
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
				emoticon : 'Ar7wz0lWMZBimnVP',
				color : 78,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(71),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -7968978964893714400,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -8850722173041415642,
			id : 74,
			forwards : 9,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 7645798876414971095,
			top_msg_id : 14,
			read_max_id : 91,
			broadcast_id : 5461664769825524171,
			broadcast_post : 4,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -4241292875314628828,
			top_msg_id : 20,
			read_max_id : 11,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 2489658273796260184,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -6944103263561541486,
			top_msg_id : 5,
			from_id : $client->peerUser(
				user_id : -8611774094208188741,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -2700767145517039218,
			),
			messages : array(70),
			pts : 61,
			pts_count : 51,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -8476687465298781488,
			messages : array(27),
			pts : 33,
			pts_count : 73,
		),
		$client->updateChat(
			chat_id : 79142780874975473,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 6289799434910280294,
				access_hash : 5777160931922194742,
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
						user_id : -7144702334029413046,
					),
					date : 51,
					active_date : 87,
					source : 64,
					volume : 76,
					about : 'jlidyVu17WPcYhE3',
					raise_hand_rating : 2264279258671545881,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'YZHIimhkVEfevFg4',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 27,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'zSNbM8gUO4qhZ1Wp',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 78,
					),
					paid_stars_total : 7880855084312849778,
				),
			),
			version : 39,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : 5622518025491201654,
			),
			call : $client->groupCallDiscarded(
				id : 8019066156072946578,
				access_hash : 5485827530619239518,
				duration : 95,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 5587267947873111184,
			),
			ttl_period : 15,
		),
		$client->updateChatParticipant(
			chat_id : -7171978890209174388,
			date : 66,
			actor_id : 490127800216864345,
			user_id : 7987420913587774978,
			prev_participant : $client->chatParticipant(
				user_id : -1299900731004537240,
				inviter_id : 5520116532484677682,
				date : 66,
			),
			new_participant : $client->chatParticipant(
				user_id : -1646067305897902963,
				inviter_id : 1328576419876888990,
				date : 39,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'S8yez62ubtHJLIU3',
				admin_id : 3019862121708344215,
				date : 77,
				start_date : 85,
				expire_date : 2,
				usage_limit : 46,
				usage : 45,
				requested : 46,
				subscription_expired : 100,
				title : 'jSVdJMOGFhtIEa9H',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 69,
					amount : 4875265407769917170,
				),
			),
			qts : 86,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -8704828764162683391,
			date : 17,
			actor_id : -6532276338171507149,
			user_id : 2404528442717833810,
			prev_participant : $client->channelParticipant(
				user_id : 6071929885858229937,
				date : 78,
				subscription_until_date : 77,
			),
			new_participant : $client->channelParticipant(
				user_id : -965925589956912844,
				date : 4,
				subscription_until_date : 93,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : '0TyokwAC1aj2vniu',
				admin_id : 4551853440100186526,
				date : 11,
				start_date : 22,
				expire_date : 11,
				usage_limit : 51,
				usage : 54,
				requested : 45,
				subscription_expired : 73,
				title : 'FiH4SmsKE9I2hVPf',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 32,
					amount : 7435162301542174538,
				),
			),
			qts : 37,
		),
		$client->updateBotStopped(
			user_id : -1602032496630206755,
			date : 3,
			stopped : true,
			qts : 46,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : '1aKWkjhTgLbMqED5',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 1003037999636467510,
			),
			bot_id : -5680025997537189088,
			commands : array(
				$client->botCommand(
					command : 'iP1NZmUtDQVah2dK',
					description : '0acQVB4kU7zsndhG',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 2533814845801073193,
			),
			requests_pending : 2,
			recent_requesters : array(-6472426474404523627),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -71065594739474363,
			),
			date : 30,
			user_id : -90183112653371648,
			about : '9DcYRUdJu1WvzhHl',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'nsEq7ZIHprNV193i',
				admin_id : -6031468000481279005,
				date : 41,
				start_date : 48,
				expire_date : 75,
				usage_limit : 11,
				usage : 40,
				requested : 48,
				subscription_expired : 51,
				title : 'TKvCAy1YcHeosRQa',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 39,
					amount : -7065412577913581151,
				),
			),
			qts : 40,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -2639060964391988965,
			),
			msg_id : 17,
			top_msg_id : 55,
			saved_peer_id : $client->peerUser(
				user_id : -6047126657245829292,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 94,
						reaction : $client->reactionEmpty(...),
						count : 91,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 36,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 13,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 7438989855665176166,
		),
		$client->updateBotMenuButton(
			bot_id : 6580913612779141537,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 692128728856002978,
			),
			msg_id : 90,
			transcription_id : 7472505639993604141,
			text : 'FqdQWN9rJYn3w6Tp',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -8588510750539006714,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -4276866138379927558,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 6951751842732323342,
			),
			msg_id : 71,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 4,
					h : 76,
					thumb : $client->photoSizeEmpty(
						type : '8pfM0c3TgxAmSV4i',
					),
					video_duration : 4,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : -8915325130359028514,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -7549969690389238172,
			),
			story : $client->storyItemDeleted(
				id : 96,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -2262324432450716709,
			),
			max_id : 10,
		),
		$client->updateStoryID(
			id : 5,
			random_id : 2391922123985853955,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 41,
				cooldown_until_date : 99,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -636457888580649962,
			),
			story_id : 22,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -5419725292140891012,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'ubc7qa5gTeXsEki8',
				user_id : -4984678891964451844,
				giveaway_msg_id : 50,
				date : 21,
				expires : 1,
				used_gift_slug : 'mGTtDkuo1KUjFYyl',
				multiplier : 2,
				stars : 7940227288456328721,
			),
			qts : 79,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -5221826327967536772,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -2443083100723086599,
			),
			wallpaper : $client->wallPaper(
				id : -8677103070592841263,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 7244717433653570907,
				slug : 'nLqNS2U4zF1YXsPm',
				document : $client->documentEmpty(
					id : -102959346054148662,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 53,
					second_background_color : 95,
					third_background_color : 72,
					fourth_background_color : 74,
					intensity : 58,
					rotation : 23,
					emoticon : 'hcz3UNgPojXqapxb',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -4898722699095124139,
			),
			msg_id : 2,
			date : 81,
			actor : $client->peerUser(
				user_id : 5766970663216965980,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'RQcV9Ep5LomkBNbC',
				),
				$client->reactionCustomEmoji(
					document_id : 6177190474865639149,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'lRNPg0SXUFMY5Cak',
				),
				$client->reactionCustomEmoji(
					document_id : 1728268955792357497,
				),
				$client->reactionPaid(),
			),
			qts : 36,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -1920905951159971136,
			),
			msg_id : 94,
			date : 90,
			reactions : array(
				$client->reactionCount(
					chosen_order : 89,
					reaction : $client->reactionEmpty(),
					count : 90,
				),
			),
			qts : 29,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 7089283176284512463,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 7634506859781373440,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 20,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'V7NuQElrOHYPKMxa',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 79,
					shortcut : 'Bfjh2Qlec7SIOWsR',
					top_message : 25,
					count : 70,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 38,
				shortcut : 'EqwXSUYkLVnibRJh',
				top_message : 55,
				count : 94,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 72,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 41,
				peer_id : $client->peerUser(
					user_id : -1127043042318543611,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 3,
			messages : array(52),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'YnmFf124IBriuhC8',
				user_id : -1192365126220940198,
				dc_id : 52,
				date : 75,
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
			qts : 18,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'a2C6ZkMToKILDOEv',
			message : $client->messageEmpty(
				id : 30,
				peer_id : $client->peerUser(
					user_id : 6061201162532925621,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 24,
				peer_id : $client->peerUser(
					user_id : 5793344765347701613,
				),
			),
			qts : 55,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'p9e3E6FZRhgKJsbl',
			message : $client->messageEmpty(
				id : 18,
				peer_id : $client->peerUser(
					user_id : 7165405703720559993,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 47,
				peer_id : $client->peerUser(
					user_id : -6528571840321259137,
				),
			),
			qts : 11,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'MmbztOZqs5kDdCYg',
			peer : $client->peerUser(
				user_id : -3779635878399485290,
			),
			messages : array(38),
			qts : 75,
		),
		$client->updateNewStoryReaction(
			story_id : 3,
			peer : $client->peerUser(
				user_id : 5936163056456188215,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -9072545782667359336,
				nanos : 93,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 7436765212329149931,
			user_id : -6715710165700369267,
			connection_id : 'KA82T9oOfhsDtIQp',
			message : $client->messageEmpty(
				id : 4,
				peer_id : $client->peerUser(
					user_id : 5657750664664896065,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 83,
				peer_id : $client->peerUser(
					user_id : -1930220291584971377,
				),
			),
			chat_instance : -3000048695333983240,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -200935238425795897,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : 4198029141125950793,
					nanos : 73,
				),
				available_balance : $client->starsAmount(
					amount : 8223504288189917471,
					nanos : 72,
				),
				overall_revenue : $client->starsAmount(
					amount : 2351901824132229631,
					nanos : 10,
				),
				next_withdrawal_at : 89,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -6959682774719970166,
			payload : 'zyQiNI8BHDM5LG2p',
			qts : 0,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 1,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 50,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -1425034638197428135,
				access_hash : -9194537487087574454,
			),
			sub_chain_id : 50,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 44,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -8020411819223588979,
			saved_peer_id : $client->peerUser(
				user_id : -2397436929861778584,
			),
			read_max_id : 99,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 7937796621089413956,
			saved_peer_id : $client->peerUser(
				user_id : 324758587590328332,
			),
			read_max_id : 30,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -7539903109473400272,
			saved_peer_id : $client->peerUser(
				user_id : 1827586772339468396,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : -8328770065857968084,
				access_hash : -8617320892655454289,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 38,
				from_id : $client->peerUser(
					user_id : -870302158584417864,
				),
				date : 67,
				message : $client->textWithEntities(
					text : 'iQdAKNlxfuFhcs6C',
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
				paid_message_stars : 5419884178948566369,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : -970787200282663671,
				access_hash : -6484078535439296220,
			),
			from_id : $client->peerUser(
				user_id : 3210223662114377191,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : -2107639813106436665,
			),
			topic_id : 27,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : 6760901029676202121,
			),
			order : array(95),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : -1730125048732686937,
				access_hash : -613368242500303177,
			),
			messages : array(92),
		),
		$client->updateStarGiftAuctionState(
			gift_id : 4171831547354892005,
			state : $client->starGiftAuctionState(
				version : 64,
				start_date : 44,
				end_date : 42,
				min_bid_amount : 1799460113969665810,
				bid_levels : array(
					$client->auctionBidLevel(
						pos : 26,
						amount : -8998461310056934687,
						date : 92,
					),
				),
				top_bidders : array(-3907184436669181729),
				next_round_at : 56,
				gifts_left : 67,
				current_round : 22,
				total_rounds : 40,
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : 8844843079391351838,
			text : 'qRTWCwslKuY35afo',
		),
		$client->updateBotSubscriptionExpire(
			user_id : -6184939103557557599,
			payload : 'jbdsnBXMYgq6OlKu',
			until_date : 21,
			qts : 33,
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : 6461024508345524081,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : 3679263492205820817,
				bid_date : 86,
				min_bid_amount : 8024568105814102065,
				peer : $client->peerUser(
					user_id : 832191112201322215,
				),
				acquired_count : 22,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -8594318647636150921,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4358293656629988929,
			title : 'T09QXCc4nF5qE3oN',
			photo : $client->chatPhotoEmpty(),
			participants_count : 76,
			date : 99,
			version : 43,
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
				until_date : 79,
			),
		),
		$client->chatForbidden(
			id : -4635126766340742492,
			title : '8NhwfOse0HcxquJ1',
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
			id : -1055203453505638030,
			access_hash : 1390252606558579232,
			title : 'x4V3dqzLcPs7jiWb',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 7,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '31HqgC4kWcSfJZKA',
					reason : 'YzUEoD9QGysiwnJ2',
					text : 'BqFTOIntl8j4rQwP',
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
				until_date : 63,
			),
			participants_count : 53,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 82,
			),
			color : $client->peerColor(
				color : 7,
				background_emoji_id : -3721203678725591785,
			),
			profile_color : $client->peerColor(
				color : 12,
				background_emoji_id : 4228289997887529136,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 87,
			subscription_until_date : 46,
			bot_verification_icon : -3713629134177589375,
			send_paid_messages_stars : -928267558299866143,
			linked_monoforum_id : -2139525443466691602,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 1494663724461060322,
			access_hash : -5384081632099706981,
			title : 'xVvdt9l5cSsg1JLU',
			until_date : 80,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8747065406136431240,
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
			id : 4601471283933814635,
			access_hash : -8212983117528806088,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 30,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '4qNhsZw5tSMVCEpj',
					reason : 'c36iLI4sD0ZXbyuq',
					text : 'CiocZT9guqtd3Jfx',
				),
			),
			bot_inline_placeholder : 'BvuMya7nArVtOR2x',
			lang_code : 'NYpoVvS0f2GWzwaH',
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
				max_id : 14,
			),
			color : $client->peerColor(
				color : 87,
				background_emoji_id : 2515233144850014804,
			),
			profile_color : $client->peerColor(
				color : 92,
				background_emoji_id : -2742130208165968112,
			),
			bot_active_users : 25,
			bot_verification_icon : 4283346212523513210,
			send_paid_messages_stars : -4566379691633361998,
		),
	),
	intermediate_state : $client->updates->state(
		pts : 46,
		qts : 18,
		date : 5,
		seq : 36,
		unread_count : 20,
	),
);
```