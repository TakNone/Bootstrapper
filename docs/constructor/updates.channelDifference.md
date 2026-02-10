# updates.channelDifference

**Description** : *The new updates*

**Layer** : 222

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
	pts : 58,
	timeout : 53,
	new_messages : array(
		$client->messageEmpty(
			id : 12,
			peer_id : $client->peerUser(
				user_id : 6883874649601859522,
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
				user_id : 4159402264961992837,
			),
			from_boosts_applied : 32,
			peer_id : $client->peerUser(
				user_id : 2345882823549694494,
			),
			saved_peer_id : $client->peerUser(
				user_id : -1404876798275572019,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 4566761386226901701,
				),
				from_name : 'q7nkFO0Aih5uPaTN',
				date : 60,
				channel_post : 9,
				post_author : 'IorPctsalJQmW81u',
				saved_from_peer : $client->peerUser(
					user_id : 4074325113953109589,
				),
				saved_from_msg_id : 69,
				saved_from_id : $client->peerUser(
					user_id : -9202597131773599416,
				),
				saved_from_name : 'YX2AromCj9p5idvb',
				saved_date : 67,
				psa_type : 'LIArtXTYhmV8x6aq',
			),
			via_bot_id : -6192178551403740799,
			via_business_bot_id : -783810605145511250,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 72,
				reply_to_peer_id : $client->peerUser(
					user_id : 8901306230567619988,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'Ragxb0inl72PD4T3',
					date : 20,
					channel_post : 81,
					post_author : 'NuQphSre6ZLP8jIg',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 0,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'Jn3aF8SfUIwHClGZ',
					saved_date : 36,
					psa_type : 'Ke4zXulOBVrIdWTy',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 89,
				quote_text : 'DM4hHcRZEU7CpXiy',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 51,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 40,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 67,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 28,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 81,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 92,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 10,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 75,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 70,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 59,
						language : 'OsJRI7hVrQpimDtz',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 68,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 87,
						user_id : -1130732801789299303,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 96,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 82,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 37,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 19,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 57,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 0,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 55,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 66,
						document_id : 4486999902193556524,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 36,
					),
				),
				quote_offset : 11,
				todo_item_id : 21,
			),
			date : 43,
			message : 'AT3pB2xmyi1CNEGV',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 77,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 71,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 47,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 83,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 100,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 54,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 81,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 33,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 17,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 34,
					language : 'qbrLIEF03uJHW4te',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 7,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 81,
					user_id : 2169938093028476249,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 70,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 68,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 35,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 33,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 96,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 24,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 42,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 28,
					document_id : 4156198766316173872,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 10,
				),
			),
			views : 21,
			forwards : 38,
			replies : $client->messageReplies(
				comments : true,
				replies : 64,
				replies_pts : 60,
				recent_repliers : array(
					$client->peerUser(
						user_id : 4093073193303233031,
					),
					$client->peerChat(
						chat_id : -4494594539637826521,
					),
					$client->peerChannel(
						channel_id : -9222589579034569065,
					),
				),
				channel_id : -3637120957699337207,
				max_id : 62,
				read_max_id : 49,
			),
			edit_date : 45,
			post_author : '1zXL3SMNJbPsylQ9',
			grouped_id : -3860627366503112775,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 15,
						reaction : $client->reactionEmpty(...),
						count : 68,
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
						count : 14,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'xN5aWDEwJz6v7OXg',
					reason : 'sX879vakNPZizlcW',
					text : 'RHBcsbDSnYZ58mhX',
				),
			),
			ttl_period : 15,
			quick_reply_shortcut_id : 11,
			effect : -2907753342874456505,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'BkOM5Vp39o1zh7cv',
				text : $client->textWithEntities(
					text : 'rnYL6FBbVZu27xRW',
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
			report_delivery_until_date : 36,
			paid_message_stars : -4103021550607164034,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -2336431740849696902,
					nanos : 43,
				),
				schedule_date : 22,
			),
			schedule_repeat_period : 73,
			summary_from_language : '6gaRes3i8PC9kyK1',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 99,
			from_id : $client->peerUser(
				user_id : 490830564329449475,
			),
			peer_id : $client->peerUser(
				user_id : -3958674444017127976,
			),
			saved_peer_id : $client->peerUser(
				user_id : 969553843457098376,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 87,
				reply_to_peer_id : $client->peerUser(
					user_id : 4550504010008738932,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'zxvhL9Qfpe0IisYa',
					date : 66,
					channel_post : 47,
					post_author : 'ybexckAuY3Zd9vJp',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 17,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'Jbz4jLWZc2Kv0eE1',
					saved_date : 25,
					psa_type : 'LaQmYH2NyIAoeSX9',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 69,
				quote_text : '4izpM9OHdBfRrYJy',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 26,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 24,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 54,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 15,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 92,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 83,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 78,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 68,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 38,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 31,
						language : 'qloveuFyXpEn5QWA',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 80,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 87,
						user_id : 2358580875088198945,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 76,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 65,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 91,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 36,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 37,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 15,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 64,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 61,
						document_id : 7647457170638734031,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 45,
					),
				),
				quote_offset : 91,
				todo_item_id : 99,
			),
			date : 77,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 67,
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
						count : 20,
					),
				),
			),
			ttl_period : 54,
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 80,
				peer_id : $client->peerUser(
					user_id : 8272754821702310091,
				),
			),
			pts : 83,
			pts_count : 31,
		),
		$client->updateMessageID(
			id : 49,
			random_id : -7547439555614932534,
		),
		$client->updateDeleteMessages(
			messages : array(56),
			pts : 84,
			pts_count : 14,
		),
		$client->updateUserTyping(
			user_id : -6189555548958868109,
			top_msg_id : 40,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 4147358274368041551,
			from_id : $client->peerUser(
				user_id : -8219763538995264465,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 6798916314800341230,
				self_participant : $client->chatParticipant(
					user_id : -617289707292011810,
					inviter_id : 3436552558826182468,
					date : 32,
				),
			),
		),
		$client->updateUserStatus(
			user_id : 4038021652247940530,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -6116683170514722469,
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
			date : 66,
			device : 'seTpWgkDYcvbHNXJ',
			location : 'JqDlE89IBkMX2VjP',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -3340345529332989083,
				chat_id : 89,
				date : 13,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 34,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 3,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 0,
			),
			date : 61,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 48,
			max_date : 17,
			date : 69,
		),
		$client->updateChatParticipantAdd(
			chat_id : 2158163234154972366,
			user_id : 4483450893381990785,
			inviter_id : -3078550679021665298,
			date : 80,
			version : 88,
		),
		$client->updateChatParticipantDelete(
			chat_id : 6639072743669400445,
			user_id : 2100945635268617329,
			version : 94,
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
					id : 4,
					ip_address : '127.0.0.1',
					port : 27,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : -2620461765747322080,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : false,
				mute_until : 70,
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
			inbox_date : 6,
			type : 'UymWB4bMDlkjOvHA',
			message : '7nwz2Ai84DqymaMF',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 40,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 46,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 50,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 41,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 60,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 44,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 75,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 89,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 59,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 42,
					language : 'PZlsSpn4U3QfeN2j',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 67,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 88,
					user_id : 7262428691191611675,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 81,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 88,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 63,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 22,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 7,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 24,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 23,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 77,
					document_id : 6957122356004778068,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 66,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-4647817713748062225),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-6721010291308141447),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-5241014897651646998),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(5977860883658074599),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 8298611773759793887,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 98,
			peer : $client->peerUser(
				user_id : -8235422724700770619,
			),
			top_msg_id : 20,
			max_id : 81,
			still_unread_count : 10,
			pts : 4,
			pts_count : 11,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 3869758287364709064,
			),
			max_id : 13,
			pts : 37,
			pts_count : 75,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -2713429742740159554,
				url : 'https://docs.liveproto.dev',
			),
			pts : 43,
			pts_count : 91,
		),
		$client->updateReadMessagesContents(
			messages : array(91),
			pts : 67,
			pts_count : 7,
			date : 3,
		),
		$client->updateChannelTooLong(
			channel_id : 649539747326325458,
			pts : 25,
		),
		$client->updateChannel(
			channel_id : -1309680212271070326,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 95,
				peer_id : $client->peerUser(
					user_id : -7004721051635482247,
				),
			),
			pts : 66,
			pts_count : 54,
		),
		$client->updateReadChannelInbox(
			folder_id : 3,
			channel_id : 5533926132158625409,
			max_id : 38,
			still_unread_count : 37,
			pts : 7,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 8988373220904541951,
			messages : array(89),
			pts : 47,
			pts_count : 22,
		),
		$client->updateChannelMessageViews(
			channel_id : -8961507906772023677,
			id : 13,
			views : 6,
		),
		$client->updateChatParticipantAdmin(
			chat_id : -7341058273824122608,
			user_id : 4461065221856292121,
			is_admin : false,
			version : 50,
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
					id : -4048377250118416789,
					access_hash : 5670586463901623668,
					title : 'y5Jbf7Zok4IeDwNq',
					short_name : '6HmR8Wfg7U1q3Dju',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 46,
					thumb_version : 22,
					thumb_document_id : 7365234550344334790,
					count : 70,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'lyEZFJCUhuVHXcNA',
						documents : array(5417897909866275854),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : 2617948566401242634,
						keyword : array('IxR8chbnaoUz0PKl'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : 8336393323842131913,
					),
					$client->document(
						id : -7963623645601289155,
						access_hash : -2396769425906774857,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 79,
						mime_type : 'ldbi2Wt7Ez1JsnYN',
						size : -7174489309896531486,
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
						dc_id : 99,
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
			order : array(4366381738483853998),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 346709226724757631,
			user_id : 3074518086902462334,
			query : 'BaFTef34xLHIEUtR',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'PzlZ7T2BmLF6MWcu',
		),
		$client->updateBotInlineSend(
			user_id : -1595137488165804257,
			query : 'HAyI28QTCNWthMU1',
			geo : $client->geoPointEmpty(),
			id : 'ut315wExd9sTQbzR',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 3,
				id : -5128362162691167910,
				access_hash : 8638620990903142971,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 34,
				peer_id : $client->peerUser(
					user_id : -2938469459332449841,
				),
			),
			pts : 57,
			pts_count : 60,
		),
		$client->updateBotCallbackQuery(
			query_id : 2029807801969432061,
			user_id : -7660652200691246285,
			peer : $client->peerUser(
				user_id : 4602933242272476350,
			),
			msg_id : 12,
			chat_instance : 3439667796951831325,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : '8dzZeif6gUmrsaXj',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 68,
				peer_id : $client->peerUser(
					user_id : -5609722744518000364,
				),
			),
			pts : 93,
			pts_count : 6,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 4358636492446864499,
			user_id : 4011183102604000828,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 39,
				id : 4605650657200099393,
				access_hash : 2035695026319753812,
			),
			chat_instance : -1540229788527859881,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'aE8iGpL7OHvZJ3PX',
		),
		$client->updateReadChannelOutbox(
			channel_id : 8506395150520348621,
			max_id : 47,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 6087602440431896761,
			),
			top_msg_id : 71,
			saved_peer_id : $client->peerUser(
				user_id : 5796939456190710905,
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
			channel_id : -5957294721953956406,
			webpage : $client->webPageEmpty(
				id : -7428717654776804827,
				url : 'https://docs.liveproto.dev',
			),
			pts : 7,
			pts_count : 76,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 32,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -8902190903990671714,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 93,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 8624601384735898582,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 85,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'hVA01bT6ksz8aU5x',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -459069968151518511,
			data : $client->dataJSON(
				data : 'rbyWvB5dxmO2iHVN',
			),
			timeout : 96,
		),
		$client->updateBotShippingQuery(
			query_id : 8215256412697362824,
			user_id : 8024759766849950037,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : '69TDGgvrbn2caBlm',
				street_line2 : 'SpWEkacuToABt3CI',
				city : 'jwW6fZsJ5mtQ1LAd',
				state : 'KIvbWGp4r6hxZeCS',
				country_iso2 : 'mRe4Nn7plQhYrFvP',
				post_code : 'U5YJtdXAN9yhaqPO',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -2643219001597582996,
			user_id : 6377683599780917082,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'G3yt6XRVzUA2LTYd',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'EBPlzb1YNvecg7yS',
					street_line2 : 'jOMbIscdp6QqultF',
					city : 'G6Mjw8inyHCqU3T1',
					state : 'CgVxRSYy7riWO50J',
					country_iso2 : 'lqps4z7oZCkDIe2g',
					post_code : 'ltI9bEzrLSxQU4Y3',
				),
			),
			shipping_option_id : '9bZejHyht6vXclnK',
			currency : 'NWvtnY8Gh4F6fHMB',
			total_amount : -5015436526294738690,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 1145970473296465197,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'augnk6wM8Nz9cRdy',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'qzFMgfaPGxT7jnSw',
				from_version : 63,
				version : 88,
				strings : array(
					$client->langPackString(
						key : 'VctH70JP1F4lGUdR',
						value : '2NVjb8Pogvp4UYT7',
					),
					$client->langPackStringPluralized(
						key : 'xgrsOM7d9zNjubUY',
						zero_value : 'yOeuA2In0YmF64vC',
						one_value : 'AKMUHjQkbc4iOvlx',
						two_value : 'j2AF6znLIvRCe8SN',
						few_value : 'UpP1LYubxj3gmrOK',
						many_value : 'Qq6NShGe9EHcyWxK',
						other_value : 'Ka9SnslXcRWfxDjJ',
					),
					$client->langPackStringDeleted(
						key : 'Ojng9DxERhvQYJI0',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -2722237267073120055,
			top_msg_id : 13,
			saved_peer_id : $client->peerUser(
				user_id : 7792202519153398415,
			),
			messages : array(13),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 7187365727760614318,
			available_min_id : 16,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -3882914357952761213,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : -6977423175204985652,
			),
		),
		$client->updateMessagePoll(
			poll_id : 6117483591351788274,
			poll : $client->poll(
				id : 3358157939699313036,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : 'erqUgwo9dlP76NGt',
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
				close_period : 51,
				close_date : 24,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 15,
					),
				),
				total_voters : 4,
				recent_voters : array(
					$client->peerUser(
						user_id : -9172396169157311364,
					),
					$client->peerChat(
						chat_id : 1898712477625660197,
					),
					$client->peerChannel(
						channel_id : 8135888804105938237,
					),
				),
				solution : 'rYX8ox2Pqlm6QZ4S',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 19,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 89,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 47,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 86,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 48,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 66,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 5,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 45,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 7,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 57,
						language : '8irs5vEZTPIHLUfS',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 53,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 81,
						user_id : 2494863751894150129,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 99,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 97,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 89,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 84,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 22,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 72,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 55,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 42,
						document_id : -8614304612132947307,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 9,
					),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 5711518337275202497,
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
				until_date : 71,
			),
			version : 97,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : -1609444657105328447,
					),
					folder_id : 90,
				),
			),
			pts : 71,
			pts_count : 81,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -5222037216776805299,
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
				geo_distance : 18,
				request_chat_title : '4dnVXsfBt9A2wFZp',
				request_chat_date : 81,
				business_bot_id : -3257036675450517254,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -2468701532953248619,
				registration_month : 'Q0hU9I3FjfCyROHr',
				phone_country : '+1234567890',
				name_change_date : 16,
				photo_change_date : 50,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : 6779466023983463630,
					),
					expires : 34,
					distance : 13,
				),
				$client->peerSelfLocated(
					expires : 30,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 20,
				peer_id : $client->peerUser(
					user_id : 6352094088530290137,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 9082361028726978592,
			),
			messages : array(19),
			sent_messages : array(50),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -8916831479016639147,
				access_hash : 4313814241594080908,
				slug : '0fot3lEbVaKzrXgQ',
				title : '2Xgl0uGFmoRVND1O',
				document : $client->documentEmpty(
					id : 5617199939162434494,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 5,
						outbox_accent_color : 6,
						message_colors : array(47),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'zCFcYDkyK20BSVJj',
				installs_count : 99,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -7204516124534043741,
			),
			msg_id : 54,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 4685755112288132330,
			peer : $client->peerUser(
				user_id : -9017074378835959397,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 3,
		),
		$client->updateDialogFilter(
			id : 65,
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
				id : 73,
				title : $client->textWithEntities(
					text : 'k7zLYSdcAB4rRfOi',
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
				emoticon : 'lOoG4F82nmd6RkQ0',
				color : 80,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(0),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -3739567742605246705,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : 3632241825594110069,
			id : 80,
			forwards : 48,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 4171497550758174874,
			top_msg_id : 67,
			read_max_id : 84,
			broadcast_id : 9126047189337455079,
			broadcast_post : 38,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 5088832963010001658,
			top_msg_id : 16,
			read_max_id : 29,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 6035612177461567686,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -8940017283577612570,
			top_msg_id : 97,
			from_id : $client->peerUser(
				user_id : 7102492607662537104,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 893871529673402843,
			),
			messages : array(30),
			pts : 59,
			pts_count : 58,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -1589315089038486998,
			messages : array(63),
			pts : 18,
			pts_count : 12,
		),
		$client->updateChat(
			chat_id : -8821454800317194362,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 8851585648077694198,
				access_hash : -730165063141300971,
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
						user_id : 470867914517345658,
					),
					date : 100,
					active_date : 66,
					source : 42,
					volume : 62,
					about : 'Iya5A1suKhjpldgz',
					raise_hand_rating : -379112928150038114,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : '14YCwU6f9ONygj5Z',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 44,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'KNTO8BqJhycV1eIL',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 52,
					),
					paid_stars_total : -6851957353510750200,
				),
			),
			version : 27,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : 7851920607348607834,
			),
			call : $client->groupCallDiscarded(
				id : -1700448012535669096,
				access_hash : 4470676195382419353,
				duration : 49,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 4623299957858810869,
			),
			ttl_period : 97,
		),
		$client->updateChatParticipant(
			chat_id : -3521236033156075396,
			date : 85,
			actor_id : 815902832786178064,
			user_id : 5827940075470749278,
			prev_participant : $client->chatParticipant(
				user_id : -8485650453045065777,
				inviter_id : -8436840502308420348,
				date : 92,
			),
			new_participant : $client->chatParticipant(
				user_id : -2847001617154263838,
				inviter_id : 2745114497677831783,
				date : 94,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'QtUWafXGJd6onPcK',
				admin_id : 6858426741978263759,
				date : 5,
				start_date : 56,
				expire_date : 76,
				usage_limit : 56,
				usage : 70,
				requested : 18,
				subscription_expired : 62,
				title : 'Zoc1jrV9lMyPCnGk',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 61,
					amount : -2779274134102918671,
				),
			),
			qts : 62,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 6165025312395328015,
			date : 17,
			actor_id : 1370308547710853060,
			user_id : 8171823028031554902,
			prev_participant : $client->channelParticipant(
				user_id : 1389856155778684673,
				date : 68,
				subscription_until_date : 33,
			),
			new_participant : $client->channelParticipant(
				user_id : 8946921346925579834,
				date : 12,
				subscription_until_date : 90,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'Yl1xDRGwsBSzmc3p',
				admin_id : 7227781793972023674,
				date : 72,
				start_date : 57,
				expire_date : 16,
				usage_limit : 18,
				usage : 62,
				requested : 4,
				subscription_expired : 16,
				title : 'aKnu1wPxDdWpm6Yk',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 26,
					amount : -1776529686387260092,
				),
			),
			qts : 69,
		),
		$client->updateBotStopped(
			user_id : 9073291488207085570,
			date : 84,
			stopped : false,
			qts : 82,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : '5BD9v4KjmtuEbs7c',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -799923635637464191,
			),
			bot_id : -1942415070847986400,
			commands : array(
				$client->botCommand(
					command : 'ms4M13P5fNrEi9pQ',
					description : '75G2YQ1y8lHCewak',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -7785979188863647957,
			),
			requests_pending : 30,
			recent_requesters : array(475364144103594508),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 5640706833172525892,
			),
			date : 98,
			user_id : 6166828021058278318,
			about : 'WwYAflVp1evJIRj4',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'B46PSyE7hMiTkWlo',
				admin_id : -761252637193052031,
				date : 29,
				start_date : 92,
				expire_date : 67,
				usage_limit : 77,
				usage : 41,
				requested : 1,
				subscription_expired : 75,
				title : 'CogAqmkn8wvFyIeY',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 24,
					amount : 6190523583688701953,
				),
			),
			qts : 71,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 4162948113540107794,
			),
			msg_id : 94,
			top_msg_id : 53,
			saved_peer_id : $client->peerUser(
				user_id : -7601959108880508926,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 21,
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
						date : 92,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 98,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 887323263921120668,
		),
		$client->updateBotMenuButton(
			bot_id : 7039355401929859039,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 197329286368721516,
			),
			msg_id : 8,
			transcription_id : -3522969639844139965,
			text : 'ldpP7XxR3TGKeqZh',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 1022725018100335104,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 4476557366426117886,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 118659299250773302,
			),
			msg_id : 96,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 77,
					h : 66,
					thumb : $client->photoSizeEmpty(
						type : '1sdfyS0RC39vIpF8',
					),
					video_duration : 33,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : 7455161703114685887,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -1223395919694731473,
			),
			story : $client->storyItemDeleted(
				id : 21,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : 4269697094283515686,
			),
			max_id : 11,
		),
		$client->updateStoryID(
			id : 62,
			random_id : 8089636020304642398,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 17,
				cooldown_until_date : 55,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -7710471736574579722,
			),
			story_id : 36,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -4636640778150931962,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : '9KhxuAzLTb6XRE1W',
				user_id : 6576231563006313287,
				giveaway_msg_id : 96,
				date : 42,
				expires : 11,
				used_gift_slug : 'XDjHQ6LSfYoEbUdT',
				multiplier : 25,
				stars : -1072561598560018902,
			),
			qts : 49,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -7854760822720992714,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -4666085908119921139,
			),
			wallpaper : $client->wallPaper(
				id : 488962256378825005,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -578732643505025205,
				slug : 'bdZKJETosaURVzqy',
				document : $client->documentEmpty(
					id : 441619182256204928,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 26,
					second_background_color : 75,
					third_background_color : 88,
					fourth_background_color : 41,
					intensity : 18,
					rotation : 61,
					emoticon : '5SLJ1YCRmEQPu37F',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 3610080629335364539,
			),
			msg_id : 3,
			date : 46,
			actor : $client->peerUser(
				user_id : -3666236537036371591,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'Ufo48ha6FEXsBCx1',
				),
				$client->reactionCustomEmoji(
					document_id : -4210987882737217898,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'Zf8bMnzv7tmFX4AH',
				),
				$client->reactionCustomEmoji(
					document_id : 8557493132459352264,
				),
				$client->reactionPaid(),
			),
			qts : 100,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -4707212930888680745,
			),
			msg_id : 17,
			date : 58,
			reactions : array(
				$client->reactionCount(
					chosen_order : 46,
					reaction : $client->reactionEmpty(),
					count : 79,
				),
			),
			qts : 4,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -3774239393285713801,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 1662248973402192604,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 78,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'SMyt1uq2zLODmdh7',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 98,
					shortcut : 'kfWiAsGYZo6hRj7y',
					top_message : 14,
					count : 23,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 47,
				shortcut : 'tBfLnZqbMgHaThmG',
				top_message : 32,
				count : 25,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 5,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 62,
				peer_id : $client->peerUser(
					user_id : -3584337833492772145,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 49,
			messages : array(34),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'ev8pIzB7WycVtouG',
				user_id : -5811686740062659359,
				dc_id : 39,
				date : 89,
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
			qts : 78,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'jV9Ku8tlfEwRd7g2',
			message : $client->messageEmpty(
				id : 29,
				peer_id : $client->peerUser(
					user_id : 5175563273338376103,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 4,
				peer_id : $client->peerUser(
					user_id : -70985205180262240,
				),
			),
			qts : 29,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'zbqSwPMYN0mht4s9',
			message : $client->messageEmpty(
				id : 9,
				peer_id : $client->peerUser(
					user_id : 4751596262348743556,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 100,
				peer_id : $client->peerUser(
					user_id : 1133069146272529981,
				),
			),
			qts : 81,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'zASiu1gPnrOqvcKW',
			peer : $client->peerUser(
				user_id : 8889851820049719635,
			),
			messages : array(83),
			qts : 11,
		),
		$client->updateNewStoryReaction(
			story_id : 63,
			peer : $client->peerUser(
				user_id : 2463345487043697671,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 3951776053977824375,
				nanos : 12,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -4951523997491340520,
			user_id : 2578299770198025682,
			connection_id : 'kWSbDUEK4Ic7rCOa',
			message : $client->messageEmpty(
				id : 10,
				peer_id : $client->peerUser(
					user_id : 3782808027943674967,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 37,
				peer_id : $client->peerUser(
					user_id : 8081845003623529888,
				),
			),
			chat_instance : -158167005346993321,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -3796594323414239255,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : -4824916701470856098,
					nanos : 49,
				),
				available_balance : $client->starsAmount(
					amount : -1723893575495398169,
					nanos : 47,
				),
				overall_revenue : $client->starsAmount(
					amount : -5108631122445476797,
					nanos : 58,
				),
				next_withdrawal_at : 99,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -5769879358910584734,
			payload : 'fWYKC7Ir9e1dnTZj',
			qts : 12,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 53,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 94,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -6660935413129155605,
				access_hash : 5855515842347754996,
			),
			sub_chain_id : 84,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 93,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -3737383056223195884,
			saved_peer_id : $client->peerUser(
				user_id : 2614468726993715387,
			),
			read_max_id : 41,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 5152332527529113564,
			saved_peer_id : $client->peerUser(
				user_id : 6303096674275620328,
			),
			read_max_id : 78,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 6746462622853454078,
			saved_peer_id : $client->peerUser(
				user_id : -416806957327606698,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : -4054574189983328570,
				access_hash : -3159461003857651657,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 76,
				from_id : $client->peerUser(
					user_id : -7987547472567303960,
				),
				date : 9,
				message : $client->textWithEntities(
					text : '9xAfC3X8qJtcRUEG',
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
				paid_message_stars : -7687894258760866176,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : 1855023827790854605,
				access_hash : -163810442418916484,
			),
			from_id : $client->peerUser(
				user_id : 9061458339403611678,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : 9057186454566208584,
			),
			topic_id : 51,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : 5821160591481650613,
			),
			order : array(88),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : 901119317516982801,
				access_hash : 5005377056094993837,
			),
			messages : array(4),
		),
		$client->updateStarGiftAuctionState(
			gift_id : -6326102352981012276,
			state : $client->starGiftAuctionStateNotModified(),
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : 2456648245145655093,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : 5269219770588595292,
				bid_date : 61,
				min_bid_amount : -6104805360115147677,
				bid_peer : $client->peerUser(
					user_id : 2306845846444353607,
				),
				acquired_count : 44,
			),
		),
		$client->updateEmojiGameInfo(
			info : $client->messages->emojiGameUnavailable(),
		),
		$client->updateStarGiftCraftFail(),
	),
	chats : array(
		$client->chatEmpty(
			id : -995104453629002430,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 3779732567792245578,
			title : 'UARnau1c9hK0NSbM',
			photo : $client->chatPhotoEmpty(),
			participants_count : 69,
			date : 74,
			version : 12,
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
				until_date : 51,
			),
		),
		$client->chatForbidden(
			id : 4934180075443330141,
			title : 'wb4q0sRtlS1cfzgZ',
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
			id : 5843455572988665995,
			access_hash : -1527777104164092948,
			title : 'EDchXfw6uAioz3HV',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 3,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'EUMVqdIW5xO4Ttb8',
					reason : '6Msmy8oKxp74Bgnl',
					text : 'semT4MX6PBrZOKyS',
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
				until_date : 36,
			),
			participants_count : 55,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 56,
			),
			color : $client->peerColor(
				color : 79,
				background_emoji_id : -6112824615696439339,
			),
			profile_color : $client->peerColor(
				color : 30,
				background_emoji_id : 6133789251511566328,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 79,
			subscription_until_date : 70,
			bot_verification_icon : -9081163779624277697,
			send_paid_messages_stars : 6788862347282638872,
			linked_monoforum_id : -3215327041790373252,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -2803666477806195408,
			access_hash : -7378900623902424425,
			title : 'GqnQ67OEVzM3J09v',
			until_date : 51,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1648085808922820991,
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
			id : -8492774406526380606,
			access_hash : -3167643198640694104,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 68,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Etbolvg3WcL4M18Y',
					reason : 'T0dF6rqKfM9bHY2z',
					text : '5mxHJZwYeFUIMyXs',
				),
			),
			bot_inline_placeholder : 'RGMKVHzZxhtF9wNl',
			lang_code : 'Lzw3m2NugSQ4aeHU',
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
				max_id : 18,
			),
			color : $client->peerColor(
				color : 92,
				background_emoji_id : -3807034066682027616,
			),
			profile_color : $client->peerColor(
				color : 28,
				background_emoji_id : -5889216310452051869,
			),
			bot_active_users : 79,
			bot_verification_icon : 5547494119233211371,
			send_paid_messages_stars : -1298750908925810397,
		),
	),
);
```