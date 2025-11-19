# messages.channelMessages

**Description** : *Channel messages*

**Layer** : 218

```tl
messages.channelMessages#c776ba4e flags:# inexact:flags.1?true pts:int count:int offset_id_offset:flags.2?int messages:Vector<Message> topics:Vector<ForumTopic> chats:Vector<Chat> users:Vector<User> = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **inexact** | [`flags.1?true`](type/true) | If set, returned results may be inexact |
| <mark>pts</mark> | [`int`](type/int) | Event count after generation |
| <mark>count</mark> | [`int`](type/int) | Total number of results were found server-side (may not be all included here) |
| **offset_id_offset** | [`flags.2?int`](type/int) | Indicates the absolute position of messages[0] within the total result set with count count. This is useful, for example, if the result was fetched using offset_id, and we need to display a progress/total counter (like photo 134 of 200, for all media in a chat, we could simply use photo ${offset_id_offset} of ${count} |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | Found messages |
| <mark>topics</mark> | [`Vector<ForumTopic>`](type/ForumTopic) | Forum topic information |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[messages.Messages](type/messages.Messages)

---

## Example

```php
$messagesMessages = $client->messages->channelMessages(
	inexact : true,
	pts : 55,
	count : 85,
	offset_id_offset : 0,
	messages : array(
		$client->messageEmpty(
			id : 36,
			peer_id : $client->peerUser(
				user_id : -5307460608603188941,
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
			id : 24,
			from_id : $client->peerUser(
				user_id : -2717650598202328872,
			),
			from_boosts_applied : 5,
			peer_id : $client->peerUser(
				user_id : -6486806999592979887,
			),
			saved_peer_id : $client->peerUser(
				user_id : -1976639800547059588,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 8462182126649322390,
				),
				from_name : '6nFktwNXLKb1Veam',
				date : 37,
				channel_post : 92,
				post_author : 'SlELTPCh9VNXJMj7',
				saved_from_peer : $client->peerUser(
					user_id : 3971954882529663453,
				),
				saved_from_msg_id : 21,
				saved_from_id : $client->peerUser(
					user_id : 5924602382878347604,
				),
				saved_from_name : 'WAPJC4ntaQMyFHIR',
				saved_date : 99,
				psa_type : 'XNbHYxnmu2DclFWV',
			),
			via_bot_id : 2018888722510542494,
			via_business_bot_id : 6674112398897944267,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 38,
				reply_to_peer_id : $client->peerUser(
					user_id : -6942347326144167651,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '9FmsETlY4Lr3uyfn',
					date : 88,
					channel_post : 60,
					post_author : 'wNu1JlpjYrxmHXFo',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 98,
					saved_from_id : $client->peerUser(...),
					saved_from_name : '0VT1nBgHRatkpISj',
					saved_date : 84,
					psa_type : 'ZdtkG1njfKT6pb7a',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 42,
				quote_text : 'D6RjhFbdxtCkUq8H',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 56,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 68,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 100,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 36,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 53,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 61,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 2,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 56,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 92,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 50,
						language : '6vR8WTrwMkonJGBV',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 39,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 75,
						user_id : 2383096868837240679,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 23,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 81,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 22,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 32,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 79,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 81,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 39,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 46,
						document_id : 3749990673242846475,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 59,
					),
				),
				quote_offset : 65,
				todo_item_id : 82,
			),
			date : 46,
			message : 'M2rXHK9euOnhJWfV',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 14,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 36,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 20,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 73,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 25,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 67,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 95,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 30,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 24,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 6,
					language : 'x7VFzGMWK6TeC4Nk',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 91,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 18,
					user_id : 7563280938133360257,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 8,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 95,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 75,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 35,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 61,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 65,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 21,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 9,
					document_id : 5969572099468490269,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 21,
				),
			),
			views : 97,
			forwards : 71,
			replies : $client->messageReplies(
				comments : true,
				replies : 28,
				replies_pts : 86,
				recent_repliers : array(
					$client->peerUser(
						user_id : 5916309884512065022,
					),
					$client->peerChat(
						chat_id : 2119910214395485417,
					),
					$client->peerChannel(
						channel_id : -5488382481646318075,
					),
				),
				channel_id : 1337601000887471957,
				max_id : 84,
				read_max_id : 92,
			),
			edit_date : 60,
			post_author : '5IJ7BwHUyqAsFzvV',
			grouped_id : -7890240738674362578,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 86,
						reaction : $client->reactionEmpty(...),
						count : 41,
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
						count : 0,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ZUTl4zhMQrKboitL',
					reason : 'LRP8ngt1owJ6vyeI',
					text : 'p5VuWc9mC8Se103Y',
				),
			),
			ttl_period : 92,
			quick_reply_shortcut_id : 30,
			effect : -2055447633946358167,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'WSRs1MQZ4jbOYCua',
				text : $client->textWithEntities(
					text : 'UN2T4kLAejY5WbHV',
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
			report_delivery_until_date : 93,
			paid_message_stars : 6702703453856599297,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -8714031767539477256,
					nanos : 63,
				),
				schedule_date : 98,
			),
			schedule_repeat_period : 98,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 63,
			from_id : $client->peerUser(
				user_id : 8760834020709569557,
			),
			peer_id : $client->peerUser(
				user_id : -4807432767369188176,
			),
			saved_peer_id : $client->peerUser(
				user_id : 9037550996364802018,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 51,
				reply_to_peer_id : $client->peerUser(
					user_id : 2719436643159944777,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'GCvE8woznVNrghTZ',
					date : 81,
					channel_post : 93,
					post_author : 'VY2bBLXFiH9lGP74',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 30,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'vhAz2CfEZQSexVnc',
					saved_date : 84,
					psa_type : 'UeKhdpaAZIwfXn8C',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 43,
				quote_text : 'CR2zYByt9WorsM8L',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 7,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 51,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 37,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 41,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 43,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 74,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 56,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 80,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 37,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 91,
						language : 'UpVyjmKk7uBcQwbv',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 16,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 18,
						user_id : 723160474022856506,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 51,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 82,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 51,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 87,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 75,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 100,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 92,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 42,
						document_id : 3042486692860044510,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 49,
					),
				),
				quote_offset : 42,
				todo_item_id : 78,
			),
			date : 25,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 6,
						reaction : $client->reactionEmpty(...),
						count : 33,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 35,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 92,
					),
				),
			),
			ttl_period : 47,
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
			id : 1,
			date : 43,
			peer : $client->peerUser(
				user_id : -7557199912144265454,
			),
			title : 'jMkW4gbUo8ZHKiaw',
			icon_color : 32,
			icon_emoji_id : 5455611386165227687,
			top_message : 93,
			read_inbox_max_id : 71,
			read_outbox_max_id : 95,
			unread_count : 14,
			unread_mentions_count : 11,
			unread_reactions_count : 58,
			from_id : $client->peerUser(
				user_id : 7622935393143117020,
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : false,
				mute_until : 5,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : false,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
			draft : $client->draftMessageEmpty(
				date : 56,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 8812122997152108071,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 8651046522626556098,
			title : 'v8D2NZRkwToOdahJ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 96,
			date : 95,
			version : 68,
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
				until_date : 16,
			),
		),
		$client->chatForbidden(
			id : 2683454774045172256,
			title : 'bxO5eQjKULVz6cJv',
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
			id : -2000468255003141254,
			access_hash : 303050366836206073,
			title : 'IDXyiMluLN5kQvwR',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 88,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'QnNyfqwDtogTx9pI',
					reason : 'oA3TWBR7ezaSPK4l',
					text : 'X7Maqi4510lAU6uP',
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
				until_date : 78,
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
				until_date : 95,
			),
			participants_count : 33,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 95,
			),
			color : $client->peerColor(
				color : 21,
				background_emoji_id : -254691343897793858,
			),
			profile_color : $client->peerColor(
				color : 38,
				background_emoji_id : -8619477069077845764,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 13,
			subscription_until_date : 18,
			bot_verification_icon : 1229502789071776844,
			send_paid_messages_stars : 6222817073468110024,
			linked_monoforum_id : -2879905548360741646,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -3460062109243456956,
			access_hash : 3402894007015047249,
			title : 'VghLcMEuUe7O5HGk',
			until_date : 49,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6903752528373288896,
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
			id : -8480545388242968851,
			access_hash : 7136635344161570939,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 41,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'QpozKJUE1WDd3Lt6',
					reason : '2pYr8IBJTKShL7g4',
					text : 'A6gVr4wNFuBZRobU',
				),
			),
			bot_inline_placeholder : '30n5KUljNxiVuzOF',
			lang_code : 'datZ2AbBqTSGrFfc',
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
				max_id : 51,
			),
			color : $client->peerColor(
				color : 5,
				background_emoji_id : 6914909139301098265,
			),
			profile_color : $client->peerColor(
				color : 25,
				background_emoji_id : 2526006044149955817,
			),
			bot_active_users : 97,
			bot_verification_icon : 5246337756890334697,
			send_paid_messages_stars : -8586808486581776657,
		),
	),
);
```