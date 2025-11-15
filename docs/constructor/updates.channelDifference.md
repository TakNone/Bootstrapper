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
	pts : 35,
	timeout : 46,
	new_messages : array(
		$client->messageEmpty(
			id : 51,
			peer_id : $client->peerUser(
				user_id : 285997082647768713,
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
			id : 71,
			from_id : $client->peerUser(
				user_id : 3639199493909876007,
			),
			from_boosts_applied : 55,
			peer_id : $client->peerUser(
				user_id : -8505811364056876726,
			),
			saved_peer_id : $client->peerUser(
				user_id : -775388878086028531,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -6840170171363077205,
				),
				from_name : '1qxnd25Jz9kHO8Rs',
				date : 64,
				channel_post : 25,
				post_author : 'E5g2dcu6ITYwtDO3',
				saved_from_peer : $client->peerUser(
					user_id : 2037467844071415552,
				),
				saved_from_msg_id : 29,
				saved_from_id : $client->peerUser(
					user_id : -2050449442313593235,
				),
				saved_from_name : '8oLADr5m46QPeN0I',
				saved_date : 52,
				psa_type : 'gGSDtykFXTKRJcpn',
			),
			via_bot_id : -6360305121442712590,
			via_business_bot_id : 1236232238982879259,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 81,
				reply_to_peer_id : $client->peerUser(
					user_id : 8292097897482606904,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '3ECGA204VsdKlJgy',
					date : 76,
					channel_post : 3,
					post_author : 'WC4PoelXzHDxp3Uc',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 6,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'DSq6s2OmzjoyUF1T',
					saved_date : 31,
					psa_type : 'P6VktfdB0YmG4SwJ',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 98,
				quote_text : 'uXAGhMsZi3BcwTpz',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 67,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 35,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 78,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 40,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 99,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 79,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 85,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 83,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 34,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 87,
						language : 'Bx1WLhUaT5Fw9kAG',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 53,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 43,
						user_id : 6728642017915806202,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 69,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 84,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 22,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 68,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 62,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 9,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 17,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 28,
						document_id : -5115879856868518733,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 19,
					),
				),
				quote_offset : 93,
				todo_item_id : 54,
			),
			date : 17,
			message : 'mYOaXq4TFetvzgfj',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 54,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 94,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 63,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 61,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 58,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 10,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 49,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 1,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 20,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 81,
					language : 'bAqYh6FnR8Pk2ojM',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 99,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 19,
					user_id : -3125818201010754286,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 32,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 58,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 77,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 35,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 1,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 31,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 79,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 19,
					document_id : -4406953884534502507,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 54,
				),
			),
			views : 32,
			forwards : 24,
			replies : $client->messageReplies(
				comments : true,
				replies : 21,
				replies_pts : 95,
				recent_repliers : array(
					$client->peerUser(
						user_id : 3433591446170587077,
					),
					$client->peerChat(
						chat_id : 940098400404708298,
					),
					$client->peerChannel(
						channel_id : -4391684728176098275,
					),
				),
				channel_id : -1391764695422247290,
				max_id : 3,
				read_max_id : 16,
			),
			edit_date : 93,
			post_author : '6JY3daNsgDjlxAzQ',
			grouped_id : 116162580373561917,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 84,
						reaction : $client->reactionEmpty(...),
						count : 36,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 19,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 38,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : '9XuaqnQRLsBA0D3z',
					reason : 'pB8CWqVnj2yHmX7N',
					text : 'ybXBhdn3cUgEV2fD',
				),
			),
			ttl_period : 32,
			quick_reply_shortcut_id : 60,
			effect : -475172659465582127,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'Rm27I6wpFcOTdN4H',
				text : $client->textWithEntities(
					text : 'XBeZhc7TmFtqGswA',
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
			report_delivery_until_date : 37,
			paid_message_stars : 4493225316625800966,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -2923054820823589469,
					nanos : 56,
				),
				schedule_date : 54,
			),
			schedule_repeat_period : 78,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 17,
			from_id : $client->peerUser(
				user_id : -2651595758583131958,
			),
			peer_id : $client->peerUser(
				user_id : 3476822814648801528,
			),
			saved_peer_id : $client->peerUser(
				user_id : 282965926310644795,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 3,
				reply_to_peer_id : $client->peerUser(
					user_id : -5803835771272451927,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'hg8eSBjZkGPA9L2y',
					date : 57,
					channel_post : 4,
					post_author : 'Lb1UKHzpIQVatqJe',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 37,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'jkVn8v0IrYbzs493',
					saved_date : 87,
					psa_type : 'hkH76uEwzQxCB1Go',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 76,
				quote_text : 'evQ8STkOwo593E0p',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 90,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 0,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 9,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 95,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 59,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 69,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 27,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 27,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 56,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 44,
						language : 'KbpiJ32AI5dc4v9a',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 6,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 74,
						user_id : -3856257023435154610,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 34,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 18,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 70,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 45,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 1,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 89,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 54,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 41,
						document_id : -7541529584363158794,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 54,
					),
				),
				quote_offset : 98,
				todo_item_id : 31,
			),
			date : 9,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 27,
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
						count : 46,
					),
				),
			),
			ttl_period : 9,
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 70,
				peer_id : $client->peerUser(
					user_id : -4207165763036173065,
				),
			),
			pts : 14,
			pts_count : 87,
		),
		$client->updateMessageID(
			id : 76,
			random_id : 178168650267711947,
		),
		$client->updateDeleteMessages(
			messages : array(5),
			pts : 99,
			pts_count : 78,
		),
		$client->updateUserTyping(
			user_id : 7590812017658663897,
			top_msg_id : 21,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -2635621375164128430,
			from_id : $client->peerUser(
				user_id : 79474291099191511,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -8452894864906245579,
				self_participant : $client->chatParticipant(
					user_id : -894612119918563687,
					inviter_id : 6404919713731225128,
					date : 10,
				),
			),
		),
		$client->updateUserStatus(
			user_id : 8652399555193232129,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -1561395558954046811,
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
			date : 53,
			device : 'eKV0Ej5GfzrmHTlo',
			location : 'WnCO9Mu4cswIiQlv',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 8388080653331604299,
				chat_id : 92,
				date : 73,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 45,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 29,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 21,
			),
			date : 18,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 72,
			max_date : 89,
			date : 75,
		),
		$client->updateChatParticipantAdd(
			chat_id : -6398945412277338994,
			user_id : 1765950515333987504,
			inviter_id : -191412762708221906,
			date : 50,
			version : 93,
		),
		$client->updateChatParticipantDelete(
			chat_id : -7637861867690342838,
			user_id : -5313906025966555394,
			version : 12,
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
					port : 24,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : -4522120624655677603,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : false,
				mute_until : 91,
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
			inbox_date : 55,
			type : '8ZLhxvoaq0N12T4d',
			message : 'QbMhjJv5dwKHfBok',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 86,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 93,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 93,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 62,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 71,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 20,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 17,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 62,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 2,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 95,
					language : '38EmzTMr6WY7FLDt',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 56,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 92,
					user_id : 2630938834852610686,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 31,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 55,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 66,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 93,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 22,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 28,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 13,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 51,
					document_id : 81935348394081620,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 85,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(3998542650414583503),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(5450169997189106601),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(6215182614633491086),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(1051885007961912164),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -899667861332195165,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 28,
			peer : $client->peerUser(
				user_id : -7431038658665367837,
			),
			top_msg_id : 33,
			max_id : 61,
			still_unread_count : 63,
			pts : 43,
			pts_count : 44,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -115427892855269697,
			),
			max_id : 90,
			pts : 34,
			pts_count : 85,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 6677650601854600417,
				url : 'https://docs.liveproto.dev',
			),
			pts : 97,
			pts_count : 85,
		),
		$client->updateReadMessagesContents(
			messages : array(6),
			pts : 81,
			pts_count : 25,
			date : 67,
		),
		$client->updateChannelTooLong(
			channel_id : -6597910609393086913,
			pts : 55,
		),
		$client->updateChannel(
			channel_id : -5063755131429613307,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 100,
				peer_id : $client->peerUser(
					user_id : -7914310502873039284,
				),
			),
			pts : 39,
			pts_count : 18,
		),
		$client->updateReadChannelInbox(
			folder_id : 46,
			channel_id : -7838340708819967104,
			max_id : 55,
			still_unread_count : 50,
			pts : 81,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 5628341046098847216,
			messages : array(14),
			pts : 35,
			pts_count : 84,
		),
		$client->updateChannelMessageViews(
			channel_id : -4801016331700159839,
			id : 46,
			views : 98,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 6745417760499313283,
			user_id : 4488974787312003511,
			is_admin : false,
			version : 45,
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
					installed_date : 45,
					id : -3922786419648899628,
					access_hash : -4088316258322268078,
					title : 'U5XDCAtJu2lw9KTb',
					short_name : 'QGu1NlVxPsRIjYOZ',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 95,
					thumb_version : 93,
					thumb_document_id : -4977330512135074875,
					count : 57,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'sa6GWjbLIu1xpEm7',
						documents : array(6412888642784078372),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : -654700122148481367,
						keyword : array('Ga1j4BZHIV2Q3kNl'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : 8729047301988160646,
					),
					$client->document(
						id : -1897922480072922195,
						access_hash : 9045050600371635113,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 27,
						mime_type : 's96eY1b78r3vuEQw',
						size : 7466544320068364611,
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
						dc_id : 17,
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
			order : array(-2528180601152655763),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -6071830951890258056,
			user_id : 28913871438640251,
			query : '1TswZHbd2uaCUiOK',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : '8J70OPoHxEvqwemG',
		),
		$client->updateBotInlineSend(
			user_id : 7022518697971415214,
			query : 'sVkCmSN3452tFcQE',
			geo : $client->geoPointEmpty(),
			id : 'QHCzM3XPYqySDlRo',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 42,
				id : 4094208471961977041,
				access_hash : -5532286949710485474,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 55,
				peer_id : $client->peerUser(
					user_id : -3651236673230263688,
				),
			),
			pts : 20,
			pts_count : 84,
		),
		$client->updateBotCallbackQuery(
			query_id : -4065893450938879027,
			user_id : 7136885197459917960,
			peer : $client->peerUser(
				user_id : 325283160777887608,
			),
			msg_id : 55,
			chat_instance : -1244348815366861547,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'DH6mOoIuqbf1p7Ll',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 15,
				peer_id : $client->peerUser(
					user_id : 8604729498969941171,
				),
			),
			pts : 30,
			pts_count : 96,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 1387796264667394766,
			user_id : -1860514619233257170,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 49,
				id : -3047448730838119076,
				access_hash : -12379970431124093,
			),
			chat_instance : -7931602842618565719,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'lZRcFOwDuPCeLJrm',
		),
		$client->updateReadChannelOutbox(
			channel_id : -1106029372540069166,
			max_id : 95,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : -7740716919236140332,
			),
			top_msg_id : 48,
			saved_peer_id : $client->peerUser(
				user_id : -604949656241172893,
			),
			draft : $client->draftMessageEmpty(
				date : 81,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -6936756780227721468,
			webpage : $client->webPageEmpty(
				id : -5842609514818954235,
				url : 'https://docs.liveproto.dev',
			),
			pts : 49,
			pts_count : 66,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 13,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 4165584140484836110,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 80,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -5083380664630378789,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 43,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'ElfC4UuthXjxn7Zy',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -1452788596632825628,
			data : $client->dataJSON(
				data : 'cm07jbogJnlUaviO',
			),
			timeout : 35,
		),
		$client->updateBotShippingQuery(
			query_id : 5215345357842799926,
			user_id : 945518720642470272,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'af2PXSM9xG3VH7yR',
				street_line2 : 'cEfBgXVRzq1LT4ja',
				city : 'IJAPrkNjqXV4Z8lv',
				state : 'XDIB2rpVjcNubvQL',
				country_iso2 : 'sr7HlU0EIJ3y8cXz',
				post_code : 'uVXAJQ3smLWK8YdH',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 7583250246750616735,
			user_id : 1185221532333034822,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'YqMreVKOBgPfUhCT',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'QFn5wfv8qb3y9Vmx',
					street_line2 : 'sd17Op6JlMhUzvI0',
					city : 'Cp0Nhb4KoFZaT7PY',
					state : 'HkilRmuhCd0DMN5G',
					country_iso2 : 'GWYF1kOH4mV3wuQf',
					post_code : '2Krv43QcxwNTindY',
				),
			),
			shipping_option_id : 'G4ZjvNpx2DtfSd5R',
			currency : 'cz3XFfnjUK0BWokY',
			total_amount : 8361822215328728822,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 4744498858529699612,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : '7RkT5UIXVONCEQfw',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'FMnXYa7OVHRj0qfA',
				from_version : 8,
				version : 11,
				strings : array(
					$client->langPackString(
						key : 'h9e6EVnNIGkMbuqQ',
						value : 'SmExsLIubYJKPnBc',
					),
					$client->langPackStringPluralized(
						key : 'Y5W7JPBlrSesHmoU',
						zero_value : 'vMNkdlmXxKq4ze8O',
						one_value : '7uhv1yQCeir3sbOz',
						two_value : 'UbQuqw294jZmiRDd',
						few_value : 'w19QnLWSIEZKOJhM',
						many_value : 'YVt8cn92M71mCN5T',
						other_value : 'cBDIpVMZyHRwNoGJ',
					),
					$client->langPackStringDeleted(
						key : 'RXkYrSeGVPzgtdJf',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 8701645547434970313,
			top_msg_id : 76,
			saved_peer_id : $client->peerUser(
				user_id : 6070256315955706809,
			),
			messages : array(40),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -8481116120559490643,
			available_min_id : 80,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -5488173346763390529,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : 2067909663026326488,
			),
		),
		$client->updateMessagePoll(
			poll_id : 4888466726193100058,
			poll : $client->poll(
				id : 4299192834866083832,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : 'KXRB25Hx1Y4vsl8j',
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
				close_period : 56,
				close_date : 2,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 6,
					),
				),
				total_voters : 21,
				recent_voters : array(
					$client->peerUser(
						user_id : 1226654819694200128,
					),
					$client->peerChat(
						chat_id : 6809990180023537898,
					),
					$client->peerChannel(
						channel_id : 4801113840339004080,
					),
				),
				solution : 'PlgxoSTwCKIEkAY2',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 11,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 29,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 38,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 77,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 11,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 33,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 88,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 28,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 46,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 63,
						language : 'tSVqrI0Nm65yxjXF',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 52,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 64,
						user_id : 8048384950678811578,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 39,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 9,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 96,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 21,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 100,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 51,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 70,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 56,
						document_id : -6480137100698820359,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 62,
					),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : -4837322208008391276,
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
			version : 55,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : -8292703678979111370,
					),
					folder_id : 40,
				),
			),
			pts : 45,
			pts_count : 88,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -3279712311325590629,
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
				geo_distance : 48,
				request_chat_title : 'kHMj6DrJTNIqVyfY',
				request_chat_date : 53,
				business_bot_id : -7140730217043414817,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -2631911085930320950,
				registration_month : 'a0zAdiQ4EyZrwhWN',
				phone_country : '+1234567890',
				name_change_date : 55,
				photo_change_date : 72,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : -3122880104808323713,
					),
					expires : 1,
					distance : 3,
				),
				$client->peerSelfLocated(
					expires : 92,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 48,
				peer_id : $client->peerUser(
					user_id : -3415893301317084521,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 355414506176288980,
			),
			messages : array(42),
			sent_messages : array(40),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -1694066626065956455,
				access_hash : 3319856413437324161,
				slug : 'uQ58YAXt2ydFi1bG',
				title : 'vfehqt6xrSFoQlnY',
				document : $client->documentEmpty(
					id : 3680549624305953264,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 52,
						outbox_accent_color : 48,
						message_colors : array(87),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'Inkr45udXFQxP9Cw',
				installs_count : 72,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -7752023923064659653,
			),
			msg_id : 59,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 7606086908714584066,
			peer : $client->peerUser(
				user_id : 5387347007644478161,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 46,
		),
		$client->updateDialogFilter(
			id : 22,
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
				id : 29,
				title : $client->textWithEntities(
					text : 'Pu0SeIzLCR27T4Zd',
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
				emoticon : 'GgD9eMJvAIqOtHuF',
				color : 45,
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
			phone_call_id : -5619143562556470654,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -5537605421617912212,
			id : 79,
			forwards : 29,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -4151940071558768217,
			top_msg_id : 73,
			read_max_id : 12,
			broadcast_id : -435062174389914641,
			broadcast_post : 20,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -6888882549765498145,
			top_msg_id : 10,
			read_max_id : 28,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -5787827153939691129,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -7530373809809951296,
			top_msg_id : 76,
			from_id : $client->peerUser(
				user_id : -3218960487140842724,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 1827377616548139989,
			),
			messages : array(39),
			pts : 33,
			pts_count : 18,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -6152675554038279638,
			messages : array(4),
			pts : 21,
			pts_count : 64,
		),
		$client->updateChat(
			chat_id : -2412600878039296749,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -53113491867974946,
				access_hash : 8416627350038726637,
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
						user_id : 6952030700344397474,
					),
					date : 96,
					active_date : 63,
					source : 26,
					volume : 79,
					about : 'RpjEvFMNUKSb6OCY',
					raise_hand_rating : -6174167005175143312,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'b37f9ZHtlxqcKQ2B',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 64,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'RW60bKAsBQLjZFiY',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 40,
					),
					paid_stars_total : 3599292415597447572,
				),
			),
			version : 91,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : 1068416983583915052,
			),
			call : $client->groupCallDiscarded(
				id : 2412246752748531662,
				access_hash : 5825633191535565316,
				duration : 6,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 7823394491344582657,
			),
			ttl_period : 38,
		),
		$client->updateChatParticipant(
			chat_id : 5364852587706735498,
			date : 33,
			actor_id : 4445039539149961586,
			user_id : 5148552464332248322,
			prev_participant : $client->chatParticipant(
				user_id : -9204481205606744672,
				inviter_id : -149949836860693473,
				date : 53,
			),
			new_participant : $client->chatParticipant(
				user_id : -7901854374487264368,
				inviter_id : 4975657708426960114,
				date : 97,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'hi1UkGT6DCSdFXfg',
				admin_id : 7991102651323270642,
				date : 40,
				start_date : 33,
				expire_date : 8,
				usage_limit : 53,
				usage : 85,
				requested : 67,
				subscription_expired : 94,
				title : 'RPvosbOHwQFu9qCp',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 54,
					amount : -2749464173116759424,
				),
			),
			qts : 88,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -4513542318938216345,
			date : 85,
			actor_id : 293727169508326811,
			user_id : -7464667884263505343,
			prev_participant : $client->channelParticipant(
				user_id : 4377207348446833291,
				date : 24,
				subscription_until_date : 86,
			),
			new_participant : $client->channelParticipant(
				user_id : 6855495210025420270,
				date : 69,
				subscription_until_date : 35,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : '9kP76wMEdVjTvq45',
				admin_id : -6110192231936679532,
				date : 90,
				start_date : 32,
				expire_date : 99,
				usage_limit : 68,
				usage : 33,
				requested : 59,
				subscription_expired : 79,
				title : 'Hklgun7tzC3SUQRv',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 100,
					amount : -1351632280935513694,
				),
			),
			qts : 41,
		),
		$client->updateBotStopped(
			user_id : 2122946084066941205,
			date : 48,
			stopped : false,
			qts : 32,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'm2fPiOHEvNUXWrt8',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 5685246368478513418,
			),
			bot_id : 3867195509096017733,
			commands : array(
				$client->botCommand(
					command : 'Yn4ewTArFtx0HyB8',
					description : 'ubRB4kEhTJ2OyCo8',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 291576400606514006,
			),
			requests_pending : 75,
			recent_requesters : array(-6824631186908113063),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -4462415304816946452,
			),
			date : 59,
			user_id : -606907068532121081,
			about : 'UKtDejEdbT53hmuX',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'Iq97ibtFruBMOmx8',
				admin_id : -4948694688792179765,
				date : 15,
				start_date : 15,
				expire_date : 12,
				usage_limit : 26,
				usage : 58,
				requested : 61,
				subscription_expired : 44,
				title : '4HmOxdJftpwTbsyg',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 34,
					amount : -6527590994534895285,
				),
			),
			qts : 61,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -4632718328911439538,
			),
			msg_id : 9,
			top_msg_id : 37,
			saved_peer_id : $client->peerUser(
				user_id : 8127889565578662939,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 91,
						reaction : $client->reactionEmpty(...),
						count : 72,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 0,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 7,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 7570451685996161196,
		),
		$client->updateBotMenuButton(
			bot_id : -6969840633051857395,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -7306554628111978939,
			),
			msg_id : 49,
			transcription_id : 1795735560056896866,
			text : 'scg237APnbB0LGH8',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 6494927518927387171,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -1822798351870676258,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 1089772132737619591,
			),
			msg_id : 75,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 100,
					h : 28,
					thumb : $client->photoSizeEmpty(
						type : 'uDcZobW7h4EixyYR',
					),
					video_duration : 87,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : -433278991095563880,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -6734013178449777755,
			),
			story : $client->storyItemDeleted(
				id : 4,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -4357399358044325821,
			),
			max_id : 55,
		),
		$client->updateStoryID(
			id : 29,
			random_id : 6144318015143185928,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 33,
				cooldown_until_date : 41,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 7910074805421942224,
			),
			story_id : 20,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -2429976357265016179,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'VNyE8h3smnUt2AG0',
				user_id : -8368341223181441532,
				giveaway_msg_id : 49,
				date : 4,
				expires : 70,
				used_gift_slug : 'c1KgNdJeSCFzThst',
				multiplier : 39,
				stars : 9142981076277637783,
			),
			qts : 45,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 6789694295705544018,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 2064004642007995855,
			),
			wallpaper : $client->wallPaper(
				id : 7276372207574178499,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 2380660137480399743,
				slug : 'DWP0C8T2aA65juNF',
				document : $client->documentEmpty(
					id : -5133819192489062636,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 25,
					second_background_color : 75,
					third_background_color : 62,
					fourth_background_color : 49,
					intensity : 32,
					rotation : 7,
					emoticon : 'WpnOoU5yKB4a3u2P',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 1520837661546752191,
			),
			msg_id : 65,
			date : 14,
			actor : $client->peerUser(
				user_id : -888020895754991945,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'zB0Ymr7UatKoq5pV',
				),
				$client->reactionCustomEmoji(
					document_id : -8516169520957006376,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '6tCnFOeJhm5cvTzr',
				),
				$client->reactionCustomEmoji(
					document_id : 1069662248349524971,
				),
				$client->reactionPaid(),
			),
			qts : 44,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 618703566451703,
			),
			msg_id : 59,
			date : 14,
			reactions : array(
				$client->reactionCount(
					chosen_order : 70,
					reaction : $client->reactionEmpty(),
					count : 99,
				),
			),
			qts : 20,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -4210612587775777061,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -2984701876066949407,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 18,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'vknoVBxr7L1Qlqpu',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 50,
					shortcut : 'F1galmSTi49C8RvD',
					top_message : 16,
					count : 32,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 46,
				shortcut : 'X9cJZE1U8MxHiKoF',
				top_message : 69,
				count : 39,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 40,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 32,
				peer_id : $client->peerUser(
					user_id : -4715836844544507009,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 96,
			messages : array(58),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'yzUbZCO7G53kofP0',
				user_id : 6549973572626280782,
				dc_id : 28,
				date : 42,
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
			qts : 99,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'tf2lUCeSEgH4ahZI',
			message : $client->messageEmpty(
				id : 96,
				peer_id : $client->peerUser(
					user_id : 1058758912282488114,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 39,
				peer_id : $client->peerUser(
					user_id : 2984332011935118516,
				),
			),
			qts : 38,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'KW0Hl1wnZ89cVuED',
			message : $client->messageEmpty(
				id : 37,
				peer_id : $client->peerUser(
					user_id : -7692304623192553119,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 43,
				peer_id : $client->peerUser(
					user_id : -7408739878020215615,
				),
			),
			qts : 59,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'TweDQ7ZINrPRxf1v',
			peer : $client->peerUser(
				user_id : -1952635277403878823,
			),
			messages : array(37),
			qts : 41,
		),
		$client->updateNewStoryReaction(
			story_id : 35,
			peer : $client->peerUser(
				user_id : 8668216214966398332,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 7348371249548725448,
				nanos : 40,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 4654609333679104232,
			user_id : 3312939577074602576,
			connection_id : 'gc65I04FySkm9sGa',
			message : $client->messageEmpty(
				id : 14,
				peer_id : $client->peerUser(
					user_id : 6059160898842634501,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 76,
				peer_id : $client->peerUser(
					user_id : 1784932126974499367,
				),
			),
			chat_instance : -6087051228864352874,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -9216468791627197872,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : -3658484715875811894,
					nanos : 88,
				),
				available_balance : $client->starsAmount(
					amount : -3308677341573034516,
					nanos : 46,
				),
				overall_revenue : $client->starsAmount(
					amount : -3840594034481114009,
					nanos : 46,
				),
				next_withdrawal_at : 16,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -7407755059762189808,
			payload : 'l8dqVzAGyhYrIEJW',
			qts : 19,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 86,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 17,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -5785240719096140669,
				access_hash : 7163350558322548434,
			),
			sub_chain_id : 49,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 94,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -1905251554378656003,
			saved_peer_id : $client->peerUser(
				user_id : 641492885275984282,
			),
			read_max_id : 45,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 8036433341493928813,
			saved_peer_id : $client->peerUser(
				user_id : 1137379872819377852,
			),
			read_max_id : 37,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 8309768035309841329,
			saved_peer_id : $client->peerUser(
				user_id : -2000155781324521678,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : 7733662441053374224,
				access_hash : 3483027941281882247,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 93,
				from_id : $client->peerUser(
					user_id : 1061689191127700615,
				),
				date : 56,
				message : $client->textWithEntities(
					text : 'ibKgXvJTj76uoUY2',
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
				paid_message_stars : -7397399931576795259,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : -8527989820977801931,
				access_hash : -8735112281800673791,
			),
			from_id : $client->peerUser(
				user_id : 5803633683287639744,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : -1304568987263540294,
			),
			topic_id : 14,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : -4037532597034934914,
			),
			order : array(96),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : -1226515815257582675,
				access_hash : 7369654689267551976,
			),
			messages : array(25),
		),
		$client->updateStarGiftAuctionState(
			gift_id : 370555726438430791,
			state : $client->starGiftAuctionState(
				version : 81,
				start_date : 25,
				end_date : 66,
				min_bid_amount : -2118010731666158895,
				bid_levels : array(
					$client->auctionBidLevel(
						pos : 60,
						amount : 3048649282181055452,
						date : 31,
					),
				),
				top_bidders : array(7672188450068111389),
				next_round_at : 22,
				gifts_left : 5,
				current_round : 53,
				total_rounds : 17,
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : 254932125103496683,
			text : 'Fn196KBepd58A2J7',
		),
		$client->updateBotSubscriptionExpire(
			user_id : -7239523616962641392,
			payload : '9ZwfHPni7WEL3yes',
			until_date : 42,
			qts : 85,
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : 3242042655702939972,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : 733038257685546922,
				bid_date : 9,
				min_bid_amount : -7554308159679789706,
				peer : $client->peerUser(
					user_id : 1189676859947848045,
				),
				acquired_count : 96,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 3872685518840807213,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -7886218204585460551,
			title : 'jHNG8vELzIaWTg6f',
			photo : $client->chatPhotoEmpty(),
			participants_count : 72,
			date : 14,
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
				until_date : 7,
			),
		),
		$client->chatForbidden(
			id : -2246132107516506396,
			title : 'EKecyDjqz0ba7IGA',
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
			id : -4742938135680165524,
			access_hash : -1400972599811504428,
			title : 'QJla7ZmwWv2PLYBF',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 34,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '7yTLUI8vpNPzWrof',
					reason : 'jBuZpnwKWvh8IRld',
					text : 'hAilNByOFnKWeQ1p',
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
				until_date : 1,
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
				until_date : 59,
			),
			participants_count : 79,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 77,
			),
			color : $client->peerColor(
				color : 30,
				background_emoji_id : 1994434818342919528,
			),
			profile_color : $client->peerColor(
				color : 31,
				background_emoji_id : 158229972116938924,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 36,
			subscription_until_date : 9,
			bot_verification_icon : 2118215949151058268,
			send_paid_messages_stars : -4368283649167587319,
			linked_monoforum_id : -8741320927542742933,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -2062340527142466447,
			access_hash : 6516220366227926585,
			title : 'eMQg1cqyYzdlCtsP',
			until_date : 96,
		),
	),
	users : array(
		$client->userEmpty(
			id : -5237439586773470168,
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
			id : -1754195816221584253,
			access_hash : 4004845435815912543,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 32,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2v6cwCfbRZMrWHa7',
					reason : 'VGXK7edF198qfv4B',
					text : 'gHJKruxF0NR3yaYE',
				),
			),
			bot_inline_placeholder : '3mKSje8AU97BTk0M',
			lang_code : '96k5TQoAHF3wmKnv',
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
				max_id : 66,
			),
			color : $client->peerColor(
				color : 56,
				background_emoji_id : -436354083188268056,
			),
			profile_color : $client->peerColor(
				color : 36,
				background_emoji_id : 4484684059431145385,
			),
			bot_active_users : 51,
			bot_verification_icon : -2237490540507383639,
			send_paid_messages_stars : 251003049453488274,
		),
	),
);
```