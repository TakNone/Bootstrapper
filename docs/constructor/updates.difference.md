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
			id : 40,
			peer_id : $client->peerUser(
				user_id : -6070818827194955158,
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
			id : 46,
			from_id : $client->peerUser(
				user_id : -7695471735192864761,
			),
			from_boosts_applied : 15,
			peer_id : $client->peerUser(
				user_id : -6019979009693803452,
			),
			saved_peer_id : $client->peerUser(
				user_id : -7179738535665501992,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 8074713492728845570,
				),
				from_name : 'yYqvP0duTVWNrA3i',
				date : 79,
				channel_post : 12,
				post_author : 'rRZvzC5H4gFiJmPU',
				saved_from_peer : $client->peerUser(
					user_id : 7642721081780287320,
				),
				saved_from_msg_id : 31,
				saved_from_id : $client->peerUser(
					user_id : -1608980392437651217,
				),
				saved_from_name : 'jFBeTtIXdfobZR6S',
				saved_date : 58,
				psa_type : 'XGaDrOZn80t7spEj',
			),
			via_bot_id : -82868539200175617,
			via_business_bot_id : 5501630586929512386,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 54,
				reply_to_peer_id : $client->peerUser(
					user_id : -3469998836441977016,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'ER2BILN9y5aiGeWF',
					date : 52,
					channel_post : 57,
					post_author : 'rSuyFq8seM617gN2',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 16,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'XoH1K2e0hbYfzMqx',
					saved_date : 17,
					psa_type : 'TIhGFMo8Kcrjle1d',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 85,
				quote_text : '6vN95yMeqlVxtXaY',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 99,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 66,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 28,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 37,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 38,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 8,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 39,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 82,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 92,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 81,
						language : 'ZSRzxJkF7QDfrWwa',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 28,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 21,
						user_id : -8303349878862514799,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 49,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 41,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 0,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 14,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 58,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 45,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 58,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 28,
						document_id : -4561737691952703068,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 59,
					),
				),
				quote_offset : 37,
				todo_item_id : 20,
			),
			date : 12,
			message : 'rPRuIoNycs3fVYOm',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 15,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 83,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 45,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 38,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 89,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 92,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 4,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 0,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 65,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 84,
					language : '487YdacgfPJwsy9z',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 57,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 90,
					user_id : 2645701270343568668,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 12,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 30,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 92,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 6,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 47,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 8,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 28,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 86,
					document_id : 4026046692576793744,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 83,
				),
			),
			views : 97,
			forwards : 91,
			replies : $client->messageReplies(
				comments : true,
				replies : 74,
				replies_pts : 25,
				recent_repliers : array(
					$client->peerUser(
						user_id : 557137588653416427,
					),
					$client->peerChat(
						chat_id : -6507692327549175547,
					),
					$client->peerChannel(
						channel_id : 3333388043181219013,
					),
				),
				channel_id : 5595886118837875763,
				max_id : 25,
				read_max_id : 17,
			),
			edit_date : 11,
			post_author : 'wVS6qDYTjnGAtbky',
			grouped_id : -4532732429339184226,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 35,
						reaction : $client->reactionEmpty(...),
						count : 58,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 30,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 33,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'GsjXL2c8B049pbwY',
					reason : 'dC9XHfRxStMObkY1',
					text : '6Xo5gEYWLu9VmpDb',
				),
			),
			ttl_period : 52,
			quick_reply_shortcut_id : 70,
			effect : 6883881388518659160,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'uK5RGisgzVCUT0Ev',
				text : $client->textWithEntities(
					text : '1H3BCiyKjPwdqD8Q',
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
			report_delivery_until_date : 34,
			paid_message_stars : -6378308486841118037,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -7189944241666635875,
					nanos : 95,
				),
				schedule_date : 84,
			),
			schedule_repeat_period : 66,
			summary_from_language : 'Qs1Me09kOc7HdXby',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 78,
			from_id : $client->peerUser(
				user_id : 4236934375523027377,
			),
			peer_id : $client->peerUser(
				user_id : -8629391778916271483,
			),
			saved_peer_id : $client->peerUser(
				user_id : 3952150446830010970,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 33,
				reply_to_peer_id : $client->peerUser(
					user_id : 4334019689967563071,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'JwmbDSYWZPHV0ytL',
					date : 85,
					channel_post : 100,
					post_author : 'tlXjCusAIx57VSQW',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 44,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'edLwTlIsZYHhNxO2',
					saved_date : 81,
					psa_type : 'lYdZwxFzSNW9kIL2',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 7,
				quote_text : 'UYo3C5umdiWBvVRS',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 86,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 33,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 12,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 77,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 73,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 31,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 34,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 0,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 18,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 73,
						language : 'zlqiXu1mvByabO5d',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 70,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 23,
						user_id : -2104088840792615799,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 52,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 60,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 93,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 13,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 4,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 80,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 15,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 36,
						document_id : 8921583120079168223,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 50,
					),
				),
				quote_offset : 99,
				todo_item_id : 58,
			),
			date : 34,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 100,
						reaction : $client->reactionEmpty(...),
						count : 35,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 44,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 66,
					),
				),
			),
			ttl_period : 37,
		),
	),
	new_encrypted_messages : array(
		$client->encryptedMessage(
			random_id : 2271077142775876149,
			chat_id : 34,
			date : 38,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			file : $client->encryptedFileEmpty(),
		),
		$client->encryptedMessageService(
			random_id : -1646051301264927174,
			chat_id : 90,
			date : 57,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 86,
				peer_id : $client->peerUser(
					user_id : 2806232487030239020,
				),
			),
			pts : 83,
			pts_count : 63,
		),
		$client->updateMessageID(
			id : 25,
			random_id : -5925490324771359445,
		),
		$client->updateDeleteMessages(
			messages : array(0),
			pts : 53,
			pts_count : 88,
		),
		$client->updateUserTyping(
			user_id : 5920030013457071305,
			top_msg_id : 46,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -5222467202394637028,
			from_id : $client->peerUser(
				user_id : -3430432746809773530,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 2821710702610341482,
				self_participant : $client->chatParticipant(
					user_id : -2040642459027872605,
					inviter_id : -6056676795412239010,
					date : 54,
				),
			),
		),
		$client->updateUserStatus(
			user_id : 3390481083056773461,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 7522139255043769152,
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
			date : 63,
			device : 'wFQYObCfno90Utjm',
			location : 'SAFJDR6ty4TnPodl',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -6884376784174237174,
				chat_id : 85,
				date : 54,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 90,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 12,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 26,
			),
			date : 53,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 81,
			max_date : 81,
			date : 86,
		),
		$client->updateChatParticipantAdd(
			chat_id : -6596593118380851131,
			user_id : -4740461076755322635,
			inviter_id : 684762147138673570,
			date : 36,
			version : 92,
		),
		$client->updateChatParticipantDelete(
			chat_id : 8761992299047606639,
			user_id : 3102446810022304971,
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
					id : 5,
					ip_address : '127.0.0.1',
					port : 29,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : 1053636476286450171,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : false,
				mute_until : 81,
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
			inbox_date : 90,
			type : 'SMpxz0Isbt6qwoEm',
			message : 'Hl3JYqszStI6FvRb',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 15,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 86,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 80,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 99,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 3,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 56,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 41,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 7,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 45,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 24,
					language : 'fFz1AEwjgqRclIKs',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 99,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 64,
					user_id : 4673178218245647705,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 33,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 93,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 0,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 1,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 68,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 52,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 32,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 72,
					document_id : 4758092439148384244,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 46,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-6525251156752978875),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(5203163694066911012),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-3932122585061127267),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(6660453505311209467),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -8491221933545806763,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 97,
			peer : $client->peerUser(
				user_id : -1048357744981761635,
			),
			top_msg_id : 46,
			max_id : 94,
			still_unread_count : 73,
			pts : 87,
			pts_count : 48,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 7604478513942882654,
			),
			max_id : 88,
			pts : 27,
			pts_count : 17,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -1058234595980439828,
				url : 'https://docs.liveproto.dev',
			),
			pts : 65,
			pts_count : 2,
		),
		$client->updateReadMessagesContents(
			messages : array(59),
			pts : 48,
			pts_count : 1,
			date : 43,
		),
		$client->updateChannelTooLong(
			channel_id : -6697617065191427840,
			pts : 48,
		),
		$client->updateChannel(
			channel_id : -7667686551102035564,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 21,
				peer_id : $client->peerUser(
					user_id : -6286845211748826507,
				),
			),
			pts : 22,
			pts_count : 20,
		),
		$client->updateReadChannelInbox(
			folder_id : 97,
			channel_id : 3933985390137356001,
			max_id : 37,
			still_unread_count : 43,
			pts : 13,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -6463680301919840126,
			messages : array(48),
			pts : 50,
			pts_count : 67,
		),
		$client->updateChannelMessageViews(
			channel_id : -5979767889361584963,
			id : 43,
			views : 2,
		),
		$client->updateChatParticipantAdmin(
			chat_id : -8511144308090754731,
			user_id : -3109195781882312518,
			is_admin : false,
			version : 75,
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
					installed_date : 29,
					id : 857591319339401008,
					access_hash : 1267296868729782783,
					title : 'v1kSzNQMAD0PtqfI',
					short_name : 'c87ITB0hJnENUWau',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 44,
					thumb_version : 8,
					thumb_document_id : 8020143215320215731,
					count : 67,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'aEsLwVMWFf1vQk36',
						documents : array(-5575901382410264987),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : -3014976092844703683,
						keyword : array('OqBuAPrxv1VnIXtk'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : -1630447256302024179,
					),
					$client->document(
						id : -1052780437976079965,
						access_hash : -1569037274166797766,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 84,
						mime_type : 'znoGLJskDlQBcIRw',
						size : 1861072882299181344,
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
						dc_id : 50,
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
			order : array(-4804786355984444136),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -6402377885389435136,
			user_id : -2880675411783490250,
			query : 'EGinZHoMscdRbNXO',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'U384FEVpvNczfdqs',
		),
		$client->updateBotInlineSend(
			user_id : -9102515581203223153,
			query : 'TwPdJkuWC0E6hQZO',
			geo : $client->geoPointEmpty(),
			id : 'oSw6HTCp2Nvf0jcm',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 25,
				id : 4868076945983897800,
				access_hash : -5696903827942629515,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 3,
				peer_id : $client->peerUser(
					user_id : 3573897079692366483,
				),
			),
			pts : 24,
			pts_count : 5,
		),
		$client->updateBotCallbackQuery(
			query_id : 1070912337612676852,
			user_id : -1072139889869275758,
			peer : $client->peerUser(
				user_id : -1220538589035494363,
			),
			msg_id : 42,
			chat_instance : 3824836051819340306,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'uYGy8m4LsvCPOxAE',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 67,
				peer_id : $client->peerUser(
					user_id : 310134850781502834,
				),
			),
			pts : 68,
			pts_count : 49,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -4735690870751857541,
			user_id : 6828086950658845686,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 55,
				id : -4151685424804321028,
				access_hash : -2479941118410803782,
			),
			chat_instance : 5073011698253878066,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'a4znbdPXg1QxpJcr',
		),
		$client->updateReadChannelOutbox(
			channel_id : 4366651212553404280,
			max_id : 30,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 316051734930659446,
			),
			top_msg_id : 37,
			saved_peer_id : $client->peerUser(
				user_id : 6455930563626595493,
			),
			draft : $client->draftMessageEmpty(
				date : 72,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 8155602229386705540,
			webpage : $client->webPageEmpty(
				id : 1176343371348984923,
				url : 'https://docs.liveproto.dev',
			),
			pts : 59,
			pts_count : 40,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 24,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 6888448190888535899,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 79,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -3432270338769038941,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 20,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'b0UmFgwc5MjNQA1s',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 5705272885424145169,
			data : $client->dataJSON(
				data : 'wFy68YGtDlaHhKUz',
			),
			timeout : 25,
		),
		$client->updateBotShippingQuery(
			query_id : -5853799103755329994,
			user_id : 7352546143069679048,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'wCyj2vBHDnW1TkIo',
				street_line2 : 'CNGBL1gbfaFdzX8q',
				city : 'wnbvh9yutXG83oRp',
				state : 'NYWPCXFwl8xcV4QJ',
				country_iso2 : 'iWUt2m4YOe5HbG7n',
				post_code : 'Rmu7Tfr6qCUBSHoX',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -7898674191049512709,
			user_id : -7119869817497548455,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'pJgD3lAhLCPEIj1q',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'sI6QTPJ0F5DGatyZ',
					street_line2 : '5njSpzMoseT9FKP1',
					city : 'NrukxjFfE6HD1psP',
					state : 'm74Rcrb8TABwJ6uQ',
					country_iso2 : '24vOg0p6ZlWt38ed',
					post_code : 'HmEZ7NsutB5eMcLR',
				),
			),
			shipping_option_id : 'w1tnNfd43lVuImoT',
			currency : 'ro4ZBJIwWSAvNpVy',
			total_amount : 3881034927700743956,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -5745404445229657628,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'BqOIxfEmJULb35QC',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'Sq093wkN5pyfFWvr',
				from_version : 21,
				version : 55,
				strings : array(
					$client->langPackString(
						key : 'gsB6KhLpUNRatGTP',
						value : 'sCWp619ABdFPJyNx',
					),
					$client->langPackStringPluralized(
						key : '1lsfmCpF985MbYGD',
						zero_value : '6ZPUp7GqHluyshze',
						one_value : 'XsiMaQzPY9nueHR0',
						two_value : 'KF0HfrLcwA3diQyp',
						few_value : 'f7GXQbcrptAYsBow',
						many_value : 'NDUcqJCy2AiSnkKb',
						other_value : 'B5iHhT69dxQutlVN',
					),
					$client->langPackStringDeleted(
						key : 'lwMbBIz8Ydp7VhcK',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 7284988041005470140,
			top_msg_id : 39,
			saved_peer_id : $client->peerUser(
				user_id : -2129877249584642021,
			),
			messages : array(58),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -1218714783250140966,
			available_min_id : 20,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -6445523421173038128,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : -3705076697791870920,
			),
		),
		$client->updateMessagePoll(
			poll_id : -3576497366709124012,
			poll : $client->poll(
				id : 4826773744678850177,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : 'XfaME13bKRBvqWLC',
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
				close_period : 2,
				close_date : 37,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 22,
					),
				),
				total_voters : 4,
				recent_voters : array(
					$client->peerUser(
						user_id : -3468970609379420288,
					),
					$client->peerChat(
						chat_id : -3758792489890407847,
					),
					$client->peerChannel(
						channel_id : 7931630416489638210,
					),
				),
				solution : 'xMryeCs3qQ7YOdiZ',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 91,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 67,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 51,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 59,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 22,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 58,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 67,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 99,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 41,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 97,
						language : '4bfqLRUw8S7IF21E',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 49,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 20,
						user_id : 7936485476123998432,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 92,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 94,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 71,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 11,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 34,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 3,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 89,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 1,
						document_id : 6585773861510424013,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 13,
					),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : -5033406973779727691,
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
				until_date : 46,
			),
			version : 77,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : -5450994400643832351,
					),
					folder_id : 94,
				),
			),
			pts : 84,
			pts_count : 73,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 5707881591581634936,
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
				geo_distance : 40,
				request_chat_title : 'Ny5h6jefrD28vWR3',
				request_chat_date : 42,
				business_bot_id : 603375008447631042,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -5765283913502609208,
				registration_month : 'gKiaVOG9AC0XShvB',
				phone_country : '+1234567890',
				name_change_date : 44,
				photo_change_date : 70,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : -9004603052523992686,
					),
					expires : 70,
					distance : 94,
				),
				$client->peerSelfLocated(
					expires : 83,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 62,
				peer_id : $client->peerUser(
					user_id : -8870709768150439925,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -9120068188322466158,
			),
			messages : array(66),
			sent_messages : array(86),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -6112433831941087565,
				access_hash : -5289322351739943993,
				slug : 'TtvQjSOClZubLJpU',
				title : 'WbpgMXkxAnUJu8YR',
				document : $client->documentEmpty(
					id : 8212994286157297830,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 44,
						outbox_accent_color : 65,
						message_colors : array(36),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'crLyqQwFdpe3MCiT',
				installs_count : 16,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 4380742339898743350,
			),
			msg_id : 93,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 1270407847734143216,
			peer : $client->peerUser(
				user_id : -5347847595149444637,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 31,
		),
		$client->updateDialogFilter(
			id : 80,
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
				id : 85,
				title : $client->textWithEntities(
					text : 'JnZSVTfqaYE63zAB',
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
				emoticon : 'YsoxIpTKDANz3kWG',
				color : 0,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(36),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 3738016743611505998,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -1706109948945220528,
			id : 72,
			forwards : 87,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 5925733653434838347,
			top_msg_id : 73,
			read_max_id : 58,
			broadcast_id : 6227631277809379718,
			broadcast_post : 59,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -5133772459416210254,
			top_msg_id : 16,
			read_max_id : 27,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -5723789051377298621,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -503107874527494038,
			top_msg_id : 55,
			from_id : $client->peerUser(
				user_id : 8846823932778270124,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -2507287220761356076,
			),
			messages : array(96),
			pts : 19,
			pts_count : 93,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 844223484202013840,
			messages : array(48),
			pts : 82,
			pts_count : 16,
		),
		$client->updateChat(
			chat_id : 280286811445283873,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 6165235651052445150,
				access_hash : 3886763558995921822,
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
						user_id : 7460267872420518636,
					),
					date : 10,
					active_date : 46,
					source : 55,
					volume : 86,
					about : 'Ns5QEHcpwFGdPajz',
					raise_hand_rating : -7562848880176728638,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'CuPkGbVRjLMeJW0A',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 0,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'dnbt2r5eVpKQm4Gh',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 90,
					),
					paid_stars_total : 5595278020574637510,
				),
			),
			version : 44,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : -280824887855387223,
			),
			call : $client->groupCallDiscarded(
				id : 900837319764051477,
				access_hash : 3471239510221544757,
				duration : 60,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -4894478987083916095,
			),
			ttl_period : 81,
		),
		$client->updateChatParticipant(
			chat_id : -1209816820049106898,
			date : 39,
			actor_id : -8014113526610034357,
			user_id : -5993003268717753272,
			prev_participant : $client->chatParticipant(
				user_id : -1113698334439832122,
				inviter_id : 7772094029228859427,
				date : 99,
			),
			new_participant : $client->chatParticipant(
				user_id : 3638738204015968,
				inviter_id : -3120351255977182370,
				date : 22,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'JtjlfoQ7DL9q3VNX',
				admin_id : -6453196560944382963,
				date : 16,
				start_date : 84,
				expire_date : 66,
				usage_limit : 65,
				usage : 98,
				requested : 98,
				subscription_expired : 1,
				title : 'UQVmTu1San2yheXs',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 75,
					amount : -1389429318338693800,
				),
			),
			qts : 38,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 4944685801016357644,
			date : 35,
			actor_id : -5181603949161187834,
			user_id : -6291286488274156521,
			prev_participant : $client->channelParticipant(
				user_id : 8400595817946935318,
				date : 33,
				subscription_until_date : 78,
			),
			new_participant : $client->channelParticipant(
				user_id : 2753204078515747487,
				date : 31,
				subscription_until_date : 64,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'yvLpUKd53XPYawTO',
				admin_id : -5226788365835062514,
				date : 45,
				start_date : 49,
				expire_date : 66,
				usage_limit : 64,
				usage : 4,
				requested : 75,
				subscription_expired : 37,
				title : 'TeZa9Pqg07UCtRrf',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 66,
					amount : 2797089210152355304,
				),
			),
			qts : 36,
		),
		$client->updateBotStopped(
			user_id : -5330452817987487896,
			date : 40,
			stopped : false,
			qts : 54,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'rmUavFn1XcjoiO8y',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -7513104343275691952,
			),
			bot_id : 723155327843066164,
			commands : array(
				$client->botCommand(
					command : 'Tynwp7Y4mtWkzJU2',
					description : '283lmvMQATHs5Dhg',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -9009817449071797280,
			),
			requests_pending : 28,
			recent_requesters : array(6999245413376445957),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -6458892223008920545,
			),
			date : 64,
			user_id : 8977575551686913677,
			about : 'ol1wmSDGeBzj9XcH',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'eRWva1gj670PF98J',
				admin_id : -2378639253852721626,
				date : 69,
				start_date : 71,
				expire_date : 41,
				usage_limit : 3,
				usage : 52,
				requested : 51,
				subscription_expired : 48,
				title : 'luIOkM8oFTmz13ZE',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 98,
					amount : 4553097849084179319,
				),
			),
			qts : 91,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -1249588082891597473,
			),
			msg_id : 38,
			top_msg_id : 17,
			saved_peer_id : $client->peerUser(
				user_id : -7803364576906462263,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 42,
						reaction : $client->reactionEmpty(...),
						count : 47,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 64,
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
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 1790248640325926079,
		),
		$client->updateBotMenuButton(
			bot_id : -7666106924770411731,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -268581991363197399,
			),
			msg_id : 96,
			transcription_id : -3145107244249435368,
			text : 'zJ1HWbganpS6ZkGc',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -2317619894336565610,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -2662202172111402594,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 1666792303573452707,
			),
			msg_id : 27,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 21,
					h : 65,
					thumb : $client->photoSizeEmpty(
						type : 'NyfoQqphKZSgOX9w',
					),
					video_duration : 48,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : 1201999598072011342,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -6514553859412803894,
			),
			story : $client->storyItemDeleted(
				id : 99,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -3314330659981071972,
			),
			max_id : 22,
		),
		$client->updateStoryID(
			id : 71,
			random_id : -453438394845078803,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 67,
				cooldown_until_date : 90,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 3342360195032212145,
			),
			story_id : 7,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 4846542160762698609,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'BgCMIpQmofSE028h',
				user_id : -5196074718401529596,
				giveaway_msg_id : 64,
				date : 64,
				expires : 48,
				used_gift_slug : 'xoYWn0GS85pNmcBL',
				multiplier : 39,
				stars : 2165047638738772047,
			),
			qts : 75,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 4257014522404457325,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -198788081649054411,
			),
			wallpaper : $client->wallPaper(
				id : 7674937787195106158,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -835036429475966549,
				slug : 'pxLc0dn5yrqRGfk1',
				document : $client->documentEmpty(
					id : -4898940803070143541,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 58,
					second_background_color : 15,
					third_background_color : 31,
					fourth_background_color : 75,
					intensity : 90,
					rotation : 67,
					emoticon : 'DXQwMgl3CRj2yeAF',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 4911385697361843984,
			),
			msg_id : 39,
			date : 68,
			actor : $client->peerUser(
				user_id : -8559559515068831432,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'dj0hcGqRAI6o9z3P',
				),
				$client->reactionCustomEmoji(
					document_id : -1132829265440196789,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '62VcyQmBTGf0zuAJ',
				),
				$client->reactionCustomEmoji(
					document_id : 2712722010839222468,
				),
				$client->reactionPaid(),
			),
			qts : 69,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -3620771836947557342,
			),
			msg_id : 58,
			date : 47,
			reactions : array(
				$client->reactionCount(
					chosen_order : 86,
					reaction : $client->reactionEmpty(),
					count : 83,
				),
			),
			qts : 66,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -4095610684171130911,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 703310098097189380,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 50,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : '21obh49Wl8Nnjc0d',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 8,
					shortcut : 'rmcBiqU4bDkY8eI0',
					top_message : 72,
					count : 37,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 55,
				shortcut : 'YkF3W6pXN0K9n4e8',
				top_message : 93,
				count : 94,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 36,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 73,
				peer_id : $client->peerUser(
					user_id : 6536028466551385803,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 63,
			messages : array(21),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'lAz1X6KwIic38rS7',
				user_id : -8909667656667403929,
				dc_id : 51,
				date : 92,
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
			qts : 63,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'G5INF8cKZkjySxga',
			message : $client->messageEmpty(
				id : 46,
				peer_id : $client->peerUser(
					user_id : -2078595135784747620,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 78,
				peer_id : $client->peerUser(
					user_id : 1385850259081822686,
				),
			),
			qts : 88,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'EZs05C3jeAhXkg2c',
			message : $client->messageEmpty(
				id : 5,
				peer_id : $client->peerUser(
					user_id : -2717385105873577741,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 97,
				peer_id : $client->peerUser(
					user_id : 6046585172450440245,
				),
			),
			qts : 72,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'zGNRZyoTedIv74ha',
			peer : $client->peerUser(
				user_id : 3532445351614305623,
			),
			messages : array(92),
			qts : 62,
		),
		$client->updateNewStoryReaction(
			story_id : 58,
			peer : $client->peerUser(
				user_id : 865393302293771498,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 7769652608926255829,
				nanos : 18,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 1789089256173871845,
			user_id : 1967587417558237580,
			connection_id : 'J3ZmEX1h4fiowrpO',
			message : $client->messageEmpty(
				id : 41,
				peer_id : $client->peerUser(
					user_id : -5962794200586301879,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 81,
				peer_id : $client->peerUser(
					user_id : -2557247200864576659,
				),
			),
			chat_instance : 762028774276782091,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -4270219173018899335,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : 4029981121493706322,
					nanos : 86,
				),
				available_balance : $client->starsAmount(
					amount : 4414059796023848866,
					nanos : 66,
				),
				overall_revenue : $client->starsAmount(
					amount : -3433115652355285954,
					nanos : 37,
				),
				next_withdrawal_at : 50,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -4934603666305270338,
			payload : '54jk1HcGdwNxrWaO',
			qts : 43,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 15,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 60,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -4322052822210702210,
				access_hash : 5864288446737063092,
			),
			sub_chain_id : 14,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 47,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 3014440109035276662,
			saved_peer_id : $client->peerUser(
				user_id : 948938066192307397,
			),
			read_max_id : 94,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -8735598614361493210,
			saved_peer_id : $client->peerUser(
				user_id : 244648467283979615,
			),
			read_max_id : 48,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -3848056847637548362,
			saved_peer_id : $client->peerUser(
				user_id : 8538464504330083358,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : 5003205120610611000,
				access_hash : -7822819649470178636,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 1,
				from_id : $client->peerUser(
					user_id : 4042010704960846397,
				),
				date : 56,
				message : $client->textWithEntities(
					text : 'FK3NuX5sIhHrR1QD',
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
				paid_message_stars : 5074163576252053654,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : -4974455278737857216,
				access_hash : -1278143403807599780,
			),
			from_id : $client->peerUser(
				user_id : 3941308071925173322,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : 3143739563685396023,
			),
			topic_id : 49,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : -2629091690057911565,
			),
			order : array(86),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : -6802719081973640535,
				access_hash : 5663849162158450315,
			),
			messages : array(31),
		),
		$client->updateStarGiftAuctionState(
			gift_id : -8724777028640117084,
			state : $client->starGiftAuctionStateNotModified(),
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : 4795894918786139770,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : -5007645134955749294,
				bid_date : 58,
				min_bid_amount : 3003717941506917437,
				bid_peer : $client->peerUser(
					user_id : -4602263522099795161,
				),
				acquired_count : 90,
			),
		),
		$client->updateEmojiGameInfo(
			info : $client->messages->emojiGameUnavailable(),
		),
		$client->updateStarGiftCraftFail(),
	),
	chats : array(
		$client->chatEmpty(
			id : -4235795943262644767,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4015073633996626861,
			title : 'MQaj2ZFlA8VBdxOq',
			photo : $client->chatPhotoEmpty(),
			participants_count : 28,
			date : 54,
			version : 28,
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
			id : 8777650589656528055,
			title : 'fSceOa9wyV8KMtlP',
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
			id : -6533913328446820490,
			access_hash : -7927274271119805412,
			title : 'fYiRkUjDsqS3IN61',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 0,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'NPql0hpAgGw1Xou5',
					reason : 'IbhugYdQ3KT9WBzn',
					text : 'qGFkjHNvIRrDJQz5',
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
				until_date : 11,
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
				until_date : 16,
			),
			participants_count : 28,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 52,
			),
			color : $client->peerColor(
				color : 72,
				background_emoji_id : 5039864959963902615,
			),
			profile_color : $client->peerColor(
				color : 79,
				background_emoji_id : -5227216284369194524,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 30,
			subscription_until_date : 52,
			bot_verification_icon : 3997436305951671685,
			send_paid_messages_stars : 3559401822161866008,
			linked_monoforum_id : 740078637672239445,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -3653442851874274634,
			access_hash : 734140592000370732,
			title : 'cIZ3wxj18AFglV0L',
			until_date : 29,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1957023538826942620,
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
			id : -5505094062688525193,
			access_hash : 4715057514700696729,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 21,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'gGyYRqAHzjh35Qli',
					reason : 'NQxDtCaXmqe0VkAc',
					text : 'SxFeQBYWTlk6iufh',
				),
			),
			bot_inline_placeholder : 'v49tN61GEsqUMK2u',
			lang_code : '3IqV7sD6QvLZMS0K',
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
				max_id : 20,
			),
			color : $client->peerColor(
				color : 84,
				background_emoji_id : -2065839056293492912,
			),
			profile_color : $client->peerColor(
				color : 76,
				background_emoji_id : 3161114864090018601,
			),
			bot_active_users : 72,
			bot_verification_icon : -5372633580950355954,
			send_paid_messages_stars : 7623944397611538867,
		),
	),
	state : $client->updates->state(
		pts : 96,
		qts : 5,
		date : 21,
		seq : 1,
		unread_count : 23,
	),
);
```