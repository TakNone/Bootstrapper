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
	pts : 16,
	timeout : 55,
	new_messages : array(
		$client->messageEmpty(
			id : 47,
			peer_id : $client->peerUser(
				user_id : -6886467074439923650,
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
			id : 0,
			from_id : $client->peerUser(
				user_id : 3721124023681540696,
			),
			from_boosts_applied : 4,
			peer_id : $client->peerUser(
				user_id : -7006800555410195922,
			),
			saved_peer_id : $client->peerUser(
				user_id : 6290497782997446991,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -6518208423329114383,
				),
				from_name : 'MIqf4jRnKiV3LYsx',
				date : 3,
				channel_post : 59,
				post_author : 'j6nuemXSqKlUz9Ac',
				saved_from_peer : $client->peerUser(
					user_id : 3431919762816680230,
				),
				saved_from_msg_id : 46,
				saved_from_id : $client->peerUser(
					user_id : -1662653325241707692,
				),
				saved_from_name : 'Ibl8efpq7AunJk4r',
				saved_date : 40,
				psa_type : 'O9mwscvTAGKdrajt',
			),
			via_bot_id : 4106629221625836949,
			via_business_bot_id : 7852618833524907182,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 17,
				reply_to_peer_id : $client->peerUser(
					user_id : -2100389959803789048,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'KZtHBqCkDgl62Rd3',
					date : 73,
					channel_post : 74,
					post_author : 'JIHtUXGvyzKrYh5q',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 82,
					saved_from_id : $client->peerUser(...),
					saved_from_name : '86HjLmizb4KYCF5l',
					saved_date : 76,
					psa_type : 'FSkvWUV27IbBGguM',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 91,
				quote_text : 'ioDK690geRqmWC1S',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 25,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 42,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 28,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 8,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 24,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 84,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 5,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 64,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 78,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 94,
						language : 'bxJg760caEW9Us8B',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 60,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 83,
						user_id : -6389752282493715764,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 19,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 83,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 12,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 93,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 53,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 55,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 63,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 60,
						document_id : -7193705462509117232,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 90,
					),
				),
				quote_offset : 2,
				todo_item_id : 38,
			),
			date : 93,
			message : 'RV9J2lfa1FtsObQ6',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 99,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 86,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 58,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 100,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 87,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 14,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 11,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 80,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 9,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 32,
					language : 'DhJIqvLu9ByR2Fwc',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 95,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 91,
					user_id : -1927035662846423599,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 29,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 4,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 3,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 31,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 14,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 57,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 76,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 62,
					document_id : -3798766001067719098,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 4,
				),
			),
			views : 34,
			forwards : 88,
			replies : $client->messageReplies(
				comments : true,
				replies : 66,
				replies_pts : 88,
				recent_repliers : array(
					$client->peerUser(
						user_id : -4148592026675622752,
					),
					$client->peerChat(
						chat_id : -2017005747286243913,
					),
					$client->peerChannel(
						channel_id : 5657058339137026441,
					),
				),
				channel_id : 6806228105211220104,
				max_id : 60,
				read_max_id : 54,
			),
			edit_date : 65,
			post_author : 'gxNGaXdQI8iJv7rB',
			grouped_id : 7048035497735219286,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 88,
						reaction : $client->reactionEmpty(...),
						count : 7,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 43,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 55,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'bqoycvdRW21ePILw',
					reason : 'T0Ormwv5tSj6EUBR',
					text : 'azj5CDLGAxBocYwO',
				),
			),
			ttl_period : 90,
			quick_reply_shortcut_id : 26,
			effect : 4401510566359639325,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'yXMOpm3TwgBsrt0o',
				text : $client->textWithEntities(
					text : 'xoBmTJNlz3Gb8OAE',
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
			report_delivery_until_date : 91,
			paid_message_stars : -2504458725830642342,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -47405166759213297,
					nanos : 48,
				),
				schedule_date : 99,
			),
			schedule_repeat_period : 60,
			summary_from_language : 'vbionqNIaWG73fpY',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 65,
			from_id : $client->peerUser(
				user_id : -1339807075871034985,
			),
			peer_id : $client->peerUser(
				user_id : -3569566954960431034,
			),
			saved_peer_id : $client->peerUser(
				user_id : 1855081055937329749,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 63,
				reply_to_peer_id : $client->peerUser(
					user_id : -3032470145926597691,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'nb9crvitZPABGps4',
					date : 25,
					channel_post : 46,
					post_author : '4C9tKXZiBMc6Vvnd',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 98,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'rE4fWATK9x73gIFq',
					saved_date : 59,
					psa_type : 'MjDwuKn48HiaX9fG',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 91,
				quote_text : 'GjWywMYTsVg5q9zk',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 50,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 12,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 73,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 60,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 65,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 66,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 92,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 52,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 65,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 22,
						language : 'aQVE6inYRe7NqrhB',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 50,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 29,
						user_id : 9041481279000692777,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 27,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 0,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 26,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 98,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 43,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 79,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 0,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 58,
						document_id : -2152647308907925957,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 17,
					),
				),
				quote_offset : 45,
				todo_item_id : 45,
			),
			date : 59,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 49,
						reaction : $client->reactionEmpty(...),
						count : 66,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 56,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 28,
					),
				),
			),
			ttl_period : 90,
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 24,
				peer_id : $client->peerUser(
					user_id : -339208872680076337,
				),
			),
			pts : 100,
			pts_count : 42,
		),
		$client->updateMessageID(
			id : 85,
			random_id : -1220882885755570335,
		),
		$client->updateDeleteMessages(
			messages : array(85),
			pts : 19,
			pts_count : 3,
		),
		$client->updateUserTyping(
			user_id : -1758976850968906403,
			top_msg_id : 30,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 2448029980460679362,
			from_id : $client->peerUser(
				user_id : 6755449770989834140,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -7948806190431691291,
				self_participant : $client->chatParticipant(
					user_id : 6568502550833324369,
					inviter_id : 3869122208741988841,
					date : 58,
				),
			),
		),
		$client->updateUserStatus(
			user_id : 655363634416494737,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 4439747628554511465,
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
			date : 4,
			device : 'WbckV85D73gsTl0a',
			location : 'Z7691BPYCtF2omLK',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 5517755682499611699,
				chat_id : 44,
				date : 82,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 95,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 82,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 7,
			),
			date : 96,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 55,
			max_date : 93,
			date : 71,
		),
		$client->updateChatParticipantAdd(
			chat_id : -3452100681717616422,
			user_id : 1223256291120229152,
			inviter_id : -8345490887621598941,
			date : 65,
			version : 1,
		),
		$client->updateChatParticipantDelete(
			chat_id : 9212628650863360897,
			user_id : -1987378790656245343,
			version : 73,
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
					id : 78,
					ip_address : '127.0.0.1',
					port : 17,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : 8849811061781135819,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : false,
				mute_until : 35,
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
			inbox_date : 72,
			type : 'PXIHvEhUaMV5tJ3w',
			message : 'DYrXhdKWt3vpHqwi',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 56,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 44,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 5,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 16,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 23,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 46,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 62,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 53,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 46,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 59,
					language : 'kw2O9LHd7aMb4g1e',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 4,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 0,
					user_id : -225728465511696869,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 66,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 97,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 14,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 11,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 49,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 1,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 63,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 26,
					document_id : -6264407638493636102,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 16,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(1324016284436242698),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(3986219255940532093),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-7909528871789350314),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-5546679373956416510),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -3689709540557464929,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 54,
			peer : $client->peerUser(
				user_id : 2716189846404463156,
			),
			top_msg_id : 46,
			max_id : 25,
			still_unread_count : 65,
			pts : 47,
			pts_count : 51,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 625411507698940594,
			),
			max_id : 63,
			pts : 94,
			pts_count : 20,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -6203702790849545568,
				url : 'https://docs.liveproto.dev',
			),
			pts : 84,
			pts_count : 65,
		),
		$client->updateReadMessagesContents(
			messages : array(3),
			pts : 60,
			pts_count : 20,
			date : 90,
		),
		$client->updateChannelTooLong(
			channel_id : 4797228150169371603,
			pts : 5,
		),
		$client->updateChannel(
			channel_id : 4250558287844491766,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 80,
				peer_id : $client->peerUser(
					user_id : 1394743742608622308,
				),
			),
			pts : 19,
			pts_count : 36,
		),
		$client->updateReadChannelInbox(
			folder_id : 55,
			channel_id : 1897301036499469060,
			max_id : 94,
			still_unread_count : 17,
			pts : 67,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 3841055581842226151,
			messages : array(9),
			pts : 93,
			pts_count : 29,
		),
		$client->updateChannelMessageViews(
			channel_id : -360451483447902819,
			id : 75,
			views : 100,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 5747934313983329591,
			user_id : 1916188154667011985,
			is_admin : true,
			version : 10,
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
					installed_date : 53,
					id : -4134903635627599640,
					access_hash : 9213308216575635077,
					title : 'hGZXM4QFUAqmnWSz',
					short_name : 'KlQD2B7zAgN6acGq',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 41,
					thumb_version : 9,
					thumb_document_id : 8043188531094362888,
					count : 81,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'EtwhZcrS81Ade9jy',
						documents : array(1989168476720607856),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : 3770119346925389255,
						keyword : array('RoaMyXDkuKV2ACS6'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : -3247451270133172672,
					),
					$client->document(
						id : 6935821049166667178,
						access_hash : -8957151554038371799,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 99,
						mime_type : 'YdRaUGb67n8WSw5k',
						size : -7281385363979249646,
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
						dc_id : 44,
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
			order : array(4337911816342059746),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -3152499542738781173,
			user_id : -8463311734974127952,
			query : 'vpiwRskG9nW8T1qI',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'QNCAaV4j93Ln6Prs',
		),
		$client->updateBotInlineSend(
			user_id : 4777975740387330315,
			query : 'jCNdXuFU8x76QDeP',
			geo : $client->geoPointEmpty(),
			id : 'dWwVkp9asb8v1OyR',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 51,
				id : 3925931631007474659,
				access_hash : 1329792628593179733,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 77,
				peer_id : $client->peerUser(
					user_id : -4896514037911314033,
				),
			),
			pts : 27,
			pts_count : 44,
		),
		$client->updateBotCallbackQuery(
			query_id : -1971475766101910570,
			user_id : 3900607749475570566,
			peer : $client->peerUser(
				user_id : -6775875426566355306,
			),
			msg_id : 12,
			chat_instance : -5078888194994549303,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : '9CXlJZbihtqAea2G',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 96,
				peer_id : $client->peerUser(
					user_id : -1636625238528173050,
				),
			),
			pts : 58,
			pts_count : 59,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 6179427750903520105,
			user_id : -3993490661444507781,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 89,
				id : -9191927394887345051,
				access_hash : 7752874177454691111,
			),
			chat_instance : -134625083396079810,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'IiHPMVEsGtnj1Ye8',
		),
		$client->updateReadChannelOutbox(
			channel_id : -1836335859438406761,
			max_id : 79,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 1285645932572642853,
			),
			top_msg_id : 76,
			saved_peer_id : $client->peerUser(
				user_id : 782156608594007590,
			),
			draft : $client->draftMessageEmpty(
				date : 91,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -1042034396174594260,
			webpage : $client->webPageEmpty(
				id : 8679626158712609522,
				url : 'https://docs.liveproto.dev',
			),
			pts : 45,
			pts_count : 11,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 72,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 6662402252710882924,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 37,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -6640195373845917317,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 63,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'Sw5lhOWA6xvsgcMG',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -4488960601347935391,
			data : $client->dataJSON(
				data : '5bKLYmsHVA7crugQ',
			),
			timeout : 41,
		),
		$client->updateBotShippingQuery(
			query_id : 8852272561503500214,
			user_id : 8925622474918279249,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'R74UdnQLZyDo8aEs',
				street_line2 : 'VFJYyQOGx3McufPU',
				city : 'yK2Z9WXGr7lpRhcs',
				state : 'gDoTieRNpYxWK8M1',
				country_iso2 : 'WZY5ExyuMRX8GVSw',
				post_code : '8fKWLvGTlOCrqM9A',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 4662258804411216054,
			user_id : 3818561003847862784,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : '2BUk9Y6KjzE71emV',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'YmHJ6nTd9aPVAIjK',
					street_line2 : 'sbfQOkTymzGXxgdY',
					city : 'bjxUCGyIXMBpl7rJ',
					state : '47xonMbePBUjd8GI',
					country_iso2 : 'u4c2nIH0pShXlqaZ',
					post_code : 'DoqaPsc7VwCJ84RL',
				),
			),
			shipping_option_id : 'dYKXbF6p8mGHJhay',
			currency : 'slBWmQO3p89gqZrF',
			total_amount : 869273294973460890,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 1199228564695471380,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'xE2JSg71DsldFrPw',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'nEyzx9G6AmCtcDjh',
				from_version : 52,
				version : 1,
				strings : array(
					$client->langPackString(
						key : 'l9vrngj3ayLJQYmh',
						value : '6iQqIrfT7XGp18oz',
					),
					$client->langPackStringPluralized(
						key : 'TGB9H7UlWJeZCh6k',
						zero_value : 'LC5WVYa9mr1E3gcb',
						one_value : 'x4ezuOhjDQWLXaIU',
						two_value : 'mrz2qZfetYoguGsR',
						few_value : 'E560fsH1OtZJRTMX',
						many_value : 'V1sebMrAKGWqoSzu',
						other_value : 'icFjIQ7ZsqDJdMLW',
					),
					$client->langPackStringDeleted(
						key : 'hcVBWXILdTQ1K9e6',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -7557284372087327563,
			top_msg_id : 58,
			saved_peer_id : $client->peerUser(
				user_id : 6456351456659070483,
			),
			messages : array(0),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -4745931427100536331,
			available_min_id : 10,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -4599580225775446034,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : -3750211710629660521,
			),
		),
		$client->updateMessagePoll(
			poll_id : -661929448960054944,
			poll : $client->poll(
				id : -6711996236496286697,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : '6VJiHg29wpYkS7vM',
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
				close_period : 94,
				close_date : 76,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 56,
					),
				),
				total_voters : 84,
				recent_voters : array(
					$client->peerUser(
						user_id : -1255503863443754964,
					),
					$client->peerChat(
						chat_id : -2311060929312634390,
					),
					$client->peerChannel(
						channel_id : -6118951054685457287,
					),
				),
				solution : 'G7ekt8Nibzhvx5dg',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 88,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 48,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 51,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 24,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 17,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 99,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 96,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 50,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 25,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 87,
						language : 'ujvSC57dsn2YMrNQ',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 84,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 94,
						user_id : 8636903209668063382,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 6,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 48,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 22,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 4,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 89,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 80,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 28,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 3,
						document_id : 4546331698298155014,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 64,
					),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : -3197323811908972259,
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
				until_date : 35,
			),
			version : 48,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : 7471947290621751577,
					),
					folder_id : 25,
				),
			),
			pts : 91,
			pts_count : 83,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -5630303604119953073,
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
				geo_distance : 55,
				request_chat_title : 'spqVBPIHL758EoR3',
				request_chat_date : 81,
				business_bot_id : 7573668319712888321,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 4266093658803225416,
				registration_month : 'OmrU3fAHqcWjCgZh',
				phone_country : '+1234567890',
				name_change_date : 9,
				photo_change_date : 77,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : 6121374498541082685,
					),
					expires : 23,
					distance : 11,
				),
				$client->peerSelfLocated(
					expires : 41,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 89,
				peer_id : $client->peerUser(
					user_id : -1254168731856355327,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 4191985544172655055,
			),
			messages : array(94),
			sent_messages : array(36),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 3002725656424199218,
				access_hash : -5393094491916128416,
				slug : 'BtwImArvCTku2VKE',
				title : '2yCJ7SBhObcfoUVT',
				document : $client->documentEmpty(
					id : 8678639731136407667,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 28,
						outbox_accent_color : 42,
						message_colors : array(33),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'AtndKyBvQHIsgbi7',
				installs_count : 91,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -7571205382919621944,
			),
			msg_id : 53,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -2425379647894016728,
			peer : $client->peerUser(
				user_id : 5868796763493941589,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 86,
		),
		$client->updateDialogFilter(
			id : 83,
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
				id : 100,
				title : $client->textWithEntities(
					text : 'WVQlN9d3RYXGj54b',
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
				emoticon : 'kINOPUB3gu15d8pM',
				color : 60,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(61),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -3376289428636441737,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -7250203501667456260,
			id : 91,
			forwards : 89,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -9120862251812898551,
			top_msg_id : 29,
			read_max_id : 5,
			broadcast_id : 4154432469456849350,
			broadcast_post : 4,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 5379112507888295101,
			top_msg_id : 3,
			read_max_id : 53,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -6574564710643050559,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -1402727060235101591,
			top_msg_id : 9,
			from_id : $client->peerUser(
				user_id : -3597201226298318380,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -5498662580795810237,
			),
			messages : array(1),
			pts : 29,
			pts_count : 79,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 3876948006442386180,
			messages : array(25),
			pts : 65,
			pts_count : 17,
		),
		$client->updateChat(
			chat_id : 755121478878945603,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -647118587916639309,
				access_hash : -6047084818535876920,
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
						user_id : 7663047048414755160,
					),
					date : 7,
					active_date : 3,
					source : 47,
					volume : 62,
					about : 'FBhAzvp8LwJeWSgq',
					raise_hand_rating : 1426911100856686957,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'NWfZs7JxC2vUYOly',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 87,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'YGyRxE2Ae5kS07Xv',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 10,
					),
					paid_stars_total : 5308853929912036320,
				),
			),
			version : 59,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : 2142970377305504474,
			),
			call : $client->groupCallDiscarded(
				id : -2343744584728245798,
				access_hash : 520037495889778658,
				duration : 15,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 6736236717708771182,
			),
			ttl_period : 0,
		),
		$client->updateChatParticipant(
			chat_id : -2045533969342132977,
			date : 94,
			actor_id : 1082095601100731867,
			user_id : -2772392874697029519,
			prev_participant : $client->chatParticipant(
				user_id : 8345048137956283470,
				inviter_id : -9100631310111995074,
				date : 30,
			),
			new_participant : $client->chatParticipant(
				user_id : -7743903509124417309,
				inviter_id : 2239842026419791049,
				date : 83,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'GWnzOwZThpft82R5',
				admin_id : 4067723646399148443,
				date : 39,
				start_date : 48,
				expire_date : 5,
				usage_limit : 21,
				usage : 20,
				requested : 71,
				subscription_expired : 75,
				title : '7sQ48AYCi2MrfOWw',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 83,
					amount : -4191753151029638465,
				),
			),
			qts : 63,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 7829251070969623972,
			date : 94,
			actor_id : 4656216520105572362,
			user_id : -1222564398704375422,
			prev_participant : $client->channelParticipant(
				user_id : -6063402091316940760,
				date : 87,
				subscription_until_date : 57,
			),
			new_participant : $client->channelParticipant(
				user_id : -5249997267772274252,
				date : 5,
				subscription_until_date : 97,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'yKAUgH1h3r6dumlw',
				admin_id : 8733541948322972552,
				date : 96,
				start_date : 70,
				expire_date : 67,
				usage_limit : 49,
				usage : 67,
				requested : 79,
				subscription_expired : 10,
				title : 'NEkK9jLdYGF8ceWQ',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 97,
					amount : 1621848547235111927,
				),
			),
			qts : 31,
		),
		$client->updateBotStopped(
			user_id : -8825044723527738996,
			date : 72,
			stopped : true,
			qts : 77,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'ZGcyHRMJ1X0p8ABU',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -6944175931990682403,
			),
			bot_id : -2843457305551317275,
			commands : array(
				$client->botCommand(
					command : 'xFmJacD4nwf8kNqt',
					description : 'gp2U7TDrLMI4PBs5',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -5459080666365897510,
			),
			requests_pending : 22,
			recent_requesters : array(8900563903597581050),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 5114060992097007675,
			),
			date : 78,
			user_id : 7120918656552093057,
			about : '4lPkzSrgyQ6t7uLj',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'RlJ17Q4H0Njupy5O',
				admin_id : 7851225384287887660,
				date : 53,
				start_date : 38,
				expire_date : 50,
				usage_limit : 8,
				usage : 15,
				requested : 91,
				subscription_expired : 96,
				title : 'o1eWwYsc7zMyOEG4',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 17,
					amount : -7605127123823569456,
				),
			),
			qts : 34,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 6047719630864217586,
			),
			msg_id : 94,
			top_msg_id : 4,
			saved_peer_id : $client->peerUser(
				user_id : 8242506958059552114,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 48,
						reaction : $client->reactionEmpty(...),
						count : 31,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 91,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 23,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 5445206090103949528,
		),
		$client->updateBotMenuButton(
			bot_id : 3535957144984622945,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -8255850600648140614,
			),
			msg_id : 8,
			transcription_id : -5136659115539598734,
			text : 'fZVcy3YHbANv4Wlo',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -596963902881851463,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -4259554791909443026,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -3561375600309966042,
			),
			msg_id : 94,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 45,
					h : 12,
					thumb : $client->photoSizeEmpty(
						type : 'CnBZvK7Gk25bwY6F',
					),
					video_duration : 77,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : 1202321493694738280,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -8746981355351898134,
			),
			story : $client->storyItemDeleted(
				id : 14,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -6441591295275737944,
			),
			max_id : 23,
		),
		$client->updateStoryID(
			id : 4,
			random_id : -234742557420543027,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 16,
				cooldown_until_date : 22,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 6126207111618618159,
			),
			story_id : 6,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 534090847536611420,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'vxG8rjSFTJa2wA4E',
				user_id : 4187369915695930209,
				giveaway_msg_id : 7,
				date : 44,
				expires : 14,
				used_gift_slug : 'mSJ35G9x6TpgesXE',
				multiplier : 42,
				stars : -8795845784113089632,
			),
			qts : 45,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 3699605293302305810,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -3243615681163628817,
			),
			wallpaper : $client->wallPaper(
				id : 831417184863772224,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -8669694949868868783,
				slug : 'SZfN2oagcRPeC4UY',
				document : $client->documentEmpty(
					id : -1237438842324114543,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 39,
					second_background_color : 76,
					third_background_color : 39,
					fourth_background_color : 99,
					intensity : 87,
					rotation : 98,
					emoticon : 'KYmfj6wAvi3ezduJ',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 7509182910711081580,
			),
			msg_id : 15,
			date : 44,
			actor : $client->peerUser(
				user_id : -4410604345268863506,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '4YX3WRUmx9Nbfa5F',
				),
				$client->reactionCustomEmoji(
					document_id : 8409476876420391467,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '0HsojDIp9QtGPUaK',
				),
				$client->reactionCustomEmoji(
					document_id : -7976991002687818426,
				),
				$client->reactionPaid(),
			),
			qts : 35,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 8686550638337980605,
			),
			msg_id : 76,
			date : 21,
			reactions : array(
				$client->reactionCount(
					chosen_order : 69,
					reaction : $client->reactionEmpty(),
					count : 16,
				),
			),
			qts : 37,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -4537758630705242728,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -5885645055020061829,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 5,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'Svzr6jUs8JxgWhtd',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 8,
					shortcut : 'hl59XmrxfHF1B2TZ',
					top_message : 36,
					count : 92,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 97,
				shortcut : 'pRdWngj5IBTScKve',
				top_message : 8,
				count : 67,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 14,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 84,
				peer_id : $client->peerUser(
					user_id : 6413472802419872383,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 84,
			messages : array(99),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'igc8HIwvfMJWrX4j',
				user_id : 3468864975872836307,
				dc_id : 90,
				date : 32,
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
			qts : 41,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'cOylo5QxR1kEuNC0',
			message : $client->messageEmpty(
				id : 61,
				peer_id : $client->peerUser(
					user_id : -1710062671861374718,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 0,
				peer_id : $client->peerUser(
					user_id : -5805972021436986427,
				),
			),
			qts : 61,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'vZEk9U6PWrMwFoiq',
			message : $client->messageEmpty(
				id : 34,
				peer_id : $client->peerUser(
					user_id : 1798658094760773818,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 55,
				peer_id : $client->peerUser(
					user_id : 4764754463374896849,
				),
			),
			qts : 57,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'uk2c4OhnT3G8KYtU',
			peer : $client->peerUser(
				user_id : 7145951231226574300,
			),
			messages : array(52),
			qts : 17,
		),
		$client->updateNewStoryReaction(
			story_id : 87,
			peer : $client->peerUser(
				user_id : 6575047703497918602,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 4394000745195699562,
				nanos : 56,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -2507651713966055019,
			user_id : 6782439354367321231,
			connection_id : 'fsXchP1QxmedKLDF',
			message : $client->messageEmpty(
				id : 67,
				peer_id : $client->peerUser(
					user_id : 4502726745033201014,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 61,
				peer_id : $client->peerUser(
					user_id : 3087546491926495470,
				),
			),
			chat_instance : -4442144135568097819,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -4649359162070502620,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : 641738461602670818,
					nanos : 41,
				),
				available_balance : $client->starsAmount(
					amount : 4730179099370010472,
					nanos : 80,
				),
				overall_revenue : $client->starsAmount(
					amount : -8562683690110134744,
					nanos : 88,
				),
				next_withdrawal_at : 64,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 736156348498618436,
			payload : 'EmwMD9yxkLgXq5HQ',
			qts : 19,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 27,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 57,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 2825317655728835645,
				access_hash : -7309370023211458312,
			),
			sub_chain_id : 72,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 56,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 1470358865761271441,
			saved_peer_id : $client->peerUser(
				user_id : -2352292067097767065,
			),
			read_max_id : 84,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -1817207480243250928,
			saved_peer_id : $client->peerUser(
				user_id : 7342510240599360708,
			),
			read_max_id : 86,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -5398011635155773327,
			saved_peer_id : $client->peerUser(
				user_id : 3024705286607039006,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : -1177718370181712751,
				access_hash : 7959488965502718412,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 37,
				from_id : $client->peerUser(
					user_id : 941005481712721496,
				),
				date : 92,
				message : $client->textWithEntities(
					text : 'IY7VqHXSb1Kx8Whi',
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
				paid_message_stars : 2702757309471220071,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : -5388409816916408521,
				access_hash : 5395840856811915239,
			),
			from_id : $client->peerUser(
				user_id : -9147797617097200272,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : -8584651316210790476,
			),
			topic_id : 88,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : -6983668294285400627,
			),
			order : array(13),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : 8478524387250778788,
				access_hash : 497187549839191102,
			),
			messages : array(46),
		),
		$client->updateStarGiftAuctionState(
			gift_id : 8160688143082258490,
			state : $client->starGiftAuctionStateNotModified(),
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : -2777970492776514909,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : 3991895565883650629,
				bid_date : 68,
				min_bid_amount : 3983815950123351490,
				bid_peer : $client->peerUser(
					user_id : -3955537076018263210,
				),
				acquired_count : 3,
			),
		),
		$client->updateEmojiGameInfo(
			info : $client->messages->emojiGameUnavailable(),
		),
		$client->updateStarGiftCraftFail(),
	),
	chats : array(
		$client->chatEmpty(
			id : 5902229614699651581,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6124687911967427488,
			title : 'cKM7NxOvFSm8hsB4',
			photo : $client->chatPhotoEmpty(),
			participants_count : 63,
			date : 3,
			version : 14,
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
				until_date : 13,
			),
		),
		$client->chatForbidden(
			id : -2884256534761432615,
			title : '2mETPg1qGixSXI6R',
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
			id : 956335341633846865,
			access_hash : -8131206344858440411,
			title : 'y6fjcZLsFSWVbn2X',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 70,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'IRXsyJiEmrj5Lo6q',
					reason : '0MU4Stb6GPpCqinl',
					text : 'rJTbluRLi4DafAZE',
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
				until_date : 61,
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
				until_date : 65,
			),
			participants_count : 85,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 94,
			),
			color : $client->peerColor(
				color : 83,
				background_emoji_id : -2936100082028364629,
			),
			profile_color : $client->peerColor(
				color : 68,
				background_emoji_id : -2646871869008727336,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 98,
			subscription_until_date : 25,
			bot_verification_icon : -8703948680307839362,
			send_paid_messages_stars : 1956116171549396857,
			linked_monoforum_id : -7129484084530004564,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 5987544128194993220,
			access_hash : 56485104670137677,
			title : 'OwW0PkICihm2GKUY',
			until_date : 78,
		),
	),
	users : array(
		$client->userEmpty(
			id : -5375703982056654790,
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
			id : -4825355153450011750,
			access_hash : -1213285569025430432,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 81,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'CYz87UEKHIGAhcsR',
					reason : '3xDHYhwXu26JQ0mP',
					text : 'kNedJ7P85snaqXxu',
				),
			),
			bot_inline_placeholder : 'Efq8HIPhmdNS4noZ',
			lang_code : 'sG1ul2AWOmwd8BZo',
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
				max_id : 7,
			),
			color : $client->peerColor(
				color : 94,
				background_emoji_id : -9139183059333050441,
			),
			profile_color : $client->peerColor(
				color : 20,
				background_emoji_id : -3218713962525836206,
			),
			bot_active_users : 33,
			bot_verification_icon : -7517714024983036865,
			send_paid_messages_stars : -1733337660488346593,
		),
	),
);
```