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
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	pts : 75,
	timeout : 20,
	new_messages : array(
		$client->messageEmpty(
			id : 56,
			peer_id : $client->peerUser(
				user_id : 8835764055340553531,
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
			id : 78,
			from_id : $client->peerUser(
				user_id : 1914175170567020550,
			),
			from_boosts_applied : 31,
			peer_id : $client->peerUser(
				user_id : 5773682975528221052,
			),
			saved_peer_id : $client->peerUser(
				user_id : -6471806586730643603,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 8282035065558173014,
				),
				from_name : '3ce9MzFQ07y5tNph',
				date : 36,
				channel_post : 53,
				post_author : '3ANX5E09Da1kCglr',
				saved_from_peer : $client->peerUser(
					user_id : -8173274819775412577,
				),
				saved_from_msg_id : 35,
				saved_from_id : $client->peerUser(
					user_id : 3874033690525534806,
				),
				saved_from_name : 'xFRnjG5oQuzpfiB2',
				saved_date : 47,
				psa_type : 'ejLxlio2ZuCqgcdA',
			),
			via_bot_id : -3844388475946767681,
			via_business_bot_id : -7354186523523977325,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 46,
				reply_to_peer_id : $client->peerUser(
					user_id : -1433155567812252496,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '9FaHVDTciNdIRGlo',
					date : 86,
					channel_post : 45,
					post_author : 'qjZpOfIFVEMDS67R',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 84,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'iOf5Ebk6er4NIJ80',
					saved_date : 26,
					psa_type : 'P5pETwMKU241nsYS',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 58,
				quote_text : '92XOi4Bm8T3xGMfE',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 46,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 69,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 32,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 83,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 26,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 86,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 28,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 52,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 34,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 47,
						language : '01GgAQqPn3OeyFvc',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 44,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 13,
						user_id : -8196023124323656990,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 53,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 97,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 98,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 69,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 91,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 66,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 52,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 4,
						document_id : 532696624300206341,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 63,
					),
				),
				quote_offset : 99,
				todo_item_id : 27,
			),
			date : 91,
			message : 'fxAcNHLPJeM6i2RO',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 42,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 21,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 9,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 62,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 11,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 54,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 75,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 85,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 50,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 10,
					language : '75kKO4A0bawlJMxy',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 15,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 32,
					user_id : -5100101866828332087,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 62,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 25,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 0,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 35,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 25,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 57,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 85,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 43,
					document_id : -4302910673911109397,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 33,
				),
			),
			views : 94,
			forwards : 45,
			replies : $client->messageReplies(
				comments : true,
				replies : 91,
				replies_pts : 23,
				recent_repliers : array(
					$client->peerUser(
						user_id : 3720682372320968226,
					),
					$client->peerChat(
						chat_id : 4328180083892492973,
					),
					$client->peerChannel(
						channel_id : 6586030054119645988,
					),
				),
				channel_id : 3018407007375973157,
				max_id : 16,
				read_max_id : 24,
			),
			edit_date : 14,
			post_author : 'jYAdNih35bTGg2em',
			grouped_id : 6071645793258633281,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 38,
						reaction : $client->reactionEmpty(...),
						count : 99,
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
						count : 88,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'MGt5aldpgor16iHX',
					reason : 'tE0J9gyRQXoYAV2T',
					text : '157tnDYPGqlaFeAg',
				),
			),
			ttl_period : 91,
			quick_reply_shortcut_id : 44,
			effect : 7854179538627628711,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'wCVToP3Xvt9KHE6L',
				text : $client->textWithEntities(
					text : '1HzOSPNeGZ6wUft3',
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
			report_delivery_until_date : 27,
			paid_message_stars : 4209194141793935156,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 1417281010801459509,
					nanos : 12,
				),
				schedule_date : 75,
			),
			schedule_repeat_period : 99,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 32,
			from_id : $client->peerUser(
				user_id : -5263602239527803629,
			),
			peer_id : $client->peerUser(
				user_id : 5117825214782227347,
			),
			saved_peer_id : $client->peerUser(
				user_id : -7428849291187681804,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 47,
				reply_to_peer_id : $client->peerUser(
					user_id : 2107391339313925395,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'o9LAVGUHjrmhxRW3',
					date : 91,
					channel_post : 82,
					post_author : 'cr2DeZXLRjzE0VUC',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 38,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'w1hFcKInfxkjG9A2',
					saved_date : 3,
					psa_type : 'G0l1sdzer9fPoxDW',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 84,
				quote_text : 'p5ZSmILQndsb98M0',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 49,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 79,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 19,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 78,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 64,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 31,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 23,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 62,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 8,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 80,
						language : 'Ttalx4IJMDRV5dZs',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 7,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 16,
						user_id : -567462396604968237,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 93,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 87,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 66,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 76,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 81,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 94,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 51,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 29,
						document_id : 8176133936821817388,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 16,
					),
				),
				quote_offset : 40,
				todo_item_id : 73,
			),
			date : 94,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 86,
						reaction : $client->reactionEmpty(...),
						count : 98,
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
						count : 6,
					),
				),
			),
			ttl_period : 22,
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 68,
				peer_id : $client->peerUser(
					user_id : 7026474188346912583,
				),
			),
			pts : 64,
			pts_count : 44,
		),
		$client->updateMessageID(
			id : 19,
			random_id : 5592709380915596781,
		),
		$client->updateDeleteMessages(
			messages : array(97),
			pts : 100,
			pts_count : 35,
		),
		$client->updateUserTyping(
			user_id : 8473283735744438948,
			top_msg_id : 44,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -5455381509635360178,
			from_id : $client->peerUser(
				user_id : -6922813775335104473,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -1702609959464315724,
				self_participant : $client->chatParticipant(
					user_id : 8521049818419736614,
					inviter_id : -2344901940845472084,
					date : 85,
				),
			),
		),
		$client->updateUserStatus(
			user_id : -9023652414758484274,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 85067443253708329,
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
			date : 68,
			device : 'OjuS9LJ3VbDa25rd',
			location : 'xHbiA9NeLIqWR6n4',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 1538394696189115611,
				chat_id : 23,
				date : 24,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 96,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 10,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 1,
			),
			date : 45,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 70,
			max_date : 2,
			date : 49,
		),
		$client->updateChatParticipantAdd(
			chat_id : 5709494911915654441,
			user_id : -4314368249518703528,
			inviter_id : -3232092855528212413,
			date : 94,
			version : 5,
		),
		$client->updateChatParticipantDelete(
			chat_id : 1452370998174821847,
			user_id : 8191142685587951241,
			version : 54,
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
					id : 31,
					ip_address : '127.0.0.1',
					port : 80,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : -3207371636499503319,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : false,
				mute_until : 27,
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
			inbox_date : 20,
			type : 'p87tN5WuV0r3yimJ',
			message : 'MxomHITa4JndgFeK',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 71,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 24,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 17,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 63,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 46,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 51,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 51,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 17,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 38,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 6,
					language : 'AksHlUnJQ6eyBRdz',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 8,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 70,
					user_id : 733551918161882633,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 68,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 20,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 100,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 100,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 96,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 50,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 88,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 70,
					document_id : 8195264320323066879,
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
					users : array(-3658552188639302613),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-6366656287163531844),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(4435238871507104965),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(6705056087305779984),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 125018381956761401,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 21,
			peer : $client->peerUser(
				user_id : 6867338653398560599,
			),
			top_msg_id : 2,
			max_id : 82,
			still_unread_count : 10,
			pts : 93,
			pts_count : 38,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -4013558384544639456,
			),
			max_id : 13,
			pts : 35,
			pts_count : 72,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -1740788154328322968,
				url : 'https://docs.liveproto.dev',
			),
			pts : 47,
			pts_count : 18,
		),
		$client->updateReadMessagesContents(
			messages : array(46),
			pts : 96,
			pts_count : 7,
			date : 25,
		),
		$client->updateChannelTooLong(
			channel_id : -8319756273399076945,
			pts : 80,
		),
		$client->updateChannel(
			channel_id : 7394429038593540066,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 92,
				peer_id : $client->peerUser(
					user_id : 574422911472356258,
				),
			),
			pts : 40,
			pts_count : 50,
		),
		$client->updateReadChannelInbox(
			folder_id : 48,
			channel_id : -3641150574918169700,
			max_id : 5,
			still_unread_count : 83,
			pts : 11,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -3260101323092810238,
			messages : array(65),
			pts : 59,
			pts_count : 52,
		),
		$client->updateChannelMessageViews(
			channel_id : 3409077100797327514,
			id : 95,
			views : 12,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 8038040554481061237,
			user_id : -6696003365410394497,
			is_admin : false,
			version : 31,
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
					installed_date : 79,
					id : -198302365054106444,
					access_hash : -7448570098573234085,
					title : 'zMSPognd6CQpK2Db',
					short_name : 'WqgipbO6K2QkhTmo',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 86,
					thumb_version : 44,
					thumb_document_id : 304673096152471119,
					count : 69,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'pAGZIEMzOWPlHymu',
						documents : array(3851918065796234434),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : 7125624453852161499,
						keyword : array('OwfiZNeK2L46dSE1'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : 3041356637041309585,
					),
					$client->document(
						id : -7475793204616526470,
						access_hash : -7189616435031957127,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 71,
						mime_type : 'dv0RXzmMy6aWpYKN',
						size : -9091016795174134989,
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
						dc_id : 37,
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
			order : array(4254394289557856184),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 4992736968786177597,
			user_id : -4167576336537531167,
			query : '2u6LFGetnl1xSMv4',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : '7oM6KBj41WfLTYVv',
		),
		$client->updateBotInlineSend(
			user_id : 7551697686137403480,
			query : '9iGUZn0bFfhyzCmV',
			geo : $client->geoPointEmpty(),
			id : 'mQPAlYprUjNiF2Xc',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 29,
				id : 1205527225240172926,
				access_hash : -2213305668751714881,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 17,
				peer_id : $client->peerUser(
					user_id : 331795565555072528,
				),
			),
			pts : 28,
			pts_count : 77,
		),
		$client->updateBotCallbackQuery(
			query_id : -7811985660301917550,
			user_id : 3624528851368185200,
			peer : $client->peerUser(
				user_id : -260202213590511469,
			),
			msg_id : 38,
			chat_instance : -4043554080443849744,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'VIRg0do8zXe6QF1H',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 20,
				peer_id : $client->peerUser(
					user_id : 3117301220896178951,
				),
			),
			pts : 60,
			pts_count : 73,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 3125119742928838912,
			user_id : -1097227581974193293,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 55,
				id : 7905459621781501634,
				access_hash : 2459965412335929026,
			),
			chat_instance : -9220513123691254358,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'kcKCfZB2oHi4TUw5',
		),
		$client->updateReadChannelOutbox(
			channel_id : 3249826052003740946,
			max_id : 63,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : -1166932675869875848,
			),
			top_msg_id : 39,
			saved_peer_id : $client->peerUser(
				user_id : 4637453059244915401,
			),
			draft : $client->draftMessageEmpty(
				date : 48,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 3586737539001596932,
			webpage : $client->webPageEmpty(
				id : 3075931609190246287,
				url : 'https://docs.liveproto.dev',
			),
			pts : 30,
			pts_count : 22,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 100,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -7216057985627360036,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 34,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 3112159895223280607,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 44,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'JzgxUilCFnAdyrmf',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 1934775011518997587,
			data : $client->dataJSON(
				data : '94ceVFQG1shN2kU7',
			),
			timeout : 4,
		),
		$client->updateBotShippingQuery(
			query_id : 266892378606385429,
			user_id : 1008929146114137574,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'A9HzfnqYouhQ3EZ6',
				street_line2 : 'V2kcuPYW8nLIDjC6',
				city : 'q9iDIojM6GrQvfWH',
				state : 'qveUtkYxsHrwWKjJ',
				country_iso2 : 'LNeg2lXYy68SDfrU',
				post_code : 'aNJG4BiwgoT5Xj9v',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -174612437627288746,
			user_id : -7454319214353442768,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'Uq7bx8hepCoRAMKt',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'WONylRPb5umxaHGC',
					street_line2 : 'omcFZBKCEl1QqNG8',
					city : 'i9LnB0Joa8H3IeSw',
					state : 'kUm2KBMAy8Z9GLNI',
					country_iso2 : 'D8z1IxwpuiS2b3dl',
					post_code : 'QaR2wxI645VZJOcF',
				),
			),
			shipping_option_id : '4vOuJnQX5wK36yc9',
			currency : 'N1TSuqA7oFynE5j2',
			total_amount : -1519769899950918317,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 2565336911225726707,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'BOomU5EiwqegCY0M',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'QWZe2XgK7cCiOnt1',
				from_version : 67,
				version : 99,
				strings : array(
					$client->langPackString(
						key : 'hG5BIyczmrx8P0CM',
						value : 'lSxj9fL6GXwpygTR',
					),
					$client->langPackStringPluralized(
						key : 'v1pHsPtQGVnjZuy4',
						zero_value : 'qX5DerHzkKVQ3out',
						one_value : 'ZFdMriuWTaUDfbj3',
						two_value : 'syF7gDbaJvZUinOK',
						few_value : 'uy7YnKL2UHv5k1Zf',
						many_value : 'B5g8r1ZufSXo6EWH',
						other_value : 'xrevEgj54NB3QVl0',
					),
					$client->langPackStringDeleted(
						key : 'QKvmz5gIiSZbT42n',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 6585499638200578586,
			top_msg_id : 67,
			saved_peer_id : $client->peerUser(
				user_id : -8438415490383141265,
			),
			messages : array(15),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -6090283429004740133,
			available_min_id : 42,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -8009382135073532477,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : -4225070089136450982,
			),
		),
		$client->updateMessagePoll(
			poll_id : -2362223202994134276,
			poll : $client->poll(
				id : -2981184964182347905,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : 'B304XZ9YhJW5eb76',
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
				close_period : 29,
				close_date : 11,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 80,
					),
				),
				total_voters : 16,
				recent_voters : array(
					$client->peerUser(
						user_id : 3940204324735069081,
					),
					$client->peerChat(
						chat_id : 223795706989023183,
					),
					$client->peerChannel(
						channel_id : -5705627781651546399,
					),
				),
				solution : 'VI4d1JsHbyWpY8K9',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 44,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 3,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 91,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 31,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 69,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 79,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 26,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 57,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 84,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 17,
						language : '0S65aKqmPyZiBOts',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 5,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 31,
						user_id : -9173704518195585212,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 65,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 32,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 72,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 72,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 34,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 7,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 41,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 23,
						document_id : -3510358324451847885,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 41,
					),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 1406319977803404423,
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
				until_date : 5,
			),
			version : 77,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : 4499753042121669856,
					),
					folder_id : 92,
				),
			),
			pts : 36,
			pts_count : 69,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 3021360106341549001,
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
				geo_distance : 62,
				request_chat_title : '8MfNcprOglYKnqhz',
				request_chat_date : 59,
				business_bot_id : -6474923345716265811,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -7888713062706303780,
				registration_month : 'fTj30UEvVq72MzKO',
				phone_country : '+1234567890',
				name_change_date : 6,
				photo_change_date : 86,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : -6782491368758767024,
					),
					expires : 29,
					distance : 16,
				),
				$client->peerSelfLocated(
					expires : 100,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 70,
				peer_id : $client->peerUser(
					user_id : -8669500401094782909,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -3985203732617213654,
			),
			messages : array(66),
			sent_messages : array(15),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -3102757432392592703,
				access_hash : -9184305859324737792,
				slug : 'YptjayKUCzJm0Z8B',
				title : 'LPNuHdEQYlzvxUjb',
				document : $client->documentEmpty(
					id : 6132293355827964800,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 7,
						outbox_accent_color : 49,
						message_colors : array(19),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'wNV642bZdOlEFInz',
				installs_count : 50,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 8951578874953879033,
			),
			msg_id : 0,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -1225946765830942219,
			peer : $client->peerUser(
				user_id : 6115150959196905508,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 4,
		),
		$client->updateDialogFilter(
			id : 7,
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
				id : 50,
				title : $client->textWithEntities(
					text : '0PSkEetsA8hMQnYN',
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
				emoticon : 'hkZntRfF94b2oXMe',
				color : 34,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(15),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 570596513777554716,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : 5573905778638042116,
			id : 77,
			forwards : 21,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -5909819335782036704,
			top_msg_id : 77,
			read_max_id : 76,
			broadcast_id : 1465804957270013975,
			broadcast_post : 16,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 925802703711516991,
			top_msg_id : 6,
			read_max_id : 81,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -3746488519584752067,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -6803221346452702332,
			top_msg_id : 40,
			from_id : $client->peerUser(
				user_id : -4090205640606368593,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 918211799506408330,
			),
			messages : array(84),
			pts : 2,
			pts_count : 20,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 855992284221918817,
			messages : array(69),
			pts : 75,
			pts_count : 81,
		),
		$client->updateChat(
			chat_id : -4443638892759287102,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 8201168318926238566,
				access_hash : -8396452647565025378,
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
						user_id : 4707325445449038330,
					),
					date : 33,
					active_date : 6,
					source : 80,
					volume : 12,
					about : 'MtUP17heV6k8zWGn',
					raise_hand_rating : -5944606529373028785,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'aSjEF5rhyRN7Ciu4',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 14,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : '4ImUsq1LY6B98tNO',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 18,
					),
					paid_stars_total : -8004540067762815253,
				),
			),
			version : 14,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : -838108269162829597,
			),
			call : $client->groupCallDiscarded(
				id : -6115271185147792998,
				access_hash : -4509876134548599067,
				duration : 51,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -5736820942809801229,
			),
			ttl_period : 44,
		),
		$client->updateChatParticipant(
			chat_id : 4532216202366724837,
			date : 14,
			actor_id : 2354728808246713624,
			user_id : -8755982388514056734,
			prev_participant : $client->chatParticipant(
				user_id : -9157680109067807200,
				inviter_id : -1609503011096537730,
				date : 45,
			),
			new_participant : $client->chatParticipant(
				user_id : -1437269501337470346,
				inviter_id : -4713246800862013512,
				date : 20,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'CxMedQ6Vr9Gi2LjB',
				admin_id : -3941149845677575869,
				date : 82,
				start_date : 4,
				expire_date : 40,
				usage_limit : 66,
				usage : 90,
				requested : 7,
				subscription_expired : 87,
				title : 'pO5JcvUFz7nx3YaS',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 34,
					amount : 6491197999997655330,
				),
			),
			qts : 16,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -2308730324724262918,
			date : 78,
			actor_id : 5540979037644245530,
			user_id : -4467901287178771912,
			prev_participant : $client->channelParticipant(
				user_id : 3209175182547291164,
				date : 46,
				subscription_until_date : 9,
			),
			new_participant : $client->channelParticipant(
				user_id : -4956878438105062710,
				date : 20,
				subscription_until_date : 22,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'P14bxd5SGDCKLM7U',
				admin_id : 5064838322198505971,
				date : 12,
				start_date : 46,
				expire_date : 30,
				usage_limit : 93,
				usage : 72,
				requested : 95,
				subscription_expired : 81,
				title : 'IpOa6XgknwumUbBV',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 50,
					amount : 4140658964830974618,
				),
			),
			qts : 60,
		),
		$client->updateBotStopped(
			user_id : 1077861244963148663,
			date : 0,
			stopped : true,
			qts : 55,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'tGjqpOXRM7z8vkVL',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 795209636577455964,
			),
			bot_id : 170812009958592090,
			commands : array(
				$client->botCommand(
					command : 'JyVORjmtFWGaCgPb',
					description : 'gvUy1natiCkH8LB0',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -8090456774645153721,
			),
			requests_pending : 54,
			recent_requesters : array(-5982034456383881769),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -5406928069587895180,
			),
			date : 39,
			user_id : -2351841265161320989,
			about : 'A5GImsZiXz81DyYT',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'tqyaHzeIkdEJK6Bv',
				admin_id : 3688324858087166830,
				date : 74,
				start_date : 4,
				expire_date : 41,
				usage_limit : 96,
				usage : 78,
				requested : 56,
				subscription_expired : 48,
				title : 'ERHhBmaKZlkuYQdw',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 62,
					amount : -2677625622212410428,
				),
			),
			qts : 86,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 6409264214346672908,
			),
			msg_id : 35,
			top_msg_id : 80,
			saved_peer_id : $client->peerUser(
				user_id : -3748023282538896543,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 39,
						reaction : $client->reactionEmpty(...),
						count : 21,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 28,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 49,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : -2522278603276060031,
		),
		$client->updateBotMenuButton(
			bot_id : -8942984510525846556,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -7503002611432654840,
			),
			msg_id : 19,
			transcription_id : -4569818212101611716,
			text : 'RCQUDWTI6zOfyE9h',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 2536159638139873762,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -1247927353093877648,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -3077371249548108005,
			),
			msg_id : 99,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 82,
					h : 35,
					thumb : $client->photoSizeEmpty(
						type : 'KAFx4cBMHpIeoisR',
					),
					video_duration : 32,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : -448164257771131575,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 3365906659301935094,
			),
			story : $client->storyItemDeleted(
				id : 75,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : 7692163401645104612,
			),
			max_id : 86,
		),
		$client->updateStoryID(
			id : 44,
			random_id : -2123853030360412395,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 67,
				cooldown_until_date : 63,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 2412316839253567997,
			),
			story_id : 19,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 6284672403154640007,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'Orh3cox7qbd1evVz',
				user_id : -4631447203619833323,
				giveaway_msg_id : 45,
				date : 77,
				expires : 76,
				used_gift_slug : 'aEPfRlCo5MeIuyZi',
				multiplier : 22,
				stars : 7386451837922210006,
			),
			qts : 99,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -1084625991875655285,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 1623794633850017290,
			),
			wallpaper : $client->wallPaper(
				id : 1431562634940166248,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -7203187191754666454,
				slug : 'ilojUr8c4utxCOza',
				document : $client->documentEmpty(
					id : -8670787822465044636,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 32,
					second_background_color : 14,
					third_background_color : 6,
					fourth_background_color : 12,
					intensity : 10,
					rotation : 61,
					emoticon : '57kCYs6SevDd4tE9',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 5600154198662830676,
			),
			msg_id : 67,
			date : 33,
			actor : $client->peerUser(
				user_id : 6210648031397279415,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'AzDpvan05wSo2G3N',
				),
				$client->reactionCustomEmoji(
					document_id : -6583293122528361858,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'nyZu1Ki2cTpdIROr',
				),
				$client->reactionCustomEmoji(
					document_id : -7291815347457898010,
				),
				$client->reactionPaid(),
			),
			qts : 58,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 4440072452875183232,
			),
			msg_id : 48,
			date : 100,
			reactions : array(
				$client->reactionCount(
					chosen_order : 77,
					reaction : $client->reactionEmpty(),
					count : 18,
				),
			),
			qts : 85,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -4644901635077161084,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 722399022828525840,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 48,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'e2C1daV7RzYPhFpx',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 52,
					shortcut : 'g6JM0A45wnhodEDy',
					top_message : 46,
					count : 56,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 40,
				shortcut : 'QNnl7mVtK8vJRayB',
				top_message : 55,
				count : 55,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 2,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 28,
				peer_id : $client->peerUser(
					user_id : 6136933743800038226,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 53,
			messages : array(18),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : '1VSneCwLO4bdrX3D',
				user_id : 8740543148176131285,
				dc_id : 56,
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
			qts : 14,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'W8LEeFtJAczNq5MV',
			message : $client->messageEmpty(
				id : 82,
				peer_id : $client->peerUser(
					user_id : -2684360997519128825,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 37,
				peer_id : $client->peerUser(
					user_id : -5362852310970759068,
				),
			),
			qts : 41,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'ieI6rbM9XgzFkENT',
			message : $client->messageEmpty(
				id : 52,
				peer_id : $client->peerUser(
					user_id : 318877393865463016,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 59,
				peer_id : $client->peerUser(
					user_id : -4785700226130370667,
				),
			),
			qts : 11,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'YKLnTXMVzQR4heJW',
			peer : $client->peerUser(
				user_id : 6313832633853519924,
			),
			messages : array(29),
			qts : 86,
		),
		$client->updateNewStoryReaction(
			story_id : 45,
			peer : $client->peerUser(
				user_id : 2805027099485498271,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 3535442459975706827,
				nanos : 73,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 1455136091437299023,
			user_id : 2308101540659094028,
			connection_id : 'XALqEPjMpdGvumwR',
			message : $client->messageEmpty(
				id : 59,
				peer_id : $client->peerUser(
					user_id : 7047524631129951872,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 44,
				peer_id : $client->peerUser(
					user_id : 3982956158968140184,
				),
			),
			chat_instance : 6468569384836423822,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -5616337128862858710,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : -6804261215921557384,
					nanos : 90,
				),
				available_balance : $client->starsAmount(
					amount : 3763818082843857890,
					nanos : 100,
				),
				overall_revenue : $client->starsAmount(
					amount : -6230193984034657588,
					nanos : 30,
				),
				next_withdrawal_at : 17,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -143168177008494484,
			payload : 'ZBfLOxktFPMJp26E',
			qts : 68,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 68,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 10,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 2287621899327675818,
				access_hash : -4547486532972526541,
			),
			sub_chain_id : 29,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 57,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 7479653187796757138,
			saved_peer_id : $client->peerUser(
				user_id : -541116285060405696,
			),
			read_max_id : 84,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 1249174785014096541,
			saved_peer_id : $client->peerUser(
				user_id : 2456129925187167680,
			),
			read_max_id : 40,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 4783504992613732922,
			saved_peer_id : $client->peerUser(
				user_id : 8000871792716188070,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : -110963691652433555,
				access_hash : 9087390187511572823,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 22,
				from_id : $client->peerUser(
					user_id : -8582765260529960422,
				),
				date : 52,
				message : $client->textWithEntities(
					text : 'JcCVYUD6SGMOpjkr',
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
				paid_message_stars : -197215616325423439,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : -5472330249912020361,
				access_hash : -2347742631291745053,
			),
			from_id : $client->peerUser(
				user_id : 1405178336414845706,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : 6904828570347466178,
			),
			topic_id : 38,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : -7561247773387618766,
			),
			order : array(30),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : 1224835935858898999,
				access_hash : 1698465950649950659,
			),
			messages : array(77),
		),
		$client->updateStarGiftAuctionState(
			gift_id : -3969353915345762714,
			state : $client->starGiftAuctionState(
				version : 2,
				start_date : 50,
				end_date : 57,
				min_bid_amount : -4313007907604547426,
				bid_levels : array(
					$client->auctionBidLevel(
						pos : 92,
						amount : 8051522197115032588,
						date : 71,
					),
				),
				top_bidders : array(-5718708183576385561),
				next_round_at : 27,
				gifts_left : 93,
				current_round : 45,
				total_rounds : 25,
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : -8409517173010628606,
			text : 'Cnj65BOE2v90IWk8',
		),
		$client->updateBotSubscriptionExpire(
			user_id : 7045854835392792841,
			payload : 'ToiRxlbKEAIc6Que',
			until_date : 49,
			qts : 44,
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : -2170877060460217144,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : 3122468396590109479,
				bid_date : 94,
				min_bid_amount : 1910010301619298018,
				peer : $client->peerUser(
					user_id : 73026668476843877,
				),
				acquired_count : 9,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -7249198245242086897,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 1045988045252241661,
			title : 'NZMkDXuBjOHwry4d',
			photo : $client->chatPhotoEmpty(),
			participants_count : 17,
			date : 65,
			version : 41,
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
				until_date : 1,
			),
		),
		$client->chatForbidden(
			id : -6771020521717635921,
			title : 'IzSnsmqpJOEdHQhB',
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
			id : -7801291798260743599,
			access_hash : 7895480086425430989,
			title : 'W4TlOuJ3Nxc6qehE',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 79,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'qO1mPtV2QFKl7TDe',
					reason : 'jfy5blKN8mE7CqRg',
					text : 'jrgI4xBsE9vu0CAa',
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
				until_date : 7,
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
				until_date : 82,
			),
			participants_count : 98,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 36,
			),
			color : $client->peerColor(
				color : 30,
				background_emoji_id : -1186823046896783996,
			),
			profile_color : $client->peerColor(
				color : 13,
				background_emoji_id : -1593535861747213073,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 38,
			subscription_until_date : 42,
			bot_verification_icon : 5382038815529155575,
			send_paid_messages_stars : 2914949721469918061,
			linked_monoforum_id : 5471015998647632340,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -2935400766811225060,
			access_hash : -3983823821169954943,
			title : 'I9SJhvdgwfHPnXtB',
			until_date : 23,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1535709842968690429,
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
			id : -7805033001597426519,
			access_hash : -6388433461413363191,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 54,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'AvWwdKc5Ba1rntNL',
					reason : 'mfQRjkMlD08yuNzB',
					text : 'VPdUo8ORuLjxGYCN',
				),
			),
			bot_inline_placeholder : 'uoqwsR5WIYMpk9E1',
			lang_code : 'rMQXGfDPevRugn6c',
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
				max_id : 70,
			),
			color : $client->peerColor(
				color : 4,
				background_emoji_id : 4506596860608423641,
			),
			profile_color : $client->peerColor(
				color : 91,
				background_emoji_id : -8121123948328804406,
			),
			bot_active_users : 47,
			bot_verification_icon : 82070623978799047,
			send_paid_messages_stars : -1756386041960054511,
		),
	),
);
```