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
			id : 49,
			peer_id : $client->peerUser(
				user_id : -768535686641061504,
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
			id : 29,
			from_id : $client->peerUser(
				user_id : 805796388109956229,
			),
			from_boosts_applied : 22,
			peer_id : $client->peerUser(
				user_id : 2642361915129922328,
			),
			saved_peer_id : $client->peerUser(
				user_id : -8635816137014155721,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -1142262751188927698,
				),
				from_name : 'saqrXUFQnj08CbRW',
				date : 79,
				channel_post : 72,
				post_author : 'IEUb9XegS4Gyt6xl',
				saved_from_peer : $client->peerUser(
					user_id : 92188588293592011,
				),
				saved_from_msg_id : 56,
				saved_from_id : $client->peerUser(
					user_id : -8152188056342119489,
				),
				saved_from_name : 'QnaMAH4j7TWBCXGd',
				saved_date : 88,
				psa_type : 'HfS7DNFiuMCZm2AX',
			),
			via_bot_id : 8186726697991859662,
			via_business_bot_id : -4044921459791380453,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 24,
				reply_to_peer_id : $client->peerUser(
					user_id : -2521473463512141745,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'YUxbzWAapC3QdK5o',
					date : 22,
					channel_post : 22,
					post_author : 'ulxcYhELpsODot7i',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 84,
					saved_from_id : $client->peerUser(...),
					saved_from_name : '7cANCpvqEemQXOP2',
					saved_date : 83,
					psa_type : 'geLax5ZOiycEnfdh',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 21,
				quote_text : 'kCvE1DQsWKacIzAd',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 85,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 99,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 51,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 33,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 75,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 59,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 20,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 99,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 63,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 21,
						language : 'xWjC7k1uvec2DHqO',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 54,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 75,
						user_id : 2300612204885629654,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 63,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 1,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 0,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 25,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 13,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 26,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 46,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 56,
						document_id : -2928569942839311678,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 63,
					),
				),
				quote_offset : 73,
				todo_item_id : 19,
			),
			date : 59,
			message : 'J81Rm4NOxz5IhbUK',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 73,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 22,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 2,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 36,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 34,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 43,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 62,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 44,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 33,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 47,
					language : 'GdSiFMDxVIg5fPT8',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 35,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 71,
					user_id : -824520127966407959,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 32,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 57,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 92,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 65,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 92,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 53,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 59,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 35,
					document_id : 8309419583568911396,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 33,
				),
			),
			views : 31,
			forwards : 90,
			replies : $client->messageReplies(
				comments : true,
				replies : 26,
				replies_pts : 70,
				recent_repliers : array(
					$client->peerUser(
						user_id : 2101347974086374468,
					),
					$client->peerChat(
						chat_id : 3160514921478063446,
					),
					$client->peerChannel(
						channel_id : -234211763804707382,
					),
				),
				channel_id : -4416906852740428310,
				max_id : 42,
				read_max_id : 42,
			),
			edit_date : 84,
			post_author : 'tWeX81DcmKiCuGky',
			grouped_id : -7021065969497218508,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 26,
						reaction : $client->reactionEmpty(...),
						count : 92,
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
						count : 12,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'IQ8pmJPCNr5qkalx',
					reason : 'VOyFtYImDbpucv5f',
					text : '4N0JDPYIeuo7Hjqp',
				),
			),
			ttl_period : 53,
			quick_reply_shortcut_id : 74,
			effect : -9189564674572641415,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'GcOVlrXF3KqusSEZ',
				text : $client->textWithEntities(
					text : 'BLewUR8XS6WEx2fi',
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
			report_delivery_until_date : 48,
			paid_message_stars : -6766932021629457176,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -9091777413769959383,
					nanos : 63,
				),
				schedule_date : 88,
			),
			schedule_repeat_period : 8,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 94,
			from_id : $client->peerUser(
				user_id : 5219552257684050653,
			),
			peer_id : $client->peerUser(
				user_id : -325349937291287799,
			),
			saved_peer_id : $client->peerUser(
				user_id : -6670993307506930511,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 90,
				reply_to_peer_id : $client->peerUser(
					user_id : 6441569526612679242,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'NSy13tjexnGUo9ba',
					date : 64,
					channel_post : 74,
					post_author : 'raEC1zy9jfMogbJd',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 13,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'THNnD78Aukg6IiPQ',
					saved_date : 54,
					psa_type : 'cgjD4Ee3Kp8LWCzy',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 5,
				quote_text : 'eIHoOcULzuTw16MW',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 31,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 57,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 28,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 11,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 35,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 61,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 36,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 64,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 65,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 11,
						language : 'oxpPCHeVNw0JBYc8',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 73,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 85,
						user_id : 7365733551882574181,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 52,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 51,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 56,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 86,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 41,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 86,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 8,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 80,
						document_id : 4576212173555672077,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 89,
					),
				),
				quote_offset : 4,
				todo_item_id : 34,
			),
			date : 31,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 2,
						reaction : $client->reactionEmpty(...),
						count : 6,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 11,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 48,
					),
				),
			),
			ttl_period : 24,
		),
	),
	new_encrypted_messages : array(
		$client->encryptedMessage(
			random_id : -2527620550910668783,
			chat_id : 12,
			date : 59,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			file : $client->encryptedFileEmpty(),
		),
		$client->encryptedMessageService(
			random_id : 8294038262254286777,
			chat_id : 56,
			date : 81,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 72,
				peer_id : $client->peerUser(
					user_id : -1849248874317382170,
				),
			),
			pts : 6,
			pts_count : 26,
		),
		$client->updateMessageID(
			id : 60,
			random_id : 9111510423478441417,
		),
		$client->updateDeleteMessages(
			messages : array(84),
			pts : 28,
			pts_count : 79,
		),
		$client->updateUserTyping(
			user_id : -6727249120256565646,
			top_msg_id : 66,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -6618785541216536880,
			from_id : $client->peerUser(
				user_id : 6268700544022437220,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 8544847215109754760,
				self_participant : $client->chatParticipant(
					user_id : -2066997314490099058,
					inviter_id : 2171878364944456096,
					date : 42,
				),
			),
		),
		$client->updateUserStatus(
			user_id : -8848809797976021651,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -6297564136519822220,
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
			date : 38,
			device : 'vTawm3efxPG5j9KJ',
			location : 'nizGjJ9bt1lXqYgH',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -8039345436641009936,
				chat_id : 56,
				date : 35,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 13,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 75,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 19,
			),
			date : 85,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 94,
			max_date : 2,
			date : 3,
		),
		$client->updateChatParticipantAdd(
			chat_id : 5054199522138544402,
			user_id : 6370951092335643556,
			inviter_id : 5505718994393010923,
			date : 21,
			version : 4,
		),
		$client->updateChatParticipantDelete(
			chat_id : 1946002930287129063,
			user_id : 3259469551715506914,
			version : 36,
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
					id : 42,
					ip_address : '127.0.0.1',
					port : 18,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : -7970976231635500051,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : true,
				mute_until : 57,
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
			inbox_date : 70,
			type : 'XRSjAK47L3zfUBt1',
			message : 'j4ab0rEN6psiwF1H',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 50,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 52,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 24,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 61,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 13,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 99,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 90,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 80,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 2,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 14,
					language : 'rHJPspbGW56jQhel',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 48,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 13,
					user_id : -5446966351929633095,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 93,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 82,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 18,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 3,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 39,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 59,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 38,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 45,
					document_id : 4327455078495090874,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 24,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-1691546600570774794),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-4271351306955725599),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-2099967765068912247),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(3282029086554441976),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 2889023752120684360,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 50,
			peer : $client->peerUser(
				user_id : -8731262240958649745,
			),
			top_msg_id : 58,
			max_id : 26,
			still_unread_count : 28,
			pts : 5,
			pts_count : 92,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -6453341099985434108,
			),
			max_id : 43,
			pts : 29,
			pts_count : 16,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 3471456424576275985,
				url : 'https://docs.liveproto.dev',
			),
			pts : 69,
			pts_count : 46,
		),
		$client->updateReadMessagesContents(
			messages : array(38),
			pts : 26,
			pts_count : 98,
			date : 51,
		),
		$client->updateChannelTooLong(
			channel_id : 2720279292357312897,
			pts : 59,
		),
		$client->updateChannel(
			channel_id : -8589749241646233257,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 75,
				peer_id : $client->peerUser(
					user_id : 2823650910364979808,
				),
			),
			pts : 64,
			pts_count : 61,
		),
		$client->updateReadChannelInbox(
			folder_id : 47,
			channel_id : 9049468296644693449,
			max_id : 26,
			still_unread_count : 29,
			pts : 64,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -724519279823510601,
			messages : array(85),
			pts : 28,
			pts_count : 35,
		),
		$client->updateChannelMessageViews(
			channel_id : -1178701558439818710,
			id : 42,
			views : 100,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 4547830812406506906,
			user_id : 862342992770901305,
			is_admin : false,
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
					installed_date : 25,
					id : 1012353297694754713,
					access_hash : 7277519344936128538,
					title : 'vPDLwl5xYIjihycm',
					short_name : 'WUSg2ZYPFpG4vbMR',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 75,
					thumb_version : 10,
					thumb_document_id : 350399582727723933,
					count : 96,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : '4nM0P6UyClxKJeL8',
						documents : array(3484954228310422271),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : -5840890940195229163,
						keyword : array('hGNYzfm1iI2LxBVH'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : 31246506376488598,
					),
					$client->document(
						id : 5956117241342199962,
						access_hash : -6266756648268635059,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 22,
						mime_type : 'Nux3EY1mGnjdV8O9',
						size : 7190567821307677471,
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
						dc_id : 23,
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
			order : array(-5142007521611244772),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -7330461953977550727,
			user_id : -427482397537607485,
			query : 'o1j7nKWiJgx9Tm5b',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'djFOm7JPu4hlD3ZG',
		),
		$client->updateBotInlineSend(
			user_id : -3448948219071135591,
			query : 'vVG9fAIDSlpM3Kot',
			geo : $client->geoPointEmpty(),
			id : 'HgyPNZaE8M5QzS6x',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 88,
				id : 4457898584650193076,
				access_hash : 2122899726279037428,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 25,
				peer_id : $client->peerUser(
					user_id : -8858758027351949593,
				),
			),
			pts : 76,
			pts_count : 60,
		),
		$client->updateBotCallbackQuery(
			query_id : 2447629285274789557,
			user_id : 2857682930509695667,
			peer : $client->peerUser(
				user_id : 5175049390775795601,
			),
			msg_id : 46,
			chat_instance : -2311996214812847692,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'TfILtXcCQGsjMibx',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 83,
				peer_id : $client->peerUser(
					user_id : -7158185484279288687,
				),
			),
			pts : 98,
			pts_count : 64,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 533902423424700066,
			user_id : -4010570889162317025,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 42,
				id : -5166988634719684511,
				access_hash : 7142594771466524205,
			),
			chat_instance : 1623466492053307637,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'bhwnNHm9jUD51T8d',
		),
		$client->updateReadChannelOutbox(
			channel_id : -8141958406263570280,
			max_id : 73,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : -9142931229319863463,
			),
			top_msg_id : 84,
			saved_peer_id : $client->peerUser(
				user_id : 8454054845169216926,
			),
			draft : $client->draftMessageEmpty(
				date : 16,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 6831464394925187556,
			webpage : $client->webPageEmpty(
				id : -5593454111444708682,
				url : 'https://docs.liveproto.dev',
			),
			pts : 28,
			pts_count : 64,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 25,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -8353633786242989950,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 34,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -2797017606765844876,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 18,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : '37UiqTBuIhWgCv1e',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 834142725799554064,
			data : $client->dataJSON(
				data : 'IxUKElOVeugtbL2A',
			),
			timeout : 74,
		),
		$client->updateBotShippingQuery(
			query_id : 2713937416088638670,
			user_id : 5931019011077038267,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'ycx3sviSM5pdZJ9P',
				street_line2 : 'EkcJfmCj2sAFyUbg',
				city : 'r2L9Qui6aS4WeJD7',
				state : 'x6CNmJkHERMjp5vX',
				country_iso2 : '0VwnEgIC4i8PxYmM',
				post_code : '2iclAGUpbrS3DR1z',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 2215728871147090993,
			user_id : 8245987128331663186,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'gEk5s1hcYuiJzLVf',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'dILCqrUcFzvbpPOt',
					street_line2 : 'Czom74AGMEidcskf',
					city : 'xHKj3h2149VRwcnm',
					state : '7FlR4erPhynjTZ8A',
					country_iso2 : 'm1yi0tXuCgGbZJD7',
					post_code : '3qjsS07WgdUcmt2r',
				),
			),
			shipping_option_id : 'Vk8Wh5mF34Pzix07',
			currency : 'uOfMdhmtU7vs2TbC',
			total_amount : 8435045055471387702,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -6867839780857040585,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : '1Hm58U94czKYJMyj',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'LkubhzeKAG9pmjNg',
				from_version : 36,
				version : 95,
				strings : array(
					$client->langPackString(
						key : 'UDNTZY07o63ny4gq',
						value : 'YkKhwdBEJu8iM2Vn',
					),
					$client->langPackStringPluralized(
						key : 'XoxSg0CWOYKA65nw',
						zero_value : 'EmlkCut0Y9LMRqbN',
						one_value : 'DwGC4UYEu0KXOgez',
						two_value : 'Yb5WVm4UeiRlOEuJ',
						few_value : 'E4xGnPlUF1gdeW3X',
						many_value : 'njaDWoXh280R9JyF',
						other_value : 'yndAr1JO4vU3sRaW',
					),
					$client->langPackStringDeleted(
						key : 'UZAtr4Ti5f2BXV7n',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 8941201896408544053,
			top_msg_id : 68,
			saved_peer_id : $client->peerUser(
				user_id : -533628944570747653,
			),
			messages : array(77),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -3100238830427484428,
			available_min_id : 95,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -4486420469459485200,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : 188316126152839719,
			),
		),
		$client->updateMessagePoll(
			poll_id : 5031729007097171061,
			poll : $client->poll(
				id : 7305390120668661120,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : 'aLylu7qDwjUI6BcS',
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
				close_period : 93,
				close_date : 100,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 45,
					),
				),
				total_voters : 72,
				recent_voters : array(
					$client->peerUser(
						user_id : -5525224389563248273,
					),
					$client->peerChat(
						chat_id : -7142809695394127570,
					),
					$client->peerChannel(
						channel_id : -2683908530417979683,
					),
				),
				solution : 'LtndBHS2Mqp4vQGE',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 83,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 58,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 85,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 5,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 77,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 11,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 36,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 63,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 50,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 80,
						language : 'C3wh4BVzmykQbMYZ',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 2,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 76,
						user_id : -4750593139055994961,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 19,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 100,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 33,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 8,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 64,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 89,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 71,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 24,
						document_id : 4150478880062178055,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 58,
					),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 4771579285342316203,
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
				until_date : 69,
			),
			version : 55,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : 2961950466466427777,
					),
					folder_id : 28,
				),
			),
			pts : 1,
			pts_count : 8,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -8842833262973298632,
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
				geo_distance : 32,
				request_chat_title : 'fKN4DoI0VW8MLgOm',
				request_chat_date : 9,
				business_bot_id : -7079776425788056133,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -4890181050541469500,
				registration_month : 'i2JvXWdSEoZCfjq8',
				phone_country : '+1234567890',
				name_change_date : 83,
				photo_change_date : 72,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : 4048204961537400642,
					),
					expires : 53,
					distance : 24,
				),
				$client->peerSelfLocated(
					expires : 8,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 70,
				peer_id : $client->peerUser(
					user_id : 5980917040265798749,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -1134054228697849493,
			),
			messages : array(2),
			sent_messages : array(46),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 2148264730107740767,
				access_hash : -1182548217607090612,
				slug : 'TaspewucrVY57EAZ',
				title : 'KEqmW0zFfaRBQVkX',
				document : $client->documentEmpty(
					id : -1129604249578758415,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 98,
						outbox_accent_color : 43,
						message_colors : array(22),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'Jt9ZVsK40Qg2qNWR',
				installs_count : 98,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 5940086066412934623,
			),
			msg_id : 81,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -70274708857753673,
			peer : $client->peerUser(
				user_id : 5711655483546097736,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 91,
		),
		$client->updateDialogFilter(
			id : 33,
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
				id : 44,
				title : $client->textWithEntities(
					text : 'y7pQuiWHYEAMRt8T',
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
				emoticon : 'h21soZteByR80QAT',
				color : 94,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(54),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -2527809595968331287,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : 1089723353983110626,
			id : 1,
			forwards : 16,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -8365493540098045862,
			top_msg_id : 80,
			read_max_id : 15,
			broadcast_id : 7839783231906326049,
			broadcast_post : 8,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -5800878448385442603,
			top_msg_id : 42,
			read_max_id : 26,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 538187004556822311,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : 2538499334923816239,
			top_msg_id : 16,
			from_id : $client->peerUser(
				user_id : -5165444612657589111,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 231325334989362719,
			),
			messages : array(13),
			pts : 45,
			pts_count : 76,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 3533003089911077230,
			messages : array(2),
			pts : 97,
			pts_count : 39,
		),
		$client->updateChat(
			chat_id : 3511496442172301884,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 3296010325555243607,
				access_hash : 5708551295142530655,
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
						user_id : 659337373934606004,
					),
					date : 26,
					active_date : 78,
					source : 14,
					volume : 73,
					about : '2KkvUuecySIzYwfl',
					raise_hand_rating : 4031968348255111015,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'AyvJ8qRTo6jbn4lS',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 42,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'mbP9uDHTB1KY2oiC',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 51,
					),
					paid_stars_total : 5423649761483548665,
				),
			),
			version : 81,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : 987937479752319912,
			),
			call : $client->groupCallDiscarded(
				id : 8765787622211625004,
				access_hash : -256062738690047226,
				duration : 16,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 7056109591311096700,
			),
			ttl_period : 38,
		),
		$client->updateChatParticipant(
			chat_id : -2551416836724281661,
			date : 62,
			actor_id : -2914957937096382782,
			user_id : -8408843909426372340,
			prev_participant : $client->chatParticipant(
				user_id : -3799413365581737216,
				inviter_id : 6913179750583128977,
				date : 58,
			),
			new_participant : $client->chatParticipant(
				user_id : 3084718990201813925,
				inviter_id : -1067038854674252332,
				date : 85,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'LYFxWHNvadM5lnZr',
				admin_id : -6525048855805810140,
				date : 45,
				start_date : 10,
				expire_date : 11,
				usage_limit : 51,
				usage : 74,
				requested : 80,
				subscription_expired : 45,
				title : 'Gs3QudZUR7D6IMo5',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 24,
					amount : -8817579690749514963,
				),
			),
			qts : 97,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 5090580467118787449,
			date : 12,
			actor_id : 7282287033285918106,
			user_id : -4717432781150484902,
			prev_participant : $client->channelParticipant(
				user_id : 819616728412014917,
				date : 54,
				subscription_until_date : 40,
			),
			new_participant : $client->channelParticipant(
				user_id : 4776819007493532031,
				date : 40,
				subscription_until_date : 46,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'tjTslpNhuc0xoKZX',
				admin_id : -9202112429588552751,
				date : 51,
				start_date : 87,
				expire_date : 6,
				usage_limit : 19,
				usage : 100,
				requested : 84,
				subscription_expired : 69,
				title : '7x95kpeIrOQ4dGq8',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 91,
					amount : -2270618277481325497,
				),
			),
			qts : 77,
		),
		$client->updateBotStopped(
			user_id : 8933120333284288340,
			date : 86,
			stopped : true,
			qts : 63,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'QZhWUmjIiAL5X9OG',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -5666250700720230278,
			),
			bot_id : 2529129951318713907,
			commands : array(
				$client->botCommand(
					command : 'GAZjuxlctF5278ak',
					description : 'qx6W74eawflQL1Zc',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 5836394293043459690,
			),
			requests_pending : 50,
			recent_requesters : array(-7007665048310449562),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 2695784972199608792,
			),
			date : 10,
			user_id : -3461937111216157836,
			about : '4F1dvmbQ2EhISZ9r',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'nAhOPXg5qJYycUBR',
				admin_id : 1362863247059954229,
				date : 2,
				start_date : 79,
				expire_date : 9,
				usage_limit : 20,
				usage : 74,
				requested : 45,
				subscription_expired : 81,
				title : 'rT1vhDqQVIs8ZNCP',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 17,
					amount : 2783146632171223414,
				),
			),
			qts : 39,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -4180866108634888682,
			),
			msg_id : 4,
			top_msg_id : 70,
			saved_peer_id : $client->peerUser(
				user_id : -2965716513481881855,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 94,
						reaction : $client->reactionEmpty(...),
						count : 75,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 2,
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
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 4818177134659614929,
		),
		$client->updateBotMenuButton(
			bot_id : -9177210346408626388,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 8430615413764863020,
			),
			msg_id : 83,
			transcription_id : 1668228896613197228,
			text : 'ix8gX03NrIhyJCFQ',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -1263426600099321142,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -8503523132288519602,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 598509508220994866,
			),
			msg_id : 79,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 54,
					h : 94,
					thumb : $client->photoSizeEmpty(
						type : '5njgPUXTKGtm0Sax',
					),
					video_duration : 17,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : 6231186246504220743,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 1893467335368470990,
			),
			story : $client->storyItemDeleted(
				id : 94,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -3646107010874243872,
			),
			max_id : 32,
		),
		$client->updateStoryID(
			id : 57,
			random_id : -4881754869596569728,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 67,
				cooldown_until_date : 67,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 7570690133857905058,
			),
			story_id : 55,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 4055721624151997697,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'gQqRvc6oDMswFEU9',
				user_id : -4834615787513373852,
				giveaway_msg_id : 77,
				date : 44,
				expires : 97,
				used_gift_slug : 'KDOotbPA9YUnXwaL',
				multiplier : 100,
				stars : 8159937030426343484,
			),
			qts : 94,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -110321421991251577,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 4147463233609187710,
			),
			wallpaper : $client->wallPaper(
				id : 1900185908123996437,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -7824449196513594754,
				slug : 'ZA1g0VsRuXl4zqbE',
				document : $client->documentEmpty(
					id : 4398221232401021887,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 54,
					second_background_color : 90,
					third_background_color : 50,
					fourth_background_color : 68,
					intensity : 81,
					rotation : 37,
					emoticon : 'Bw1CedlIK43ZruWt',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 5924260156039347486,
			),
			msg_id : 96,
			date : 1,
			actor : $client->peerUser(
				user_id : 6770773429441018003,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'CIG6z4U8upw7tbD2',
				),
				$client->reactionCustomEmoji(
					document_id : -5505572560141703822,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'tldg14PuJEp3L9AK',
				),
				$client->reactionCustomEmoji(
					document_id : -2944253022332996791,
				),
				$client->reactionPaid(),
			),
			qts : 4,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -4276417759600617352,
			),
			msg_id : 26,
			date : 62,
			reactions : array(
				$client->reactionCount(
					chosen_order : 2,
					reaction : $client->reactionEmpty(),
					count : 57,
				),
			),
			qts : 47,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 3201467298268014422,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 6846924589041736347,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 97,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'kMIVWjgDZ3Xas9f7',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 100,
					shortcut : 'M7WizYxXf6U1tlyT',
					top_message : 30,
					count : 22,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 13,
				shortcut : 'gjrD35QctPqLNHTY',
				top_message : 14,
				count : 79,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 89,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 13,
				peer_id : $client->peerUser(
					user_id : -2192507006696478243,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 14,
			messages : array(54),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'SDmFMkh4yLZwJYsB',
				user_id : 5837075771416510160,
				dc_id : 92,
				date : 97,
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
			qts : 66,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : '25P8bBCeckZiaQA3',
			message : $client->messageEmpty(
				id : 21,
				peer_id : $client->peerUser(
					user_id : -7598314321619148484,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 73,
				peer_id : $client->peerUser(
					user_id : -8906921056725674526,
				),
			),
			qts : 34,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 's9xDmTlNtKWhRc7w',
			message : $client->messageEmpty(
				id : 54,
				peer_id : $client->peerUser(
					user_id : 9146573306048318151,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 20,
				peer_id : $client->peerUser(
					user_id : -14467210202938524,
				),
			),
			qts : 96,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'LW9vFz4QbV68PZNU',
			peer : $client->peerUser(
				user_id : 8496746259225854622,
			),
			messages : array(82),
			qts : 27,
		),
		$client->updateNewStoryReaction(
			story_id : 90,
			peer : $client->peerUser(
				user_id : -2938151885891905993,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -4952804724204390788,
				nanos : 49,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -8696956305125886484,
			user_id : -6569828011554433335,
			connection_id : 'W8LATC50Yqsaztdu',
			message : $client->messageEmpty(
				id : 27,
				peer_id : $client->peerUser(
					user_id : 5098257402577316268,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 24,
				peer_id : $client->peerUser(
					user_id : 6918372746898200125,
				),
			),
			chat_instance : -4187033063536657408,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 8189292912067967577,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : -1289387261826188533,
					nanos : 70,
				),
				available_balance : $client->starsAmount(
					amount : 2712841149094808904,
					nanos : 95,
				),
				overall_revenue : $client->starsAmount(
					amount : -756538663057464437,
					nanos : 24,
				),
				next_withdrawal_at : 22,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 435329177277880200,
			payload : 'lLiKhZezkvHdtmxp',
			qts : 78,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 94,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 62,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -7226854123004199048,
				access_hash : -2372763315574487373,
			),
			sub_chain_id : 100,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 78,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -8729925016258259148,
			saved_peer_id : $client->peerUser(
				user_id : 8280868625135860959,
			),
			read_max_id : 21,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 8022017122500656063,
			saved_peer_id : $client->peerUser(
				user_id : -4067251875943611806,
			),
			read_max_id : 53,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 5889920926985509841,
			saved_peer_id : $client->peerUser(
				user_id : -8807691778313125816,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : -1035587390457686515,
				access_hash : -3299455692868283029,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 60,
				from_id : $client->peerUser(
					user_id : -1647273679001112777,
				),
				date : 10,
				message : $client->textWithEntities(
					text : '5BoQWXSFdM3R7eYl',
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
				paid_message_stars : -7901088995064423065,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : 1256432505645697134,
				access_hash : -5303587342610617200,
			),
			from_id : $client->peerUser(
				user_id : -575051017405419461,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : -4352039690841599449,
			),
			topic_id : 3,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : 162867869708006029,
			),
			order : array(87),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : 4899639856718608153,
				access_hash : -9053148508125869779,
			),
			messages : array(43),
		),
		$client->updateStarGiftAuctionState(
			gift_id : -8421414582465674299,
			state : $client->starGiftAuctionState(
				version : 72,
				start_date : 25,
				end_date : 93,
				min_bid_amount : -7348716749884273320,
				bid_levels : array(
					$client->auctionBidLevel(
						pos : 91,
						amount : -6110254584835277441,
						date : 5,
					),
				),
				top_bidders : array(1427410817881837740),
				next_round_at : 61,
				gifts_left : 76,
				current_round : 14,
				total_rounds : 80,
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : -9127274666940349859,
			text : 'Q5Ni9FuOnDMyCKva',
		),
		$client->updateBotSubscriptionExpire(
			user_id : -7374003015191838809,
			payload : 'bsW3ByTLISn4dkqg',
			until_date : 8,
			qts : 32,
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : -6614303842832441473,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : 1167170705953641443,
				bid_date : 81,
				min_bid_amount : 169902670338889407,
				peer : $client->peerUser(
					user_id : -7159852780863522872,
				),
				acquired_count : 16,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7464730575587418400,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 5348533018015389957,
			title : 'Nt64FwRdnTULpi0l',
			photo : $client->chatPhotoEmpty(),
			participants_count : 74,
			date : 7,
			version : 2,
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
				until_date : 13,
			),
		),
		$client->chatForbidden(
			id : -7565537784472273519,
			title : '2yic3C6sFMZeTtLj',
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
			id : 7778250231589232773,
			access_hash : 7197853067668170098,
			title : 'HCqAP8YVoGvupZ0L',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 97,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'k0chfZUiBPqgvyts',
					reason : 'tQPJDacMYe7B5Ehz',
					text : '2dMfr0sF6KqP1V8j',
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
				until_date : 27,
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
				until_date : 64,
			),
			participants_count : 36,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 0,
			),
			color : $client->peerColor(
				color : 70,
				background_emoji_id : -5300519548470444982,
			),
			profile_color : $client->peerColor(
				color : 77,
				background_emoji_id : -2297701025803355831,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 37,
			subscription_until_date : 98,
			bot_verification_icon : -4115148393583133250,
			send_paid_messages_stars : 3336382583780212500,
			linked_monoforum_id : 6640095519220753290,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 2062523394700804064,
			access_hash : -1375182060244096645,
			title : 'MO6QLRuwrWBY2cT5',
			until_date : 23,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4205523263104250536,
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
			id : -6832471279733231979,
			access_hash : -2311128904162090697,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 34,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '1HPUK2boqT7xLhtV',
					reason : 'qy5jnAsQ341aoCLg',
					text : '2BiKPfM0cdlJDmE8',
				),
			),
			bot_inline_placeholder : 'JECwFIdjY39pr8KG',
			lang_code : 'yzIg12QEn846rvOA',
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
				max_id : 45,
			),
			color : $client->peerColor(
				color : 98,
				background_emoji_id : -7714117880887699680,
			),
			profile_color : $client->peerColor(
				color : 25,
				background_emoji_id : 3699555940979667784,
			),
			bot_active_users : 26,
			bot_verification_icon : 8584567968148061183,
			send_paid_messages_stars : -2874653159726526230,
		),
	),
	intermediate_state : $client->updates->state(
		pts : 24,
		qts : 32,
		date : 18,
		seq : 76,
		unread_count : 5,
	),
);
```