# messages.channelMessages

**Description** : *Channel messages*

**Layer** : 222

```tl
messages.channelMessages#c776ba4e flags:# inexact:flags.1?true pts:int count:int offset_id_offset:flags.2?int messages:Vector<Message> topics:Vector<ForumTopic> chats:Vector<Chat> users:Vector<User> = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	pts : 91,
	count : 11,
	offset_id_offset : 0,
	messages : array(
		$client->messageEmpty(
			id : 24,
			peer_id : $client->peerUser(
				user_id : 4638986834756623438,
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
				user_id : 1411718327404615603,
			),
			from_boosts_applied : 4,
			peer_id : $client->peerUser(
				user_id : 7871684944420178568,
			),
			saved_peer_id : $client->peerUser(
				user_id : 2681777201361037918,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 1493087371029409289,
				),
				from_name : 'x0qwshFGJzTVjfD1',
				date : 28,
				channel_post : 91,
				post_author : 'YOLEpt8nSoQfCVTM',
				saved_from_peer : $client->peerUser(
					user_id : 4758627798861048607,
				),
				saved_from_msg_id : 65,
				saved_from_id : $client->peerUser(
					user_id : -7456486849736760687,
				),
				saved_from_name : 'DyUvZr7VKEewQRgf',
				saved_date : 7,
				psa_type : 'vu6raKTsgblnHL3I',
			),
			via_bot_id : -2112186978198605616,
			via_business_bot_id : 5483750157548476287,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 49,
				reply_to_peer_id : $client->peerUser(
					user_id : -3797617954693328653,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'EfoTsQvukj21YKPW',
					date : 43,
					channel_post : 34,
					post_author : 'LFDlfIb2ATEY3hU4',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 55,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'ovzyEpGSX07f1bxj',
					saved_date : 78,
					psa_type : 'XuTjzNHmn4Gd6AZI',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 37,
				quote_text : 'CPJRy4zdTuvg6bQA',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 69,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 13,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 31,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 42,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 24,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 93,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 12,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 21,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 86,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 40,
						language : 'Xme2H5sTaVxRUYAJ',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 12,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 87,
						user_id : 140906716505215292,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 7,
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
						length : 11,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 26,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 7,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 76,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 46,
						document_id : 1922260342809932432,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 15,
					),
				),
				quote_offset : 69,
				todo_item_id : 24,
			),
			date : 89,
			message : 'OpEvht8HjqILRFxb',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 64,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 65,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 44,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 35,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 79,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 25,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 76,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 85,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 98,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 100,
					language : 'nVqUP3C24JHNSMhp',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 61,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 74,
					user_id : -1950126729721080496,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 22,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 78,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 52,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 86,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 55,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 13,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 34,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 58,
					document_id : -1263984439866199604,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 26,
				),
			),
			views : 98,
			forwards : 97,
			replies : $client->messageReplies(
				comments : true,
				replies : 96,
				replies_pts : 36,
				recent_repliers : array(
					$client->peerUser(
						user_id : 934377073034083617,
					),
					$client->peerChat(
						chat_id : 7224309982499717243,
					),
					$client->peerChannel(
						channel_id : -9019819579980856102,
					),
				),
				channel_id : 3114074208539183694,
				max_id : 17,
				read_max_id : 83,
			),
			edit_date : 30,
			post_author : 'sjHc0meYqgkaMu1B',
			grouped_id : 3686175807395943391,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 36,
						reaction : $client->reactionEmpty(...),
						count : 82,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 61,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 64,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : '3NcR0r6oZysjtdz5',
					reason : 'w9fp5EZN2Pb6HBOd',
					text : 'A5imnPaID4z8E2xJ',
				),
			),
			ttl_period : 23,
			quick_reply_shortcut_id : 84,
			effect : 6620781778035238025,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'qNQYdZ6eIOWxAwop',
				text : $client->textWithEntities(
					text : 'jBHbiJqeXTLN6nU2',
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
			report_delivery_until_date : 87,
			paid_message_stars : 2682848743932810206,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 6188607295776307051,
					nanos : 15,
				),
				schedule_date : 84,
			),
			schedule_repeat_period : 19,
			summary_from_language : 'amwVyYZifurWC9j0',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 100,
			from_id : $client->peerUser(
				user_id : -519880593798584733,
			),
			peer_id : $client->peerUser(
				user_id : -3971638665568683842,
			),
			saved_peer_id : $client->peerUser(
				user_id : -2135484240858347110,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 83,
				reply_to_peer_id : $client->peerUser(
					user_id : 3615955881275569521,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'MvyjqdTNklV5HOUc',
					date : 69,
					channel_post : 51,
					post_author : 'jlSL8EXnK92u3GVR',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 17,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'eigU95coD8I2srVq',
					saved_date : 34,
					psa_type : 'QCfv69iZHELMNwO1',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 77,
				quote_text : 'QaUI8bhZWofAOuvX',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 4,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 65,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 76,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 86,
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
						length : 46,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 27,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 63,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 25,
						language : 'ZeTSFl7cEMz8jXKH',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 94,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 28,
						user_id : 3747460441854606207,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 2,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 83,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 98,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 79,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 30,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 30,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 11,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 68,
						document_id : -5006423684534951968,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 99,
					),
				),
				quote_offset : 44,
				todo_item_id : 2,
			),
			date : 92,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 6,
						reaction : $client->reactionEmpty(...),
						count : 15,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 68,
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
			ttl_period : 27,
		),
	),
	topics : array(
		$client->forumTopicDeleted(
			id : 86,
		),
		$client->forumTopic(
			my : true,
			closed : true,
			pinned : true,
			short : true,
			hidden : true,
			title_missing : true,
			id : 77,
			date : 80,
			peer : $client->peerUser(
				user_id : 7817458502266585341,
			),
			title : 'NRpB2VdkgMTxibAW',
			icon_color : 52,
			icon_emoji_id : 4394443096577408483,
			top_message : 46,
			read_inbox_max_id : 100,
			read_outbox_max_id : 12,
			unread_count : 29,
			unread_mentions_count : 27,
			unread_reactions_count : 18,
			from_id : $client->peerUser(
				user_id : -4540808403040567234,
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : false,
				mute_until : 94,
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
				date : 79,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 8761856046213804514,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -2344938241102053033,
			title : 'NQIvf5i0YECShxpw',
			photo : $client->chatPhotoEmpty(),
			participants_count : 71,
			date : 84,
			version : 33,
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
				until_date : 84,
			),
		),
		$client->chatForbidden(
			id : 3050790185294699600,
			title : 'y64Qou5gP9vbtlF1',
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
			id : -3001086013418702114,
			access_hash : 7094072015786188253,
			title : 'i0naoGtuVcyE8e9D',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 77,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ek6I3TBr8Kg4qDs5',
					reason : 'ax24vkKZbCd13XIq',
					text : 'USBdtbMH2nqmIujA',
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
				until_date : 76,
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
				until_date : 84,
			),
			participants_count : 30,
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
				color : 67,
				background_emoji_id : 7161756850626846444,
			),
			profile_color : $client->peerColor(
				color : 9,
				background_emoji_id : 5600214696083611004,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 88,
			subscription_until_date : 2,
			bot_verification_icon : -849467226230169807,
			send_paid_messages_stars : 3902970232787991810,
			linked_monoforum_id : -1552274363621436129,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -4199152504091046206,
			access_hash : 4167861180430648068,
			title : 'GxKLHEIwF4YPV73b',
			until_date : 60,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1192813306401069902,
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
			id : -7131543854545425476,
			access_hash : -2034232048305283646,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 40,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'wycnWNtRM8LOmeVZ',
					reason : '4O2neMTX0lsq1ZBw',
					text : 'FSLg9nY8AEpkeKl2',
				),
			),
			bot_inline_placeholder : 'TPyvw0aApmWlG9Ck',
			lang_code : '1Kh6YMbUyoxZumSs',
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
				max_id : 34,
			),
			color : $client->peerColor(
				color : 2,
				background_emoji_id : 7199881221168531768,
			),
			profile_color : $client->peerColor(
				color : 67,
				background_emoji_id : -6813338056385831224,
			),
			bot_active_users : 44,
			bot_verification_icon : -3434208250555232940,
			send_paid_messages_stars : 2175844608810131113,
		),
	),
);
```