# updates.channelDifference

**Description** : *The new updates*

**Layer** : 218

```tl
updates.channelDifference#2064674e flags:# final:flags.0?true pts:int timeout:flags.1?int new_messages:Vector<Message> other_updates:Vector<Update> chats:Vector<Chat> users:Vector<User> = updates.ChannelDifference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **final** | [`flags.0?true`](type/true) | Whether there are more updates to be fetched using getDifference, starting from the provided pts |
| <mark>pts</mark> | [`int`](type/int) | The PTS from which to start getting updates the next time |
| **timeout** | [`flags.1?int`](type/int) | Clients are supposed to refetch the channel difference after timeout seconds have elapsed, if the user is currently viewing the chat, see here » for more info |
| <mark>new_messages</mark> | [`Vector<Message>`](type/Message) | New messages |
| <mark>other_updates</mark> | [`Vector<Update>`](type/Update) | Other updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[updates.ChannelDifference](type/updates.ChannelDifference)

---

## Example

```php
$updatesChannelDifference = $client->updates->channelDifference(
	final : true,
	pts : 76,
	timeout : 40,
	new_messages : array(
		$client->messageEmpty(
			id : 12,
			peer_id : $client->peerUser(
				user_id : -7337595474392894732,
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
			id : 12,
			from_id : $client->peerUser(
				user_id : -3669521904237546475,
			),
			from_boosts_applied : 86,
			peer_id : $client->peerUser(
				user_id : 8349332080638317988,
			),
			saved_peer_id : $client->peerUser(
				user_id : 7586270675261786890,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 5397688734621705911,
				),
				from_name : 'ETFcPWn79yeOw8gK',
				date : 48,
				channel_post : 66,
				post_author : 'iJpgAC5u8cxjRBLr',
				saved_from_peer : $client->peerUser(
					user_id : 1797905781890918226,
				),
				saved_from_msg_id : 49,
				saved_from_id : $client->peerUser(
					user_id : 1177384596482923985,
				),
				saved_from_name : 'w6JqQG408uCe3EVn',
				saved_date : 67,
				psa_type : 'hwGcHNDy7ap3iv1J',
			),
			via_bot_id : 8291045022851133324,
			via_business_bot_id : -6680988516753770182,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 74,
				reply_to_peer_id : $client->peerUser(
					user_id : 6675101117950562070,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'ir8fqoBWb5UYzjOH',
					date : 56,
					channel_post : 53,
					post_author : 'rFD6vdsjqV4805Qp',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 99,
					saved_from_id : $client->peerUser(...),
					saved_from_name : '2xTqKyjws6RpMo1m',
					saved_date : 30,
					psa_type : 'Bv0xQrJ36497XOYa',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 52,
				quote_text : '3uxE5wr9gC24zoa0',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 89,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 62,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 72,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 64,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 62,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 23,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 52,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 88,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 66,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 67,
						language : 'BNL3IxpwJAZtHUyR',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 48,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 87,
						user_id : 3362297857335751275,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 46,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 85,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 71,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 89,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 69,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 14,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 14,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 25,
						document_id : 4641320495782534000,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 3,
					),
				),
				quote_offset : 2,
				todo_item_id : 70,
			),
			date : 91,
			message : 'GuoHt5UazNXCRhL3',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 46,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 0,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 61,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 77,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 35,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 27,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 39,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 33,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 80,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 72,
					language : 'vT2bngImujl9Q5di',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 63,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 57,
					user_id : 2273017866188431212,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 34,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 61,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 84,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 12,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 81,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 29,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 45,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 26,
					document_id : 1962471644277399894,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 75,
				),
			),
			views : 65,
			forwards : 52,
			replies : $client->messageReplies(
				comments : true,
				replies : 83,
				replies_pts : 60,
				recent_repliers : array(
					$client->peerUser(
						user_id : -8003078440262157695,
					),
					$client->peerChat(
						chat_id : -938921111629429441,
					),
					$client->peerChannel(
						channel_id : 2764763678615180835,
					),
				),
				channel_id : 6840541859498833629,
				max_id : 71,
				read_max_id : 10,
			),
			edit_date : 49,
			post_author : 'bN1fSvd9rln76jFg',
			grouped_id : -3519968456679035801,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 70,
						reaction : $client->reactionEmpty(...),
						count : 17,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 10,
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
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'lfgiz3PBqFNX8AQM',
					reason : 'leGyJqkwBcvosNPx',
					text : 'hp0cFKQNRJkqbxVT',
				),
			),
			ttl_period : 4,
			quick_reply_shortcut_id : 29,
			effect : -7856299108650281254,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'mI8DCnAsV32vWo5X',
				text : $client->textWithEntities(
					text : 'WsCSXMKYjQ0wf8NP',
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
			report_delivery_until_date : 100,
			paid_message_stars : -6660042715305098125,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 6980840137223874758,
					nanos : 83,
				),
				schedule_date : 21,
			),
			schedule_repeat_period : 7,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 86,
			from_id : $client->peerUser(
				user_id : 4252347093217405953,
			),
			peer_id : $client->peerUser(
				user_id : 5241058662182595537,
			),
			saved_peer_id : $client->peerUser(
				user_id : -7451593715569056396,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 97,
				reply_to_peer_id : $client->peerUser(
					user_id : 7850244093597791548,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '4bQMN2fS3c05osIX',
					date : 87,
					channel_post : 13,
					post_author : 'tkfnFrPqbTK3zB72',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 94,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'CmjJGTDVuFR35MUL',
					saved_date : 68,
					psa_type : 'Pr76BZhDc2eV8Y0d',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 79,
				quote_text : 'aLKIvZsQxTdhuYbk',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 87,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 49,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 9,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 70,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 88,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 54,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 7,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 80,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 93,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 74,
						language : 'bemoJSGAKhRDiYvW',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 53,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 53,
						user_id : -4112757485567663459,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 28,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 59,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 22,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 17,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 61,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 88,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 48,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 92,
						document_id : 8491358161319965439,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 84,
					),
				),
				quote_offset : 60,
				todo_item_id : 76,
			),
			date : 78,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 29,
						reaction : $client->reactionEmpty(...),
						count : 88,
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
						count : 95,
					),
				),
			),
			ttl_period : 84,
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 96,
				peer_id : $client->peerUser(
					user_id : 4300747111639525670,
				),
			),
			pts : 42,
			pts_count : 0,
		),
		$client->updateMessageID(
			id : 16,
			random_id : -1639467652165533034,
		),
		$client->updateDeleteMessages(
			messages : array(37),
			pts : 82,
			pts_count : 83,
		),
		$client->updateUserTyping(
			user_id : 4647216858793620850,
			top_msg_id : 49,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 6654263602846297864,
			from_id : $client->peerUser(
				user_id : -7652845846260197387,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -8465085347211850794,
				self_participant : $client->chatParticipant(
					user_id : 1199748076347009707,
					inviter_id : -3113158966723055564,
					date : 6,
				),
			),
		),
		$client->updateUserStatus(
			user_id : -3356786016370029971,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -6801578077428973606,
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
			date : 21,
			device : 'PaV0Y5Jf3Sbt9H2M',
			location : 'BpcXSvlu1yoHfNKn',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 3231251737008037264,
				chat_id : 18,
				date : 31,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 83,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 72,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 7,
			),
			date : 33,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 69,
			max_date : 29,
			date : 81,
		),
		$client->updateChatParticipantAdd(
			chat_id : 4667591619894302700,
			user_id : 1195594253435288320,
			inviter_id : -6350829662758753494,
			date : 71,
			version : 16,
		),
		$client->updateChatParticipantDelete(
			chat_id : -735097967984251451,
			user_id : -6072351037887371140,
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
					id : 66,
					ip_address : '127.0.0.1',
					port : 21,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : 3092667287234323470,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : false,
				mute_until : 15,
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
			inbox_date : 95,
			type : 'iLZWzMnrSFg3HE1I',
			message : 'R4q7dXHext8YZUlo',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 94,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 30,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 2,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 50,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 63,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 97,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 8,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 31,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 98,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 24,
					language : 'I50ZGWeTDtByVXsw',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 61,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 78,
					user_id : -6301115164984792399,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 80,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 60,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 78,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 20,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 71,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 69,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 70,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 96,
					document_id : -3362718537448182733,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 74,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(8181959909997480232),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-6423013670770354298),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-4120672899971677570),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-5377063429956310515),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -3425458560126776415,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 79,
			peer : $client->peerUser(
				user_id : -5792759975589380872,
			),
			top_msg_id : 49,
			max_id : 73,
			still_unread_count : 98,
			pts : 99,
			pts_count : 46,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -9050713699675329291,
			),
			max_id : 7,
			pts : 49,
			pts_count : 44,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 467958987320023082,
				url : 'https://docs.liveproto.dev',
			),
			pts : 68,
			pts_count : 4,
		),
		$client->updateReadMessagesContents(
			messages : array(48),
			pts : 67,
			pts_count : 27,
			date : 84,
		),
		$client->updateChannelTooLong(
			channel_id : -4133314848895993033,
			pts : 21,
		),
		$client->updateChannel(
			channel_id : 8867143298164866519,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 80,
				peer_id : $client->peerUser(
					user_id : 512206634430246091,
				),
			),
			pts : 78,
			pts_count : 59,
		),
		$client->updateReadChannelInbox(
			folder_id : 95,
			channel_id : -778235025211126438,
			max_id : 26,
			still_unread_count : 80,
			pts : 20,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -8592967965718067125,
			messages : array(24),
			pts : 53,
			pts_count : 34,
		),
		$client->updateChannelMessageViews(
			channel_id : 7533676360547200071,
			id : 8,
			views : 88,
		),
		$client->updateChatParticipantAdmin(
			chat_id : -607222296750739761,
			user_id : -2088863897069936110,
			is_admin : false,
			version : 37,
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
					installed_date : 14,
					id : -1638436338707391337,
					access_hash : 3369574397375506072,
					title : 'KJVGmc6ED5wRytPZ',
					short_name : 'VZWHKsR7C6G0BnwE',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 100,
					thumb_version : 73,
					thumb_document_id : 4596182110612922676,
					count : 2,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'Qy9kSIE2JUu5Kx7e',
						documents : array(-768129027042451535),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : -2319191350324940494,
						keyword : array('Du3Ujbw10SGPzRrX'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : -7456036932537882415,
					),
					$client->document(
						id : -55150313559371784,
						access_hash : 5000401883147164994,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 64,
						mime_type : '9IFJXyseq0vSQzo1',
						size : 5446910207369163340,
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
						dc_id : 22,
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
			order : array(6329622358669880823),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -3357491480398532751,
			user_id : -1264227177766484058,
			query : '1fMn3QPHGJAE2z57',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'ethFS69XMTHyKbjQ',
		),
		$client->updateBotInlineSend(
			user_id : -1572438371568725924,
			query : 'MSQkoOu6NmhcwRUD',
			geo : $client->geoPointEmpty(),
			id : 't3DxdV0bA1W6Hvou',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 77,
				id : 269925359970777582,
				access_hash : 3141486704409189209,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 45,
				peer_id : $client->peerUser(
					user_id : 8095034501836236782,
				),
			),
			pts : 88,
			pts_count : 8,
		),
		$client->updateBotCallbackQuery(
			query_id : 1097532754142666108,
			user_id : -1301491190024231278,
			peer : $client->peerUser(
				user_id : 5248551257469668164,
			),
			msg_id : 86,
			chat_instance : 2998978428232300746,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'z9OoIXRtZ0JNEDBu',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 76,
				peer_id : $client->peerUser(
					user_id : -3038846051037595815,
				),
			),
			pts : 22,
			pts_count : 59,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -6520191776662687254,
			user_id : -4737176873632017472,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 43,
				id : 8399372127406597923,
				access_hash : -2685873341895328010,
			),
			chat_instance : 7354310550163737470,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'iBdRc4bmjGzIZCfa',
		),
		$client->updateReadChannelOutbox(
			channel_id : -159623202385147346,
			max_id : 97,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 7877482448431375635,
			),
			top_msg_id : 47,
			saved_peer_id : $client->peerUser(
				user_id : -3541569443982593335,
			),
			draft : $client->draftMessageEmpty(
				date : 66,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 9221660606190351532,
			webpage : $client->webPageEmpty(
				id : -8697799929816094525,
				url : 'https://docs.liveproto.dev',
			),
			pts : 89,
			pts_count : 50,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 97,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -7523568513577735229,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 38,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 7938793016184961114,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 60,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : '20XrIRuLjqbkVfst',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 507624984496005179,
			data : $client->dataJSON(
				data : 'lOkXEnwgKNJI2To7',
			),
			timeout : 99,
		),
		$client->updateBotShippingQuery(
			query_id : 4311913126014866789,
			user_id : -8575487786552768940,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'SrgVdXYf8Qj0WzFA',
				street_line2 : 'It25AZRrYkewpaHo',
				city : 'LZCTYMtubRHoxBQz',
				state : '6zYEXpkUx480WHOG',
				country_iso2 : 'TfJoP0tCnDRaFlwk',
				post_code : 'bawgIyYBvdh1Np7E',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 6239963593359639617,
			user_id : -2413159145550394259,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'Ts4gcw905H2WopzA',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'u8toR0v6rM5QHwCn',
					street_line2 : 'IfKjEoDz0caWJAqY',
					city : 'C4K8nd3JO0kufoF7',
					state : 'xtLscrXVyPzwdCKB',
					country_iso2 : '1a7VLzjvRJDxK9E0',
					post_code : 'qh3SaR9PsbEuBCf2',
				),
			),
			shipping_option_id : 'KkUwiQnmxzho5GL6',
			currency : 'IjYorBiy3TpVZHPO',
			total_amount : -5235479941892892049,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -7179746787600400865,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'ZRN2rEo1MDQFAchd',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : '3smqO9H7CiuMLZEQ',
				from_version : 53,
				version : 69,
				strings : array(
					$client->langPackString(
						key : 'WoGBinhMmK5Ubrsu',
						value : '9FG13EUWbXSMyDA5',
					),
					$client->langPackStringPluralized(
						key : 'x6oznVfdCAl0yNYs',
						zero_value : 'LO8hkrCSHmQaXUMi',
						one_value : 'pn28M9rxqFbRviUL',
						two_value : 'QZxPuHwI3oiaCDBJ',
						few_value : 'slJN3hbuqSyDpz9H',
						many_value : 'u6czJQXEd0CPxqak',
						other_value : 'DKeEmqyuz0tG9Nox',
					),
					$client->langPackStringDeleted(
						key : 'zjRneB03htQsgX1T',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -9185857828423562959,
			top_msg_id : 64,
			saved_peer_id : $client->peerUser(
				user_id : 3793148487149446763,
			),
			messages : array(25),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -1298430166088345883,
			available_min_id : 32,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -8669005772287318598,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : 2566924583144893961,
			),
		),
		$client->updateMessagePoll(
			poll_id : -1423226191282684874,
			poll : $client->poll(
				id : -95074892938974037,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : 'Mhc4kqGoxZRQX0sy',
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
				close_period : 42,
				close_date : 35,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 92,
					),
				),
				total_voters : 11,
				recent_voters : array(
					$client->peerUser(
						user_id : -4693894427979901655,
					),
					$client->peerChat(
						chat_id : -591745235828861409,
					),
					$client->peerChannel(
						channel_id : 6838571246264060914,
					),
				),
				solution : 'jBxYez56JXk9R8gl',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 25,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 47,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 7,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 52,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 36,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 12,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 25,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 91,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 20,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 64,
						language : 'k2uOhvR14jnbZBYq',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 91,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 70,
						user_id : -8985224017907987403,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 90,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 23,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 24,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 15,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 3,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 63,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 50,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 47,
						document_id : 7766739752976094918,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 18,
					),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : -5052068525624216984,
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
				until_date : 17,
			),
			version : 58,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : 8913629899175068157,
					),
					folder_id : 78,
				),
			),
			pts : 53,
			pts_count : 36,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 3336814883489989900,
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
				geo_distance : 77,
				request_chat_title : 'f3iO27P8vKw1sUjT',
				request_chat_date : 90,
				business_bot_id : 931489670933430843,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 8319918492454543001,
				registration_month : 'DXv6LquEGWf07xVZ',
				phone_country : '+1234567890',
				name_change_date : 100,
				photo_change_date : 12,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : 5906230318605665654,
					),
					expires : 34,
					distance : 82,
				),
				$client->peerSelfLocated(
					expires : 70,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 79,
				peer_id : $client->peerUser(
					user_id : -4453243971320294772,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 4941369746555876511,
			),
			messages : array(1),
			sent_messages : array(96),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -8512764353674598820,
				access_hash : 5088289064112058686,
				slug : 'tb3TKJ8S4XWFI2q1',
				title : 'chyiokJgUTE8BwaM',
				document : $client->documentEmpty(
					id : 5345611440823156616,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 54,
						outbox_accent_color : 25,
						message_colors : array(8),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'ln1qSYAKWFuQkBj8',
				installs_count : 34,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -8957550554800780493,
			),
			msg_id : 71,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 5695027098706804682,
			peer : $client->peerUser(
				user_id : 3146034982910421458,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 29,
		),
		$client->updateDialogFilter(
			id : 0,
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
					text : 'ysrphElKk2S9iPWB',
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
				emoticon : '0ZRTpGP4IVXc5Q2z',
				color : 20,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(62),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 6894362922624049599,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -1423680995429449789,
			id : 64,
			forwards : 23,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -2631821077984012668,
			top_msg_id : 37,
			read_max_id : 76,
			broadcast_id : -1090387033926566292,
			broadcast_post : 49,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -7960337518974076087,
			top_msg_id : 34,
			read_max_id : 52,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -2194882628019243915,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -2538072152505254809,
			top_msg_id : 40,
			from_id : $client->peerUser(
				user_id : 3971441725119610488,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -2600322847537740232,
			),
			messages : array(59),
			pts : 72,
			pts_count : 56,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 7892730108062183291,
			messages : array(84),
			pts : 13,
			pts_count : 43,
		),
		$client->updateChat(
			chat_id : 3927523250144160592,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -2849411291303299100,
				access_hash : -4566947242643093847,
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
						user_id : 5147771421843260128,
					),
					date : 37,
					active_date : 100,
					source : 25,
					volume : 5,
					about : 'qZrlhOYDFfGigc6U',
					raise_hand_rating : 7943624155528090999,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'QtIHFdu5hrbYLv13',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 54,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : '9EZoM728CqXbYzIw',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 59,
					),
					paid_stars_total : -8686839287903381279,
				),
			),
			version : 93,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : 5452979924152215216,
			),
			call : $client->groupCallDiscarded(
				id : 2252085531378126025,
				access_hash : -6219726682016107648,
				duration : 96,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -3581940894528654675,
			),
			ttl_period : 41,
		),
		$client->updateChatParticipant(
			chat_id : 554317127241866458,
			date : 100,
			actor_id : 4537159866639699194,
			user_id : -7876139002069630535,
			prev_participant : $client->chatParticipant(
				user_id : 6467369234924204690,
				inviter_id : -4135423085240201401,
				date : 70,
			),
			new_participant : $client->chatParticipant(
				user_id : 8560858142980804274,
				inviter_id : -6108518335547463142,
				date : 22,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'Dw427C6gJVcytWiR',
				admin_id : 3155025199819800135,
				date : 44,
				start_date : 88,
				expire_date : 17,
				usage_limit : 47,
				usage : 100,
				requested : 83,
				subscription_expired : 89,
				title : 'SUZWVH9lM50uKpqf',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 84,
					amount : 3508726982073865808,
				),
			),
			qts : 83,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -8865825739501046706,
			date : 22,
			actor_id : 4122463362339931554,
			user_id : -6361586293379165101,
			prev_participant : $client->channelParticipant(
				user_id : -1269726136166892890,
				date : 6,
				subscription_until_date : 17,
			),
			new_participant : $client->channelParticipant(
				user_id : -6871448390089708077,
				date : 79,
				subscription_until_date : 68,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'BQCHxu5lwaUcgpZJ',
				admin_id : 686771173872885904,
				date : 0,
				start_date : 17,
				expire_date : 47,
				usage_limit : 39,
				usage : 19,
				requested : 52,
				subscription_expired : 7,
				title : '1QgPdZlAeyLr4Nia',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 75,
					amount : 653124394683925340,
				),
			),
			qts : 11,
		),
		$client->updateBotStopped(
			user_id : -3352913695302033586,
			date : 4,
			stopped : true,
			qts : 25,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'RqyZs9mMeYVk51wa',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -7496823227242940885,
			),
			bot_id : -6822696757536613034,
			commands : array(
				$client->botCommand(
					command : 'RgkA8WZQ91OBPYIJ',
					description : 'G4OWXvzlHJDy68Ci',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 3153531645022438045,
			),
			requests_pending : 7,
			recent_requesters : array(-2846109964011600007),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -910781773233793805,
			),
			date : 56,
			user_id : -4618643777450964915,
			about : 'HJSdvDZPEmMVxg6X',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'gDBubinUPEjymsa2',
				admin_id : 5162398813711424048,
				date : 8,
				start_date : 3,
				expire_date : 83,
				usage_limit : 92,
				usage : 99,
				requested : 71,
				subscription_expired : 44,
				title : 'B92HEm5YpSUQAqJo',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 65,
					amount : 3864852272413805872,
				),
			),
			qts : 16,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 6811576371718152454,
			),
			msg_id : 73,
			top_msg_id : 46,
			saved_peer_id : $client->peerUser(
				user_id : -571006934962468451,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 85,
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
						count : 79,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 8771942522646557362,
		),
		$client->updateBotMenuButton(
			bot_id : -4588579599482790588,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -1257978258747720417,
			),
			msg_id : 27,
			transcription_id : -7028331170510418980,
			text : 'p1OQPstexq3XHE8l',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 4805970018166465049,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -4745057827495500614,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 207719557537097798,
			),
			msg_id : 85,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 42,
					h : 20,
					thumb : $client->photoSizeEmpty(
						type : 'QjypXVJmInTHANWC',
					),
					video_duration : 69,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : -4233696152660624225,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -3955007386969612643,
			),
			story : $client->storyItemDeleted(
				id : 99,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : 7749418972993659840,
			),
			max_id : 57,
		),
		$client->updateStoryID(
			id : 26,
			random_id : 3155900151406542526,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 25,
				cooldown_until_date : 66,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 4522435434727570827,
			),
			story_id : 44,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 1830016985735973315,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'Sd81TWfR9h2tpDKQ',
				user_id : 59354734213498721,
				giveaway_msg_id : 41,
				date : 52,
				expires : 20,
				used_gift_slug : 'VrQ8Zi1JouXgFGpE',
				multiplier : 70,
				stars : 8055205737238633933,
			),
			qts : 59,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -8827720504054061752,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -7688760752593696363,
			),
			wallpaper : $client->wallPaper(
				id : -5897682292543468665,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -4365815392281123953,
				slug : '62ciIvt3uCx5rDMp',
				document : $client->documentEmpty(
					id : 8193108255414749924,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 58,
					second_background_color : 30,
					third_background_color : 8,
					fourth_background_color : 68,
					intensity : 30,
					rotation : 24,
					emoticon : 'nWK1bqCVt4iEk6PI',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -1901031566440756891,
			),
			msg_id : 53,
			date : 80,
			actor : $client->peerUser(
				user_id : -3015791618265339838,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 's9NnEwbiXy65tFrG',
				),
				$client->reactionCustomEmoji(
					document_id : -2787905747298640859,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'NY14TkP3cfGVSv5z',
				),
				$client->reactionCustomEmoji(
					document_id : -7719617419327381229,
				),
				$client->reactionPaid(),
			),
			qts : 96,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -3298551307116169365,
			),
			msg_id : 59,
			date : 66,
			reactions : array(
				$client->reactionCount(
					chosen_order : 71,
					reaction : $client->reactionEmpty(),
					count : 81,
				),
			),
			qts : 6,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -5309246444558187499,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -868323152781911815,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 100,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'yjgYZ5Q80OkfuW9v',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 99,
					shortcut : 'j4w8Fs3V2ain0XS6',
					top_message : 19,
					count : 46,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 92,
				shortcut : '05nJrjdDG1WXQbKC',
				top_message : 32,
				count : 36,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 42,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 11,
				peer_id : $client->peerUser(
					user_id : -2426400973770620657,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 45,
			messages : array(95),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'yjR4cl7wpDf8XIua',
				user_id : -6164852207980501234,
				dc_id : 39,
				date : 74,
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
			qts : 35,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'CgeLPtZ2DvMA9QUw',
			message : $client->messageEmpty(
				id : 97,
				peer_id : $client->peerUser(
					user_id : 2479962673868193236,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 35,
				peer_id : $client->peerUser(
					user_id : 5173633946792974687,
				),
			),
			qts : 56,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'ZlLYrMnUt0TIzyhw',
			message : $client->messageEmpty(
				id : 77,
				peer_id : $client->peerUser(
					user_id : -5025799881907950993,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 0,
				peer_id : $client->peerUser(
					user_id : 6599732435086262543,
				),
			),
			qts : 22,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'jktCgHmu7cpUoJPI',
			peer : $client->peerUser(
				user_id : 4567255946745574948,
			),
			messages : array(78),
			qts : 19,
		),
		$client->updateNewStoryReaction(
			story_id : 45,
			peer : $client->peerUser(
				user_id : -4608320399025543080,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -3896287499470677960,
				nanos : 64,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -2286930237343808424,
			user_id : 64121825778484452,
			connection_id : 'zS37JlRpY05ICOVU',
			message : $client->messageEmpty(
				id : 17,
				peer_id : $client->peerUser(
					user_id : -1667771184636256921,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 68,
				peer_id : $client->peerUser(
					user_id : 3024923708589563571,
				),
			),
			chat_instance : -2434616253028005227,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -4391705239413068385,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : 7835419017373005995,
					nanos : 81,
				),
				available_balance : $client->starsAmount(
					amount : -2404824088016946837,
					nanos : 32,
				),
				overall_revenue : $client->starsAmount(
					amount : 2354685835868240355,
					nanos : 79,
				),
				next_withdrawal_at : 76,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -1028905693347936786,
			payload : 'keyRD28rCYIlsvJW',
			qts : 7,
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
				timeout : 77,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 4572052870095558080,
				access_hash : 151847583825106621,
			),
			sub_chain_id : 7,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 94,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -8850905185445760939,
			saved_peer_id : $client->peerUser(
				user_id : 8676255867538907360,
			),
			read_max_id : 17,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -5705889513066302947,
			saved_peer_id : $client->peerUser(
				user_id : -8209052938691220350,
			),
			read_max_id : 91,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -5434473424703944309,
			saved_peer_id : $client->peerUser(
				user_id : -7933907652739849192,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : 6068530887576908838,
				access_hash : -3045880171786236736,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 90,
				from_id : $client->peerUser(
					user_id : 8225910980471029168,
				),
				date : 78,
				message : $client->textWithEntities(
					text : 'whYpLPlC2TIiBMrO',
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
				paid_message_stars : 9135443849351797125,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : 3861471804339416053,
				access_hash : -387336744179869561,
			),
			from_id : $client->peerUser(
				user_id : 2028897976929448167,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : 5420499926148063903,
			),
			topic_id : 75,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : 1685326433472068546,
			),
			order : array(91),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : 2451139277640518991,
				access_hash : -415854033867729838,
			),
			messages : array(43),
		),
		$client->updateStarGiftAuctionState(
			gift_id : 1826181812767227213,
			state : $client->starGiftAuctionState(
				version : 3,
				start_date : 25,
				end_date : 86,
				min_bid_amount : -3050058549692980636,
				bid_levels : array(
					$client->auctionBidLevel(
						pos : 92,
						amount : -4547892110669779338,
						date : 9,
					),
				),
				top_bidders : array(-756010644969833348),
				next_round_at : 82,
				gifts_left : 27,
				current_round : 44,
				total_rounds : 91,
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : -5535079711862889412,
			text : 'cU02LqkGQojbINws',
		),
		$client->updateBotSubscriptionExpire(
			user_id : -2416689291236164826,
			payload : 'n1At7bYyxaq6zWfw',
			until_date : 44,
			qts : 84,
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : -3633260122973550565,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : 2837332657235893938,
				bid_date : 23,
				min_bid_amount : 3147124528811764505,
				peer : $client->peerUser(
					user_id : -3668352851092168961,
				),
				acquired_count : 30,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -7123944285959599319,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 1097497729318552544,
			title : 'V3xfajZF8SwrLEq9',
			photo : $client->chatPhotoEmpty(),
			participants_count : 51,
			date : 61,
			version : 34,
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
				until_date : 38,
			),
		),
		$client->chatForbidden(
			id : -5481297918139895737,
			title : '0DNfmo5ARz2iCeBW',
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
			id : -4001743887393406264,
			access_hash : 425640459099394083,
			title : 'dzSNqswvEWuTn0Jy',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 17,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '5ejqGBN0HmMiarFA',
					reason : 'frK1b4CqHsVnZNwI',
					text : 'WcueS8myhpCtxD2i',
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
				until_date : 90,
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
				until_date : 20,
			),
			participants_count : 59,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 35,
			),
			color : $client->peerColor(
				color : 91,
				background_emoji_id : 4874367488896629165,
			),
			profile_color : $client->peerColor(
				color : 5,
				background_emoji_id : -4647210452721513231,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 48,
			subscription_until_date : 48,
			bot_verification_icon : -8768567332849860618,
			send_paid_messages_stars : -3930761974462364236,
			linked_monoforum_id : 3053778324758409653,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -3689284701714565331,
			access_hash : -8204454627035858278,
			title : 'E36YvRZzlLJFc2Ms',
			until_date : 54,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1922526017207464948,
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
			id : -1025454262080544133,
			access_hash : -424053850265564467,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 70,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'b4ovTipKSFGPfsNn',
					reason : 't1bOEFkXe4KPSIrN',
					text : 'B9Zbj73oMVKnPOlQ',
				),
			),
			bot_inline_placeholder : 'PfgDT3BvJXzKO92W',
			lang_code : 'gBcTiJfA8U5mhNH6',
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
				max_id : 98,
			),
			color : $client->peerColor(
				color : 16,
				background_emoji_id : -1574813314796919870,
			),
			profile_color : $client->peerColor(
				color : 37,
				background_emoji_id : -7388750029923505988,
			),
			bot_active_users : 44,
			bot_verification_icon : -6553461389703117807,
			send_paid_messages_stars : -5275526598281108815,
		),
	),
);
```