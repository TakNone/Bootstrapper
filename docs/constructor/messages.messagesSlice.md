# messages.messagesSlice

**Description** : *Incomplete list of messages and auxiliary data*

**Layer** : 218

```tl
messages.messagesSlice#5f206716 flags:# inexact:flags.1?true count:int next_rate:flags.0?int offset_id_offset:flags.2?int search_flood:flags.3?SearchPostsFlood messages:Vector<Message> topics:Vector<ForumTopic> chats:Vector<Chat> users:Vector<User> = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **inexact** | [`flags.1?true`](type/true) | If set, indicates that the results may be inexact |
| <mark>count</mark> | [`int`](type/int) | Total number of messages in the list |
| **next_rate** | [`flags.0?int`](type/int) | Rate to use in the offset_rate parameter in the next call to messages.searchGlobal |
| **offset_id_offset** | [`flags.2?int`](type/int) | Indicates the absolute position of messages[0] within the total result set with count count. This is useful, for example, if the result was fetched using offset_id, and we need to display a progress/total counter (like photo 134 of 200, for all media in a chat, we could simply use photo ${offset_id_offset} of ${count}) |
| **search_flood** | [`flags.3?SearchPostsFlood`](type/SearchPostsFlood) | For global post searches », the remaining amount of free searches, here query_is_free is related to the current call only, not to the next paginated call, and all subsequent pagination calls will always be free |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | List of messages |
| <mark>topics</mark> | [`Vector<ForumTopic>`](type/ForumTopic) | NOTHING |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in messages |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in messages and chats |

---

## Type

[messages.Messages](type/messages.Messages)

---

## Example

```php
$messagesMessages = $client->messages->messagesSlice(
	inexact : true,
	count : 12,
	next_rate : 9,
	offset_id_offset : 0,
	search_flood : $client->searchPostsFlood(
		query_is_free : true,
		total_daily : 52,
		remains : 62,
		wait_till : 71,
		stars_amount : 918709194450526812,
	),
	messages : array(
		$client->messageEmpty(
			id : 19,
			peer_id : $client->peerUser(
				user_id : 2723410585487690795,
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
			id : 63,
			from_id : $client->peerUser(
				user_id : 4281215942397263315,
			),
			from_boosts_applied : 26,
			peer_id : $client->peerUser(
				user_id : -7737088508018769564,
			),
			saved_peer_id : $client->peerUser(
				user_id : -9116190085955276817,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 9005221131098376368,
				),
				from_name : 'Zpaikyl402R3rzqT',
				date : 100,
				channel_post : 39,
				post_author : 'OkeEswC63847VXxi',
				saved_from_peer : $client->peerUser(
					user_id : -3596727241140818714,
				),
				saved_from_msg_id : 32,
				saved_from_id : $client->peerUser(
					user_id : -8836722168172315512,
				),
				saved_from_name : 'YWi12EVKvjThJz8f',
				saved_date : 21,
				psa_type : 'SrRnK0IcbNmdGFUv',
			),
			via_bot_id : 4548637143974136318,
			via_business_bot_id : -7543368608035973140,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 100,
				reply_to_peer_id : $client->peerUser(
					user_id : -3785144704851992343,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'aJqLgoys4bZuB2DO',
					date : 20,
					channel_post : 55,
					post_author : 'bOCPZusBdQtgJERV',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 15,
					saved_from_id : $client->peerUser(...),
					saved_from_name : '7l1CeqEGajRdpWfu',
					saved_date : 77,
					psa_type : '4tqVLoSkFejnc52f',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 61,
				quote_text : 'ZcHmQxCahUTzId8e',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 55,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 25,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 90,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 73,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 68,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 75,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 10,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 42,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 30,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 25,
						language : 'DbIBC56LdXFYq3SZ',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 28,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 55,
						user_id : -2668475841220694387,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 26,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 36,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 53,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 4,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 8,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 92,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 62,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 11,
						document_id : -5501239577454402057,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 42,
					),
				),
				quote_offset : 98,
				todo_item_id : 32,
			),
			date : 87,
			message : 'yZ3frksn5LbmOh0X',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 51,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 59,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 28,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 51,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 96,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 48,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 70,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 82,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 11,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 57,
					language : 'f3TrmwGljKS05c6C',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 35,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 59,
					user_id : -8316329432491026117,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 71,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 49,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 73,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 86,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 16,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 10,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 75,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 73,
					document_id : -1571035392401877116,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 74,
				),
			),
			views : 40,
			forwards : 45,
			replies : $client->messageReplies(
				comments : true,
				replies : 78,
				replies_pts : 3,
				recent_repliers : array(
					$client->peerUser(
						user_id : -6171517775094031758,
					),
					$client->peerChat(
						chat_id : 8024385902898775338,
					),
					$client->peerChannel(
						channel_id : 6965087475404193999,
					),
				),
				channel_id : 5601064175587878575,
				max_id : 54,
				read_max_id : 83,
			),
			edit_date : 44,
			post_author : '7qylVngp08dtoYJZ',
			grouped_id : -3919024246929229272,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 44,
						reaction : $client->reactionEmpty(...),
						count : 52,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 41,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 93,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6MNLCO3cs1SPt5IA',
					reason : 'gXSQe1rCA0LM4JFj',
					text : 'Eq0fZYgPldMK84iF',
				),
			),
			ttl_period : 82,
			quick_reply_shortcut_id : 56,
			effect : -5066926856156368402,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'OlBNcYQfiMudXvG0',
				text : $client->textWithEntities(
					text : 'pGuQVA8viYqbhSym',
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
			paid_message_stars : -1447290889952668310,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 6485991552998110271,
					nanos : 85,
				),
				schedule_date : 27,
			),
			schedule_repeat_period : 96,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 3,
			from_id : $client->peerUser(
				user_id : -2701107758379023933,
			),
			peer_id : $client->peerUser(
				user_id : -8907203096206338122,
			),
			saved_peer_id : $client->peerUser(
				user_id : 3456128248786420120,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 76,
				reply_to_peer_id : $client->peerUser(
					user_id : 5643145668024519964,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'X4TtcMgS3RmCl0Qd',
					date : 35,
					channel_post : 38,
					post_author : 'tF5qlwCxS9W3jGeI',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 98,
					saved_from_id : $client->peerUser(...),
					saved_from_name : '6ymrGjeF1ChH09Li',
					saved_date : 33,
					psa_type : '7EuKG4dt8oWVHZbJ',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 84,
				quote_text : '4Xo2ImF1ObKxdaiV',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 5,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 82,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 54,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 43,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 57,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 10,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 85,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 19,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 80,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 97,
						language : 'malYX6po9kZ4CHOq',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 11,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 97,
						user_id : -519149362863205159,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 2,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 55,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 51,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 63,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 99,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 15,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 76,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 35,
						document_id : 6737802221055425787,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 22,
					),
				),
				quote_offset : 74,
				todo_item_id : 22,
			),
			date : 92,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 78,
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
						date : 18,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 50,
					),
				),
			),
			ttl_period : 59,
		),
	),
	topics : array(
		$client->forumTopicDeleted(
			id : 58,
		),
		$client->forumTopic(
			my : true,
			closed : true,
			pinned : true,
			short : true,
			hidden : true,
			title_missing : true,
			id : 28,
			date : 51,
			peer : $client->peerUser(
				user_id : 7326999668553302429,
			),
			title : 'CxOg240pLFuAW5jV',
			icon_color : 0,
			icon_emoji_id : 4577896450299300006,
			top_message : 46,
			read_inbox_max_id : 92,
			read_outbox_max_id : 19,
			unread_count : 55,
			unread_mentions_count : 7,
			unread_reactions_count : 57,
			from_id : $client->peerUser(
				user_id : 5440831158645202825,
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : false,
				mute_until : 39,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : false,
				stories_hide_sender : true,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
			draft : $client->draftMessageEmpty(
				date : 69,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 847148629568858256,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -5513605460768131290,
			title : 'QMFXBxOWd5nSvlph',
			photo : $client->chatPhotoEmpty(),
			participants_count : 6,
			date : 89,
			version : 3,
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
				until_date : 76,
			),
		),
		$client->chatForbidden(
			id : -7086055846361053222,
			title : 'NEaVTze5cSHXro2u',
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
			id : 1590591902160300335,
			access_hash : 1910787130255241526,
			title : 'pzxh8muHjDPTaOSY',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 93,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'YM9iBtksgfO2xPZy',
					reason : 'J8HdYGSRqgfMljOZ',
					text : 'SCHfelBLyE1izxVZ',
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
				until_date : 32,
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
				until_date : 58,
			),
			participants_count : 27,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 76,
			),
			color : $client->peerColor(
				color : 16,
				background_emoji_id : 5849333006070062086,
			),
			profile_color : $client->peerColor(
				color : 91,
				background_emoji_id : -1399067516835705928,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 30,
			subscription_until_date : 100,
			bot_verification_icon : -6655613592478766778,
			send_paid_messages_stars : 4723629854758196262,
			linked_monoforum_id : -6641251491984943170,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -9145953838769225984,
			access_hash : -4819759579079101852,
			title : 'Ly3tPjG9iS8NZzH5',
			until_date : 42,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6048624601386342938,
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
			id : 1330564443873267638,
			access_hash : -8622349242733907308,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 13,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tf8TgdpWAEyrMlei',
					reason : 'FQ7qvUy4H5Vi0a1c',
					text : 'JkCRKVTiOhI4qozZ',
				),
			),
			bot_inline_placeholder : 'UW3guk0e1RvIdhD5',
			lang_code : 'JSk98GNFXlcL5eYK',
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
				color : 67,
				background_emoji_id : 6291018134984960775,
			),
			profile_color : $client->peerColor(
				color : 5,
				background_emoji_id : 2802407990802195429,
			),
			bot_active_users : 4,
			bot_verification_icon : 8429244118646381546,
			send_paid_messages_stars : 7007937200242893550,
		),
	),
);
```