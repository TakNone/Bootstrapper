# messages.forumTopics

**Description** : *Contains information about multiple forum topics*

**Layer** : 222

```tl
messages.forumTopics#367617d3 flags:# order_by_create_date:flags.0?true count:int topics:Vector<ForumTopic> messages:Vector<Message> chats:Vector<Chat> users:Vector<User> pts:int = messages.ForumTopics;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **order_by_create_date** | [`flags.0?true`](type/true) | Whether the returned topics are ordered by creation date; if set, pagination by offset_date should use forumTopic.date; otherwise topics are ordered by the last message date, so paginate by the date of the message referenced by forumTopic.top_message |
| <mark>count</mark> | [`int`](type/int) | Total number of topics matching query; may be more than the topics contained in topics, in which case pagination is required |
| <mark>topics</mark> | [`Vector<ForumTopic>`](type/ForumTopic) | Forum topics |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | Related messages (contains the messages mentioned by forumTopic.top_message) |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Related chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Related users |
| <mark>pts</mark> | [`int`](type/int) | Event count after generation |

---

## Type

[messages.ForumTopics](type/messages.ForumTopics)

---

## Example

```php
$messagesForumTopics = $client->messages->forumTopics(
	order_by_create_date : true,
	count : 11,
	topics : array(
		$client->forumTopicDeleted(
			id : 79,
		),
		$client->forumTopic(
			my : true,
			closed : true,
			pinned : true,
			short : true,
			hidden : true,
			title_missing : true,
			id : 34,
			date : 9,
			peer : $client->peerUser(
				user_id : 2583384783888249042,
			),
			title : 'LyQO15JgB8mj4beC',
			icon_color : 89,
			icon_emoji_id : -7461053979996540060,
			top_message : 5,
			read_inbox_max_id : 5,
			read_outbox_max_id : 71,
			unread_count : 97,
			unread_mentions_count : 6,
			unread_reactions_count : 57,
			from_id : $client->peerUser(
				user_id : -5673675200525290244,
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : false,
				mute_until : 68,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : true,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
			draft : $client->draftMessageEmpty(
				date : 10,
			),
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 54,
			peer_id : $client->peerUser(
				user_id : 6555685301341272226,
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
			id : 17,
			from_id : $client->peerUser(
				user_id : -6172656110732034178,
			),
			from_boosts_applied : 12,
			peer_id : $client->peerUser(
				user_id : 1543317945227344671,
			),
			saved_peer_id : $client->peerUser(
				user_id : -3910086850341984919,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -5468769726686870565,
				),
				from_name : 'a23gzAcymjf57tn0',
				date : 77,
				channel_post : 93,
				post_author : 'FaYBitjhHTsP3QkO',
				saved_from_peer : $client->peerUser(
					user_id : 1342697155143377806,
				),
				saved_from_msg_id : 92,
				saved_from_id : $client->peerUser(
					user_id : -5172407767569277924,
				),
				saved_from_name : 'VdUopDr3wbKela0C',
				saved_date : 21,
				psa_type : 'n0fW2g7ZGPANd4UM',
			),
			via_bot_id : -6051935431560372704,
			via_business_bot_id : 8599463970556917038,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 50,
				reply_to_peer_id : $client->peerUser(
					user_id : 6467400558548189538,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'B30OYZw8EPhJyH1u',
					date : 48,
					channel_post : 1,
					post_author : '3TDpEjyC9kMVWbms',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 45,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'sFQfcSA0oL8OeT6q',
					saved_date : 49,
					psa_type : 'UDNZCFavH1xrLRXc',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 62,
				quote_text : 'yka4sn9fCbAO8B2Z',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 100,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 66,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 67,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 19,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 66,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 34,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 59,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 37,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 23,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 20,
						language : 'pOZEo1LbK72GRdSf',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 38,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 37,
						user_id : 6965109888137587303,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 21,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 80,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 87,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 10,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 65,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 93,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 58,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 23,
						document_id : -2642062400989103128,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 23,
					),
				),
				quote_offset : 43,
				todo_item_id : 37,
			),
			date : 4,
			message : 'hCKOIYQLPZBc4RHv',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 13,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 58,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 54,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 45,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 59,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 16,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 12,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 61,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 83,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 42,
					language : 'OXUxPqJ5CvlEnSme',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 96,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 39,
					user_id : 2171575526472641547,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 30,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 18,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 93,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 5,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 84,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 82,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 75,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 72,
					document_id : 9120357582125637600,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 21,
				),
			),
			views : 85,
			forwards : 89,
			replies : $client->messageReplies(
				comments : true,
				replies : 23,
				replies_pts : 94,
				recent_repliers : array(
					$client->peerUser(
						user_id : 8979159513312373546,
					),
					$client->peerChat(
						chat_id : 9161917721664708361,
					),
					$client->peerChannel(
						channel_id : -4405332405190453645,
					),
				),
				channel_id : 7974005644656090495,
				max_id : 25,
				read_max_id : 93,
			),
			edit_date : 62,
			post_author : 'tQAKuEToNSM9OWdg',
			grouped_id : -5359418653076967817,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 90,
						reaction : $client->reactionEmpty(...),
						count : 32,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 42,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 15,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'MaphrgqRoxVQXEL2',
					reason : 'KFaXwQD0m8ou9hyp',
					text : 'VNnCqP5xKfgh6230',
				),
			),
			ttl_period : 67,
			quick_reply_shortcut_id : 73,
			effect : -5159062630171847235,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'tCY5hvIbJWTAkVGq',
				text : $client->textWithEntities(
					text : 'TIi9yFcwfBQLd2C4',
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
			report_delivery_until_date : 77,
			paid_message_stars : -1161572461630156019,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 3849378202487411722,
					nanos : 87,
				),
				schedule_date : 95,
			),
			schedule_repeat_period : 40,
			summary_from_language : 'Z3K1YxAScarTWwCe',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 24,
			from_id : $client->peerUser(
				user_id : -4189781371200361007,
			),
			peer_id : $client->peerUser(
				user_id : 3401288025471480334,
			),
			saved_peer_id : $client->peerUser(
				user_id : -7723857705114707334,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 92,
				reply_to_peer_id : $client->peerUser(
					user_id : -772997772033279731,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'YqWAwZJ7oxsUCmPb',
					date : 21,
					channel_post : 61,
					post_author : 'VzNrC7128Y3T6W0u',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 49,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'DVfcPXBEiYeRM3nr',
					saved_date : 34,
					psa_type : 'oBmYItHjkCwZRQKi',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 78,
				quote_text : 'GREADq7Z94tJwraT',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 73,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 11,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 0,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 30,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 14,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 23,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 15,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 82,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 70,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 10,
						language : '19ISEXjoDPhamT7Y',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 97,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 96,
						user_id : -1428568604031228686,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 100,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 97,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 70,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 55,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 26,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 69,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 97,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 27,
						document_id : -1818013008447670536,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 46,
					),
				),
				quote_offset : 40,
				todo_item_id : 2,
			),
			date : 65,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 45,
						reaction : $client->reactionEmpty(...),
						count : 79,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 63,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 59,
					),
				),
			),
			ttl_period : 70,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -5322182949871887534,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 1987603064428172415,
			title : 'S6WVyHZJX7KtnDM5',
			photo : $client->chatPhotoEmpty(),
			participants_count : 97,
			date : 68,
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
				until_date : 4,
			),
		),
		$client->chatForbidden(
			id : 7542301924401809469,
			title : 'S4wRE3jv87GoZqF2',
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
			id : -3150992913360715917,
			access_hash : 5759701224599465713,
			title : '0zMYdQ1cG9JhINDx',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 57,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'MBb0oRuxZf59qSzj',
					reason : 'jbANMqDLYJWEo4id',
					text : 'xgRoAjMrLVetdfKa',
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
				until_date : 57,
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
				until_date : 42,
			),
			participants_count : 58,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 13,
			),
			color : $client->peerColor(
				color : 52,
				background_emoji_id : -5354950960300310018,
			),
			profile_color : $client->peerColor(
				color : 70,
				background_emoji_id : -6875065990298122123,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 3,
			subscription_until_date : 14,
			bot_verification_icon : -928458495234154774,
			send_paid_messages_stars : 6747947782285390295,
			linked_monoforum_id : 4159425560342516143,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -6109213640179606902,
			access_hash : -9205310700938655596,
			title : 'YN3aU4cSV1hQjDf7',
			until_date : 77,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6938870989594200095,
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
			id : 2642389793756534260,
			access_hash : 2502338139864097706,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 9,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '94rUuaxBeIqMCz0s',
					reason : 'cE51RVpaldWHfmSX',
					text : 'LkcgEOH2uys0B3AW',
				),
			),
			bot_inline_placeholder : '0nJADgsGclo1qw5U',
			lang_code : 'YnJscoRSUC5AmipZ',
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
				max_id : 6,
			),
			color : $client->peerColor(
				color : 20,
				background_emoji_id : 4701063491653945703,
			),
			profile_color : $client->peerColor(
				color : 44,
				background_emoji_id : -294168442794462991,
			),
			bot_active_users : 65,
			bot_verification_icon : -2572886783652190266,
			send_paid_messages_stars : 278022820102603609,
		),
	),
	pts : 71,
);
```