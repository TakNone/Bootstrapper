# messages.messagesSlice

**Description** : *Incomplete list of messages and auxiliary data*

**Layer** : 222

```tl
messages.messagesSlice#5f206716 flags:# inexact:flags.1?true count:int next_rate:flags.0?int offset_id_offset:flags.2?int search_flood:flags.3?SearchPostsFlood messages:Vector<Message> topics:Vector<ForumTopic> chats:Vector<Chat> users:Vector<User> = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 28,
	next_rate : 64,
	offset_id_offset : 0,
	search_flood : $client->searchPostsFlood(
		query_is_free : true,
		total_daily : 38,
		remains : 84,
		wait_till : 32,
		stars_amount : 7361282531999997423,
	),
	messages : array(
		$client->messageEmpty(
			id : 100,
			peer_id : $client->peerUser(
				user_id : -7792672960036528212,
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
			id : 42,
			from_id : $client->peerUser(
				user_id : -8002648027211891618,
			),
			from_boosts_applied : 1,
			peer_id : $client->peerUser(
				user_id : 192732104579823195,
			),
			saved_peer_id : $client->peerUser(
				user_id : -2517030019152074281,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -3054527269757975850,
				),
				from_name : 'X9LlN3gS1keBq06E',
				date : 1,
				channel_post : 8,
				post_author : 'drkMHq0yV8fCXTL4',
				saved_from_peer : $client->peerUser(
					user_id : -7587021065953409582,
				),
				saved_from_msg_id : 99,
				saved_from_id : $client->peerUser(
					user_id : -8160254564234416593,
				),
				saved_from_name : 'I4UauZgFWkz78q5y',
				saved_date : 25,
				psa_type : 'U2Igw35THW0NJub9',
			),
			via_bot_id : -7933039658301583929,
			via_business_bot_id : -8186104676381338662,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 65,
				reply_to_peer_id : $client->peerUser(
					user_id : 265049843711200051,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'xbfDl8vktYXEmFpQ',
					date : 52,
					channel_post : 75,
					post_author : 'DE9Ba6UFgJ8sczRy',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 94,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'A80jOq79GWYTreEN',
					saved_date : 39,
					psa_type : 'ZfR1pQO5YHhwog9N',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 22,
				quote_text : 'adv4UijGyIOh1YRB',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 27,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 94,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 88,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 35,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 81,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 67,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 21,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 29,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 41,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 100,
						language : 'DzpYlSjnh1WryJZ2',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 47,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 29,
						user_id : 8657186326737387216,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 11,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 5,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 58,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 35,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 57,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 64,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 28,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 44,
						document_id : -6840409720851324177,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 74,
					),
				),
				quote_offset : 75,
				todo_item_id : 15,
			),
			date : 98,
			message : 'JXCvbhfz76wtP9MF',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 40,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 10,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 3,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 24,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 59,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 75,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 38,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 16,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 84,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 67,
					language : 'MT1gEDrlCYoz78XN',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 49,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 4,
					user_id : -5877321857992006937,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 38,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 40,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 18,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 91,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 11,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 54,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 1,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 97,
					document_id : 3322628292457100889,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 89,
				),
			),
			views : 57,
			forwards : 87,
			replies : $client->messageReplies(
				comments : true,
				replies : 46,
				replies_pts : 70,
				recent_repliers : array(
					$client->peerUser(
						user_id : -4083775644043158757,
					),
					$client->peerChat(
						chat_id : 3556495345497985826,
					),
					$client->peerChannel(
						channel_id : -600596117251306715,
					),
				),
				channel_id : 507079297529488613,
				max_id : 22,
				read_max_id : 91,
			),
			edit_date : 1,
			post_author : '2hdJZP0nTB5ofvkO',
			grouped_id : -8314043960409126549,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 52,
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
						date : 51,
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
					platform : 'LJ5taVXzEcOjlwuR',
					reason : 'Lksj89oQZqFvNhIG',
					text : 'WvBU4TfjNi3l1LuJ',
				),
			),
			ttl_period : 30,
			quick_reply_shortcut_id : 94,
			effect : 1733775395527715122,
			factcheck : $client->factCheck(
				need_check : true,
				country : '8xcHVC7zGfd0eb6k',
				text : $client->textWithEntities(
					text : 'be5yMEd2a8TK3GQo',
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
			report_delivery_until_date : 10,
			paid_message_stars : -3974784854057277597,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -180278471825232817,
					nanos : 35,
				),
				schedule_date : 20,
			),
			schedule_repeat_period : 97,
			summary_from_language : 'xX75k1qozbgLVDKa',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 70,
			from_id : $client->peerUser(
				user_id : 6446308886459140344,
			),
			peer_id : $client->peerUser(
				user_id : -4402452129405761744,
			),
			saved_peer_id : $client->peerUser(
				user_id : 6923971056555421465,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 41,
				reply_to_peer_id : $client->peerUser(
					user_id : -4448010481331441585,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'WjwlGM7I4Tqo06F1',
					date : 25,
					channel_post : 35,
					post_author : '5w4dshfOeGUc3PA0',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 80,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'jlT9C0Lh3xg8JfEQ',
					saved_date : 85,
					psa_type : 's6dWIZ5umYjqaErO',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 45,
				quote_text : 'M2mN0hSu7ZXUeKF6',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 85,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 53,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 84,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 50,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 30,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 14,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 94,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 97,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 42,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 66,
						language : 'YjcdaNEAb8XMZ9yO',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 31,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 50,
						user_id : -7465021073874528317,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 93,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 49,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 47,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 93,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 57,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 60,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 90,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 14,
						document_id : 2376647797378989633,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 56,
					),
				),
				quote_offset : 5,
				todo_item_id : 3,
			),
			date : 97,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 78,
						reaction : $client->reactionEmpty(...),
						count : 74,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 7,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 21,
					),
				),
			),
			ttl_period : 18,
		),
	),
	topics : array(
		$client->forumTopicDeleted(
			id : 12,
		),
		$client->forumTopic(
			my : true,
			closed : true,
			pinned : true,
			short : true,
			hidden : true,
			title_missing : true,
			id : 32,
			date : 81,
			peer : $client->peerUser(
				user_id : -2132156522876697898,
			),
			title : 'ZGiVsRMkUNgAQBbj',
			icon_color : 50,
			icon_emoji_id : -1196954270433945404,
			top_message : 97,
			read_inbox_max_id : 13,
			read_outbox_max_id : 11,
			unread_count : 22,
			unread_mentions_count : 90,
			unread_reactions_count : 85,
			from_id : $client->peerUser(
				user_id : 2638887380785144374,
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : true,
				mute_until : 6,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : true,
				stories_hide_sender : true,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
			draft : $client->draftMessageEmpty(
				date : 17,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 6262108404132795944,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4291164126418977756,
			title : '3ZxAytmqMwcCdOP5',
			photo : $client->chatPhotoEmpty(),
			participants_count : 27,
			date : 94,
			version : 77,
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
				until_date : 82,
			),
		),
		$client->chatForbidden(
			id : -2506608616717323993,
			title : 'VixzjMFfRIypBlZ0',
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
			id : 3871770099145161491,
			access_hash : -4804150467982349691,
			title : 'mQeYBtDvzJkpPfxA',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 23,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'J7P3FSQLNIUKeZ06',
					reason : 'EWstd3NhkXjJCzbK',
					text : 'ANtQVHwqykKLhGT9',
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
				until_date : 16,
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
				until_date : 72,
			),
			participants_count : 75,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 58,
			),
			color : $client->peerColor(
				color : 43,
				background_emoji_id : -4245491124890168902,
			),
			profile_color : $client->peerColor(
				color : 62,
				background_emoji_id : -4185921233069676622,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 90,
			subscription_until_date : 36,
			bot_verification_icon : 3933288582999302600,
			send_paid_messages_stars : 8216012502062085070,
			linked_monoforum_id : 8521165808307074218,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -53686627995758830,
			access_hash : 1600753108851565251,
			title : 'ON07jlzxPwmVgSXr',
			until_date : 35,
		),
	),
	users : array(
		$client->userEmpty(
			id : -9116510846823172403,
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
			id : -1100666120374358826,
			access_hash : 3587808244208449721,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 35,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '4eU5hIM9AtZLKb7r',
					reason : '5vX2Veju3RB9T0sW',
					text : 'JhwDxguZyRaQzVbj',
				),
			),
			bot_inline_placeholder : 'vO8ZUbCSz0K6T9aA',
			lang_code : 'fP3lvHjudczaC6qB',
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
				max_id : 4,
			),
			color : $client->peerColor(
				color : 97,
				background_emoji_id : -1233933506786496370,
			),
			profile_color : $client->peerColor(
				color : 34,
				background_emoji_id : 2648847377770211323,
			),
			bot_active_users : 33,
			bot_verification_icon : -7141941429705970931,
			send_paid_messages_stars : 1327343183823696896,
		),
	),
);
```