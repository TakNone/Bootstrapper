# messages.forumTopics

**Description** : *Contains information about multiple forum topics*

**Layer** : 218

```tl
messages.forumTopics#367617d3 flags:# order_by_create_date:flags.0?true count:int topics:Vector<ForumTopic> messages:Vector<Message> chats:Vector<Chat> users:Vector<User> pts:int = messages.ForumTopics;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 37,
	topics : array(
		$client->forumTopicDeleted(
			id : 56,
		),
		$client->forumTopic(
			my : true,
			closed : true,
			pinned : true,
			short : true,
			hidden : true,
			title_missing : true,
			id : 45,
			date : 13,
			peer : $client->peerUser(
				user_id : 2926015735082880976,
			),
			title : 'wREW0tziNH7Xcvb3',
			icon_color : 82,
			icon_emoji_id : 7691030267190355889,
			top_message : 48,
			read_inbox_max_id : 48,
			read_outbox_max_id : 32,
			unread_count : 95,
			unread_mentions_count : 29,
			unread_reactions_count : 52,
			from_id : $client->peerUser(
				user_id : -967523293297676747,
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : false,
				mute_until : 57,
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
				date : 76,
			),
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 41,
			peer_id : $client->peerUser(
				user_id : -1457556998742648800,
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
			id : 49,
			from_id : $client->peerUser(
				user_id : -4457853500354751175,
			),
			from_boosts_applied : 69,
			peer_id : $client->peerUser(
				user_id : -4111865640191940141,
			),
			saved_peer_id : $client->peerUser(
				user_id : 9093034218616551829,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 1927211564391111895,
				),
				from_name : 'mYJxv4zH1CT57hEe',
				date : 46,
				channel_post : 9,
				post_author : 'nkYbHcsD0wTKLtVp',
				saved_from_peer : $client->peerUser(
					user_id : -8759918786404519860,
				),
				saved_from_msg_id : 70,
				saved_from_id : $client->peerUser(
					user_id : -6544050753400583114,
				),
				saved_from_name : 'aJ5gNyt1DnTsbLOl',
				saved_date : 1,
				psa_type : 'kbTD2FM08UWGXNaj',
			),
			via_bot_id : 7683748486114868278,
			via_business_bot_id : 5526015743766580283,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 42,
				reply_to_peer_id : $client->peerUser(
					user_id : 620745426534354033,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'C7G1HqDX8yYgKo93',
					date : 60,
					channel_post : 70,
					post_author : 'rECmM4gtJbcSyh1u',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 49,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'SwPQI3ihm5FRzBOo',
					saved_date : 93,
					psa_type : 'tes9PmycvVSRaF0l',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 67,
				quote_text : 'SvaxizhsjC7mecnB',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 35,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 7,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 15,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 34,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 53,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 13,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 55,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 94,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 71,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 12,
						language : 'QMp9T7dY1bmyJ48V',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 18,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 3,
						user_id : -4042624244113379877,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 12,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 44,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 54,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 60,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 71,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 8,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 5,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 5,
						document_id : -4049167991393199740,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 31,
					),
				),
				quote_offset : 100,
				todo_item_id : 24,
			),
			date : 74,
			message : '3Ydz87R4Ht9Mr2JK',
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
					length : 55,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 15,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 79,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 48,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 34,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 10,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 33,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 7,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 32,
					language : 'DUbKcrImsRMx6wpT',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 7,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 43,
					user_id : 5445607660225392389,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 87,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 66,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 87,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 5,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 3,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 68,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 74,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 70,
					document_id : -7383262151813667368,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 83,
				),
			),
			views : 88,
			forwards : 27,
			replies : $client->messageReplies(
				comments : true,
				replies : 63,
				replies_pts : 80,
				recent_repliers : array(
					$client->peerUser(
						user_id : -8077427230286521306,
					),
					$client->peerChat(
						chat_id : -7740185553086336386,
					),
					$client->peerChannel(
						channel_id : -1422110532385871183,
					),
				),
				channel_id : 2968228039953078709,
				max_id : 74,
				read_max_id : 56,
			),
			edit_date : 50,
			post_author : 'F6C3rWglkzbHwpn4',
			grouped_id : 396054232402082100,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 58,
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
						date : 82,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 53,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'qZmzwjatOgBI638Q',
					reason : 'w1QvTduX579x2WfJ',
					text : 'XSzluO1F4x6wTd3v',
				),
			),
			ttl_period : 77,
			quick_reply_shortcut_id : 42,
			effect : 6255942716541126900,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'XhsYZi5IDa0SRTme',
				text : $client->textWithEntities(
					text : 'j9lRs1U4NmZLK0rd',
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
			report_delivery_until_date : 41,
			paid_message_stars : -5067199580409079406,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -9143273042187158539,
					nanos : 52,
				),
				schedule_date : 47,
			),
			schedule_repeat_period : 75,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 71,
			from_id : $client->peerUser(
				user_id : 9004351855667833773,
			),
			peer_id : $client->peerUser(
				user_id : -3696110852382266337,
			),
			saved_peer_id : $client->peerUser(
				user_id : -6346252848494296217,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 57,
				reply_to_peer_id : $client->peerUser(
					user_id : 7982433249332424006,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'NKxgF45UkDlrdRq9',
					date : 29,
					channel_post : 66,
					post_author : 'N2JF93Pl8wsGeLVI',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 4,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'mKlHzRJWCS4L08YP',
					saved_date : 71,
					psa_type : 'EM4Kv2rtgiScwJeY',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 82,
				quote_text : '0jxiY5POSV2bQthJ',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 54,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 84,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 92,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 15,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 25,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 17,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 17,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 42,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 4,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 20,
						language : 'GNnLYyXPVec2AU60',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 80,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 22,
						user_id : -6262202165011416614,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 48,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 77,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 38,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 43,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 49,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 48,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 69,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 84,
						document_id : 7819214200879084254,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 30,
					),
				),
				quote_offset : 39,
				todo_item_id : 24,
			),
			date : 9,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 22,
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
						date : 47,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 62,
					),
				),
			),
			ttl_period : 89,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 1764315312541378858,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -2025454758132915957,
			title : '7pDn9dT48wUOojau',
			photo : $client->chatPhotoEmpty(),
			participants_count : 19,
			date : 24,
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
				until_date : 12,
			),
		),
		$client->chatForbidden(
			id : -791541879128882937,
			title : '5NUL9i7kTF3Qq4Xh',
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
			id : -1398968511799907190,
			access_hash : 651536756827186732,
			title : 'Q5b0hvGsmuMc8djN',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 57,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Yphf4ANqVRSMgKvP',
					reason : 'Nbpd1ToeXPvIY0sE',
					text : 'wZitW5I3EKSjms1y',
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
				until_date : 60,
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
				until_date : 6,
			),
			participants_count : 84,
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
				color : 93,
				background_emoji_id : -6117749488077407342,
			),
			profile_color : $client->peerColor(
				color : 49,
				background_emoji_id : 8986631965351995839,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 30,
			subscription_until_date : 29,
			bot_verification_icon : -2652699969684787573,
			send_paid_messages_stars : -2671776168258101865,
			linked_monoforum_id : -1612613639575660770,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 7942932255988975429,
			access_hash : -609530084303507328,
			title : 'PIfKM29i3erVXARH',
			until_date : 99,
		),
	),
	users : array(
		$client->userEmpty(
			id : -531536239591990111,
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
			id : 8487944179854102097,
			access_hash : -8827801335944817860,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 84,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'snhAU2jwyYNz4pqS',
					reason : '2IPjKEpGJyr0ovuF',
					text : '4jqPU7ex8gKha2Zb',
				),
			),
			bot_inline_placeholder : 'ECVUA64wfRYhc0DL',
			lang_code : 'e2lcQbvrgZEwKMoH',
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
				max_id : 81,
			),
			color : $client->peerColor(
				color : 96,
				background_emoji_id : 517967648028243551,
			),
			profile_color : $client->peerColor(
				color : 68,
				background_emoji_id : 6840766693419007073,
			),
			bot_active_users : 72,
			bot_verification_icon : -391401358589466688,
			send_paid_messages_stars : 3058261838258782976,
		),
	),
	pts : 57,
);
```