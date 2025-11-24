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
			id : 94,
			peer_id : $client->peerUser(
				user_id : 7408500346756481433,
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
			id : 69,
			from_id : $client->peerUser(
				user_id : 8037466031919792802,
			),
			from_boosts_applied : 32,
			peer_id : $client->peerUser(
				user_id : -6407649630608177095,
			),
			saved_peer_id : $client->peerUser(
				user_id : 2781836683914952991,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 6116766339650373639,
				),
				from_name : 'deobBZLJ7fv2xWVS',
				date : 94,
				channel_post : 92,
				post_author : 'anErDxjzNHtRoy9K',
				saved_from_peer : $client->peerUser(
					user_id : -1039306457984345111,
				),
				saved_from_msg_id : 5,
				saved_from_id : $client->peerUser(
					user_id : -6222539337930479752,
				),
				saved_from_name : 'iwRCgPALbmxHNlIM',
				saved_date : 2,
				psa_type : 'Xcpk16gWKTNCqeSz',
			),
			via_bot_id : -9020234785725087178,
			via_business_bot_id : -5017961249586197213,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 48,
				reply_to_peer_id : $client->peerUser(
					user_id : -1627202127368030756,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'hEcPI0RqblFxGdgn',
					date : 19,
					channel_post : 63,
					post_author : 'x5yp9iBKUHRSlErV',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 75,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'wWm2dCnvJoh7QO1K',
					saved_date : 20,
					psa_type : 'r6MXKmE4UDSfGTlo',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 68,
				quote_text : 'fzv8EkV9YdXOCHht',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 62,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 52,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 80,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 51,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 45,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 5,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 14,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 26,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 44,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 64,
						language : 'kySewbQlXa7tLoRP',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 16,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 4,
						user_id : -7726168150648407895,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 52,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 70,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 39,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 33,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 52,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 49,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 100,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 96,
						document_id : -3765244908427262312,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 43,
					),
				),
				quote_offset : 49,
				todo_item_id : 20,
			),
			date : 67,
			message : 'KmV5C3rXWDvgMHua',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 58,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 69,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 61,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 50,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 91,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 40,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 86,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 38,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 33,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 71,
					language : 'mH0xcyqPt8NGMhKj',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 11,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 73,
					user_id : 6358932082139354696,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 31,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 89,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 87,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 77,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 89,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 89,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 39,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 9,
					document_id : 4170509381266518644,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 7,
				),
			),
			views : 6,
			forwards : 78,
			replies : $client->messageReplies(
				comments : true,
				replies : 10,
				replies_pts : 20,
				recent_repliers : array(
					$client->peerUser(
						user_id : -834540174619994828,
					),
					$client->peerChat(
						chat_id : 3743128855118770291,
					),
					$client->peerChannel(
						channel_id : 5998996080034736381,
					),
				),
				channel_id : -3889906121573044000,
				max_id : 79,
				read_max_id : 72,
			),
			edit_date : 33,
			post_author : 'FoalmeJph7vbfgKi',
			grouped_id : 3796645111587474849,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 77,
						reaction : $client->reactionEmpty(...),
						count : 9,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 86,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 3,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'oHD8pvrt2ajFGO0l',
					reason : 's4yF2rTR30Dpx5mv',
					text : 'UteTb90YdA7B8joS',
				),
			),
			ttl_period : 39,
			quick_reply_shortcut_id : 17,
			effect : -2374636641003615442,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'C3EQSvxHs8NaTKZd',
				text : $client->textWithEntities(
					text : 'FyLorngXNpUk9C0a',
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
			report_delivery_until_date : 52,
			paid_message_stars : -8472909761552490448,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 5727028635871320492,
					nanos : 97,
				),
				schedule_date : 35,
			),
			schedule_repeat_period : 32,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 83,
			from_id : $client->peerUser(
				user_id : -9046587132450972231,
			),
			peer_id : $client->peerUser(
				user_id : -3257469978477362010,
			),
			saved_peer_id : $client->peerUser(
				user_id : -4709778585238627147,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 33,
				reply_to_peer_id : $client->peerUser(
					user_id : -2346089818014794434,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'YfcWt7A6iUEKBj3a',
					date : 57,
					channel_post : 19,
					post_author : 'wlxLREoeP7sCcdqI',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 35,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'ly1BvKXAedkNVSqG',
					saved_date : 24,
					psa_type : 'RomvB6GNAtuhL4qK',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 9,
				quote_text : 'lBG8HQJh0V2TFfO1',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 100,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 91,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 10,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 82,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 6,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 69,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 98,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 35,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 91,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 54,
						language : 'yvJtXClDmSKhiVQZ',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 28,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 4,
						user_id : 7415570062461844283,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 44,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 8,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 16,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 48,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 8,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 51,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 45,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 38,
						document_id : -7335050814062793987,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 63,
					),
				),
				quote_offset : 21,
				todo_item_id : 11,
			),
			date : 88,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 91,
						reaction : $client->reactionEmpty(...),
						count : 89,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 49,
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
			ttl_period : 66,
		),
	),
	new_encrypted_messages : array(
		$client->encryptedMessage(
			random_id : -8368470702045732990,
			chat_id : 86,
			date : 4,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			file : $client->encryptedFileEmpty(),
		),
		$client->encryptedMessageService(
			random_id : -8445179493179868536,
			chat_id : 50,
			date : 17,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 76,
				peer_id : $client->peerUser(
					user_id : 7814331794446518665,
				),
			),
			pts : 52,
			pts_count : 29,
		),
		$client->updateMessageID(
			id : 74,
			random_id : 2756716287348479446,
		),
		$client->updateDeleteMessages(
			messages : array(83),
			pts : 28,
			pts_count : 75,
		),
		$client->updateUserTyping(
			user_id : 4845326992281367025,
			top_msg_id : 18,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -5856522118670642973,
			from_id : $client->peerUser(
				user_id : 3779324161269386594,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -2757531191841188707,
				self_participant : $client->chatParticipant(
					user_id : 8361600438009380551,
					inviter_id : 3340314170386833261,
					date : 52,
				),
			),
		),
		$client->updateUserStatus(
			user_id : -1213846947104079498,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 1274248141632089926,
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
			date : 41,
			device : 'uAUEt3mIzXKWTpFV',
			location : '4lDGCMAxpWht0TnI',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -8485303043235733709,
				chat_id : 72,
				date : 80,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 78,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 73,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 51,
			),
			date : 2,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 12,
			max_date : 54,
			date : 2,
		),
		$client->updateChatParticipantAdd(
			chat_id : -9031357196906683783,
			user_id : -5211305449760582376,
			inviter_id : 7014442419607791188,
			date : 44,
			version : 65,
		),
		$client->updateChatParticipantDelete(
			chat_id : -6682011269126721809,
			user_id : 6264580126928202136,
			version : 78,
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
					id : 10,
					ip_address : '127.0.0.1',
					port : 63,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : -5869872088183045278,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : true,
				mute_until : 96,
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
			inbox_date : 78,
			type : 'u3xq8zF95H1bsBQ2',
			message : 'vbgstjflZO5Jdxo7',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 79,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 2,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 13,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 13,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 69,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 30,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 43,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 25,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 9,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 54,
					language : 'z1fTlshnSc5GXpWC',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 57,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 64,
					user_id : -5633802699541988379,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 41,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 73,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 24,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 27,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 62,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 63,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 98,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 13,
					document_id : 5200733391055643419,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 65,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(5385338374536539281),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(4859960724399543193),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-3602393975933112366),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-4546340398547874836),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 3980432249220709042,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 39,
			peer : $client->peerUser(
				user_id : 3993788420009768999,
			),
			top_msg_id : 32,
			max_id : 96,
			still_unread_count : 40,
			pts : 78,
			pts_count : 15,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 3237285943905090941,
			),
			max_id : 89,
			pts : 38,
			pts_count : 65,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -1566124579436444119,
				url : 'https://docs.liveproto.dev',
			),
			pts : 4,
			pts_count : 68,
		),
		$client->updateReadMessagesContents(
			messages : array(31),
			pts : 6,
			pts_count : 25,
			date : 99,
		),
		$client->updateChannelTooLong(
			channel_id : -4006292229747587117,
			pts : 25,
		),
		$client->updateChannel(
			channel_id : 6391949627589411530,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 5,
				peer_id : $client->peerUser(
					user_id : 8794967665381833271,
				),
			),
			pts : 80,
			pts_count : 43,
		),
		$client->updateReadChannelInbox(
			folder_id : 58,
			channel_id : 5740504403738472291,
			max_id : 34,
			still_unread_count : 99,
			pts : 55,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 7154184593032779400,
			messages : array(71),
			pts : 52,
			pts_count : 3,
		),
		$client->updateChannelMessageViews(
			channel_id : -6032939449434122773,
			id : 88,
			views : 11,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 4483271067297103969,
			user_id : -7705367169500886205,
			is_admin : true,
			version : 34,
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
					installed_date : 26,
					id : -7994055330568213414,
					access_hash : 905840076474889148,
					title : '2viWmVCHOazZU58c',
					short_name : 'tfQe7LGF4l219C3v',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 61,
					thumb_version : 48,
					thumb_document_id : -8074388371355919435,
					count : 55,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'D2Lnrc56bEV4RiQI',
						documents : array(4205521136419129580),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : -1649854121672657522,
						keyword : array('9Xhu0Cj2JagBpVsO'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : -4860939906433876912,
					),
					$client->document(
						id : -2067102810133006580,
						access_hash : -4591319151646397270,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 74,
						mime_type : 'qBN3d7pfUh9m108J',
						size : -7855907114186738475,
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
						dc_id : 94,
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
			order : array(-8252488684013942672),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 7116346296959819724,
			user_id : -2277529597174816242,
			query : 'f5DQUoXHK7yjsPG9',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : '47NPFRCtZHmrVoBw',
		),
		$client->updateBotInlineSend(
			user_id : -2902233789045737620,
			query : 'gXHyiEjr48vez3Zw',
			geo : $client->geoPointEmpty(),
			id : 'sG7YESNQU4Cc3gqa',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 11,
				id : 3962536353097962053,
				access_hash : 3179176382963345646,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 38,
				peer_id : $client->peerUser(
					user_id : 7526671364886944434,
				),
			),
			pts : 43,
			pts_count : 74,
		),
		$client->updateBotCallbackQuery(
			query_id : 4355089708079970133,
			user_id : -870715650015006407,
			peer : $client->peerUser(
				user_id : -6394506695423698600,
			),
			msg_id : 42,
			chat_instance : 5630460384527806781,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'A4ydevb9X3hSQsVW',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 78,
				peer_id : $client->peerUser(
					user_id : 2130804343373027146,
				),
			),
			pts : 89,
			pts_count : 40,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 5626688486557760939,
			user_id : 700899508823832471,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 75,
				id : -8908695860124009103,
				access_hash : 5071034297124711575,
			),
			chat_instance : -6554469356487873377,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : '7RjU9k6yfsAPGVbw',
		),
		$client->updateReadChannelOutbox(
			channel_id : -6393723704693059269,
			max_id : 7,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : -912417069339430590,
			),
			top_msg_id : 23,
			saved_peer_id : $client->peerUser(
				user_id : 7312292015354312091,
			),
			draft : $client->draftMessageEmpty(
				date : 23,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 6605827555087617597,
			webpage : $client->webPageEmpty(
				id : -4464685334264429124,
				url : 'https://docs.liveproto.dev',
			),
			pts : 24,
			pts_count : 49,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 71,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 5113095910253878395,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 30,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 6634306144405721913,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 34,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : '7IFRPjm0vYJpU5DH',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -52420970325555112,
			data : $client->dataJSON(
				data : 'tlR4h6m85BsJDGVu',
			),
			timeout : 21,
		),
		$client->updateBotShippingQuery(
			query_id : 5651461199041246081,
			user_id : 6167693801598859091,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'cYHp3XSMxeP6OuK2',
				street_line2 : 'oMGh7le6S8HBdXnm',
				city : 'OzkDhUljF8fmKtid',
				state : '8WRc3ejBrbsFC7zl',
				country_iso2 : 'x8E43KQknUvNDarc',
				post_code : 'e18ZuDTWObqr25Pp',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 2068646813957781820,
			user_id : -3362626349934464257,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'nk8b0GaARYUfjO6u',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'n8oql6W02GmIPcAz',
					street_line2 : '09qUQhVSfPDFaA63',
					city : 'OPHAt4SpBy6sr3T9',
					state : 'f7r5XMudPJW4ynsw',
					country_iso2 : 'I32lk6tT7wxriXDz',
					post_code : 'xabLGPlY8tqdFKrH',
				),
			),
			shipping_option_id : 'kq0vWD83HJnAgLZj',
			currency : '14PTxJqoQeKcUzVu',
			total_amount : 9186714532512629035,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 3866754688300870249,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'JZNcpnyuHj67FWLK',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'ipXaocqQT4jWtgyB',
				from_version : 1,
				version : 24,
				strings : array(
					$client->langPackString(
						key : 'zwrtHoSGZXCIdQjF',
						value : 'bX1Rt0Oq2xFIhHme',
					),
					$client->langPackStringPluralized(
						key : 'a7pXIFtyxb08ZvYo',
						zero_value : 'mbc4VreJQkAS6D9j',
						one_value : 'IEYCkRq21WcvAJbe',
						two_value : 'uQORvEBSn5WAwhye',
						few_value : '7jXeybSGKcBd25qa',
						many_value : 'dcCRnjeQOyBkYw8o',
						other_value : 'TbWxF2ElUdn3j0mH',
					),
					$client->langPackStringDeleted(
						key : 'WG4OaXfPLS7lvHn8',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -5406444775882760137,
			top_msg_id : 86,
			saved_peer_id : $client->peerUser(
				user_id : 1179412277647588360,
			),
			messages : array(98),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -4506679964161136470,
			available_min_id : 85,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 5195168161042431679,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : 4014306518349745686,
			),
		),
		$client->updateMessagePoll(
			poll_id : 1970073048549970823,
			poll : $client->poll(
				id : 1761929508798643182,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : 'ZSPkxbEVILy6C12u',
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
				close_period : 26,
				close_date : 2,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 19,
					),
				),
				total_voters : 1,
				recent_voters : array(
					$client->peerUser(
						user_id : 6536402765006858119,
					),
					$client->peerChat(
						chat_id : -1732686388803464904,
					),
					$client->peerChannel(
						channel_id : 1476619246990210168,
					),
				),
				solution : 'QZima1bhlYz3fBOw',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 35,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 88,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 26,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 21,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 76,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 25,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 19,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 49,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 7,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 51,
						language : 'niyjxraNq6kUME3O',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 44,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 61,
						user_id : 6896809925448024603,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 28,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 4,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 46,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 32,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 4,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 11,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 89,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 98,
						document_id : 8198465506778839933,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 68,
					),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : -7780603354670085960,
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
			version : 11,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : -5218199079340269490,
					),
					folder_id : 14,
				),
			),
			pts : 2,
			pts_count : 31,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -1474825206118513489,
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
				geo_distance : 97,
				request_chat_title : 'bV035pwRPfJnGWqU',
				request_chat_date : 15,
				business_bot_id : 3682410233312688382,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 315666458435750447,
				registration_month : '0z5vhAIlOtfsXgk8',
				phone_country : '+1234567890',
				name_change_date : 71,
				photo_change_date : 32,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : -58872895342208690,
					),
					expires : 44,
					distance : 90,
				),
				$client->peerSelfLocated(
					expires : 19,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 21,
				peer_id : $client->peerUser(
					user_id : -4410690632536758282,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 434613692700656312,
			),
			messages : array(33),
			sent_messages : array(43),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -2025002556318481837,
				access_hash : -2214487779939814229,
				slug : 'ltoMRbzsruxwm3N6',
				title : '8i1bA7uHY0rDC3WQ',
				document : $client->documentEmpty(
					id : -81942837743181029,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 94,
						outbox_accent_color : 59,
						message_colors : array(46),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'Cw7lNH6dr9hu5PIR',
				installs_count : 82,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -8166190836693554199,
			),
			msg_id : 2,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 1386426085332412363,
			peer : $client->peerUser(
				user_id : -1645122942715326011,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 4,
		),
		$client->updateDialogFilter(
			id : 16,
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
				id : 63,
				title : $client->textWithEntities(
					text : 'ky0YiTMeJxXLgBVC',
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
				emoticon : 'vSfGDZ6wnV5se0xJ',
				color : 93,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(51),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -3529800174644276234,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -903892918388038809,
			id : 56,
			forwards : 49,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 8092858325326541748,
			top_msg_id : 76,
			read_max_id : 28,
			broadcast_id : 5909233179468758014,
			broadcast_post : 12,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 4906121429990417279,
			top_msg_id : 91,
			read_max_id : 31,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 8486341768472898731,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : 1616542621321032342,
			top_msg_id : 100,
			from_id : $client->peerUser(
				user_id : -86187636190884107,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -5180929511593241376,
			),
			messages : array(100),
			pts : 88,
			pts_count : 80,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -8885564268084901360,
			messages : array(77),
			pts : 60,
			pts_count : 24,
		),
		$client->updateChat(
			chat_id : -9188352667775739227,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 7359260906978637481,
				access_hash : 8020417874452520362,
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
						user_id : -7678665964614170788,
					),
					date : 32,
					active_date : 90,
					source : 85,
					volume : 11,
					about : 'ubE9d5pG8oLeIhnw',
					raise_hand_rating : -8017725254412913864,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : '8bqXyZrgt725JiEK',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 73,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'I8wHRQ6cuDzsaZxr',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 82,
					),
					paid_stars_total : -1052353481608297032,
				),
			),
			version : 4,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : -8240405777508149512,
			),
			call : $client->groupCallDiscarded(
				id : -2006615206594826453,
				access_hash : 7875654626907546775,
				duration : 53,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 4327545132386586171,
			),
			ttl_period : 97,
		),
		$client->updateChatParticipant(
			chat_id : 3520444466444643877,
			date : 61,
			actor_id : 6818757761347543725,
			user_id : 5873533404267807333,
			prev_participant : $client->chatParticipant(
				user_id : -2233908314860380956,
				inviter_id : -2701656546325945168,
				date : 98,
			),
			new_participant : $client->chatParticipant(
				user_id : 5829262822556329819,
				inviter_id : -8560375468140162413,
				date : 99,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'CgRzsjKNf8WTH7VQ',
				admin_id : 4745968635229627934,
				date : 42,
				start_date : 47,
				expire_date : 97,
				usage_limit : 39,
				usage : 99,
				requested : 59,
				subscription_expired : 94,
				title : 'nR2famDtOLVvEckz',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 55,
					amount : -9122337907751727966,
				),
			),
			qts : 43,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -2671687949385078786,
			date : 61,
			actor_id : 4549676363060844429,
			user_id : -6967818430405790473,
			prev_participant : $client->channelParticipant(
				user_id : -9098825042327374365,
				date : 41,
				subscription_until_date : 49,
			),
			new_participant : $client->channelParticipant(
				user_id : 478113122749758197,
				date : 86,
				subscription_until_date : 66,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'XGDuaQob6WnMCSyA',
				admin_id : -362452468713663165,
				date : 21,
				start_date : 29,
				expire_date : 6,
				usage_limit : 97,
				usage : 5,
				requested : 62,
				subscription_expired : 73,
				title : 'xImB2fbSthcAHwYJ',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 94,
					amount : 3312488873650730770,
				),
			),
			qts : 20,
		),
		$client->updateBotStopped(
			user_id : 2630857592363029251,
			date : 36,
			stopped : true,
			qts : 8,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'PSYMt3VnmhDEdXZe',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -7740098416171290644,
			),
			bot_id : 1391746699563893011,
			commands : array(
				$client->botCommand(
					command : 'kJrnYxvRo0zEWMU2',
					description : 'EGmAxU7XcCjKs1lb',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 8221771544780637336,
			),
			requests_pending : 57,
			recent_requesters : array(-6174852224204891681),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 8865121026823280925,
			),
			date : 22,
			user_id : 1352511386274202302,
			about : 'W1PIqAtkXR2uEpVy',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'Ta6d2BXGeMm91wJf',
				admin_id : 8405369613785058399,
				date : 58,
				start_date : 12,
				expire_date : 40,
				usage_limit : 66,
				usage : 28,
				requested : 25,
				subscription_expired : 92,
				title : 'eicwqpd15hvPA7JG',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 5,
					amount : -4194850731153861037,
				),
			),
			qts : 84,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 5613739237248436308,
			),
			msg_id : 20,
			top_msg_id : 39,
			saved_peer_id : $client->peerUser(
				user_id : -1068648403114089915,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 24,
						reaction : $client->reactionEmpty(...),
						count : 23,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 17,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 94,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 3014558043855761249,
		),
		$client->updateBotMenuButton(
			bot_id : 7550949911457909232,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -1788884324462366834,
			),
			msg_id : 31,
			transcription_id : 6625721704142654979,
			text : 'YZtlUng4WHOAFBya',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -9057026710834518332,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 3834039694571819115,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -223736673286963400,
			),
			msg_id : 83,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 11,
					h : 64,
					thumb : $client->photoSizeEmpty(
						type : '9GkLydn0rWvHhwf6',
					),
					video_duration : 93,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : -5064159290485396023,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -3339934550150336606,
			),
			story : $client->storyItemDeleted(
				id : 39,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -2561187735062751410,
			),
			max_id : 73,
		),
		$client->updateStoryID(
			id : 30,
			random_id : 1191334750191495550,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 82,
				cooldown_until_date : 74,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -6857400410349842941,
			),
			story_id : 57,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -2463150933303768295,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'HJx6qTbidh0FnuXW',
				user_id : 3884872087013853743,
				giveaway_msg_id : 95,
				date : 9,
				expires : 32,
				used_gift_slug : 'zJ5mjGCpSOarqxu0',
				multiplier : 26,
				stars : 2472909126469071771,
			),
			qts : 10,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 2936764511951769165,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 1782048783759031019,
			),
			wallpaper : $client->wallPaper(
				id : -5946457022957614096,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -5079634915666971924,
				slug : 'MBkvX06GYdpr9A3N',
				document : $client->documentEmpty(
					id : 7552751901319417168,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 5,
					second_background_color : 26,
					third_background_color : 59,
					fourth_background_color : 90,
					intensity : 65,
					rotation : 63,
					emoticon : 'Ltp9UBY5CyjhQs83',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -8409800408398910494,
			),
			msg_id : 15,
			date : 76,
			actor : $client->peerUser(
				user_id : 8630829883277278639,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'egoQNwRDv3xq5yfH',
				),
				$client->reactionCustomEmoji(
					document_id : -9134883855778308147,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'ldY8MSgPBibyK1QU',
				),
				$client->reactionCustomEmoji(
					document_id : -234202532840781134,
				),
				$client->reactionPaid(),
			),
			qts : 1,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -7486324064897882558,
			),
			msg_id : 26,
			date : 46,
			reactions : array(
				$client->reactionCount(
					chosen_order : 23,
					reaction : $client->reactionEmpty(),
					count : 77,
				),
			),
			qts : 69,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -1657252292577233856,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 2971806434172286888,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 11,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'iuxm3CHLySratXcG',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 65,
					shortcut : 'hX8AYeV9C1UTfEgI',
					top_message : 88,
					count : 53,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 39,
				shortcut : 'ExDVSFyLBkz7WloR',
				top_message : 7,
				count : 38,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 62,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 57,
				peer_id : $client->peerUser(
					user_id : 3180560937589757149,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 53,
			messages : array(7),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'TSEBOGd7x5mcvKNp',
				user_id : -5238016482225701381,
				dc_id : 29,
				date : 81,
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
			qts : 93,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'GI1PfHRL0UnOc96p',
			message : $client->messageEmpty(
				id : 4,
				peer_id : $client->peerUser(
					user_id : -4653334782831235729,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 16,
				peer_id : $client->peerUser(
					user_id : 3033021387138272770,
				),
			),
			qts : 64,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'M968hA0DPQWrke5N',
			message : $client->messageEmpty(
				id : 95,
				peer_id : $client->peerUser(
					user_id : 1064616748598535938,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 56,
				peer_id : $client->peerUser(
					user_id : -3447509329092110792,
				),
			),
			qts : 47,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'fWVSU594byELuote',
			peer : $client->peerUser(
				user_id : 7915943937832474258,
			),
			messages : array(55),
			qts : 11,
		),
		$client->updateNewStoryReaction(
			story_id : 19,
			peer : $client->peerUser(
				user_id : 5607122708284135014,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -2100834332697893000,
				nanos : 87,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 592346196651558031,
			user_id : -7477938663906552833,
			connection_id : '1YvdxBzfME6IWZLw',
			message : $client->messageEmpty(
				id : 91,
				peer_id : $client->peerUser(
					user_id : -8310619375757840145,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 6,
				peer_id : $client->peerUser(
					user_id : 7455770983931149277,
				),
			),
			chat_instance : 7833355737185685883,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 3487921149765064238,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : -2963631086705033056,
					nanos : 8,
				),
				available_balance : $client->starsAmount(
					amount : -866070461827552270,
					nanos : 13,
				),
				overall_revenue : $client->starsAmount(
					amount : -1510018715726529532,
					nanos : 83,
				),
				next_withdrawal_at : 5,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 3948022903002828859,
			payload : 'OwScoP6DkMVgIshl',
			qts : 88,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 70,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 64,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 4893025149524778775,
				access_hash : -1959046728635716823,
			),
			sub_chain_id : 9,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 4,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -534943355034011547,
			saved_peer_id : $client->peerUser(
				user_id : -1418349695069336799,
			),
			read_max_id : 100,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -2299681530089641147,
			saved_peer_id : $client->peerUser(
				user_id : -5123776011028322458,
			),
			read_max_id : 53,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -2987746067274257713,
			saved_peer_id : $client->peerUser(
				user_id : -7532046734327784402,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : -584019584322289171,
				access_hash : 8502617092506140304,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 67,
				from_id : $client->peerUser(
					user_id : 6202401888916520210,
				),
				date : 31,
				message : $client->textWithEntities(
					text : 'RolbP24XGDOBq8cW',
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
				paid_message_stars : 4851301668737858174,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : 4839877156023031171,
				access_hash : 1321486149869359917,
			),
			from_id : $client->peerUser(
				user_id : 7364633386341270049,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : 7876311072196050454,
			),
			topic_id : 10,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : -2435599965597061509,
			),
			order : array(44),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : 8655966203424913649,
				access_hash : 1954499841966917756,
			),
			messages : array(57),
		),
		$client->updateStarGiftAuctionState(
			gift_id : -7489934123271285530,
			state : $client->starGiftAuctionState(
				version : 83,
				start_date : 46,
				end_date : 52,
				min_bid_amount : 6245074516178806213,
				bid_levels : array(
					$client->auctionBidLevel(
						pos : 22,
						amount : 4374060128735790432,
						date : 64,
					),
				),
				top_bidders : array(-4862157283094905447),
				next_round_at : 20,
				gifts_left : 79,
				current_round : 83,
				total_rounds : 91,
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : -6186925041249567120,
			text : 'g0Uv3u9t7Tos6Eip',
		),
		$client->updateBotSubscriptionExpire(
			user_id : 7971462406680857642,
			payload : 'XVWCzRQh1NmsZSl8',
			until_date : 46,
			qts : 95,
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : -5346752278458575179,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : -892641928313815596,
				bid_date : 36,
				min_bid_amount : -5076697392224599515,
				peer : $client->peerUser(
					user_id : -1385865824988018988,
				),
				acquired_count : 84,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -3427014031706866488,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 2903688819108447237,
			title : 'R4r7DOn5XlcJZEUy',
			photo : $client->chatPhotoEmpty(),
			participants_count : 33,
			date : 31,
			version : 37,
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
				until_date : 43,
			),
		),
		$client->chatForbidden(
			id : -620310535242326287,
			title : '0Ea9ZfrhIptJcxBL',
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
			id : 8020165667520096307,
			access_hash : -83545098793593584,
			title : 'rgtDaflB1y70hX6x',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 66,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Cw8XWSDnvN6hg0VT',
					reason : 'pWucnGNBgw4dQ6oU',
					text : '5l4m9YXuJ12HgVcM',
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
				until_date : 10,
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
				until_date : 0,
			),
			participants_count : 54,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 11,
			),
			color : $client->peerColor(
				color : 36,
				background_emoji_id : 5138702731129006586,
			),
			profile_color : $client->peerColor(
				color : 26,
				background_emoji_id : 8443660117963537503,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 76,
			subscription_until_date : 97,
			bot_verification_icon : -7603706546363375311,
			send_paid_messages_stars : 7854973542327742939,
			linked_monoforum_id : -7188251030243488941,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -4709684044769823626,
			access_hash : 1336582422724516027,
			title : 'Q1MOGnDrqugc4XVb',
			until_date : 6,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2946958570646864395,
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
			id : -2759152758467513952,
			access_hash : -1654589047728008034,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 32,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'y73glIjEU0LRBxbh',
					reason : 'Omvsrh6qUWfcXVlj',
					text : 'eWyntH8QkE7uzJT4',
				),
			),
			bot_inline_placeholder : 'Xgwd096GjLzWTalo',
			lang_code : 'dhperM28NCsWLq01',
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
				max_id : 59,
			),
			color : $client->peerColor(
				color : 1,
				background_emoji_id : 1029512661149032829,
			),
			profile_color : $client->peerColor(
				color : 90,
				background_emoji_id : -2869398585527622342,
			),
			bot_active_users : 25,
			bot_verification_icon : 5270701754572384963,
			send_paid_messages_stars : -5456973719282663230,
		),
	),
	state : $client->updates->state(
		pts : 41,
		qts : 83,
		date : 39,
		seq : 32,
		unread_count : 17,
	),
);
```