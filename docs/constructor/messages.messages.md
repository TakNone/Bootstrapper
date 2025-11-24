# messages.messages

**Description** : *Full list of messages with auxiliary data*

**Layer** : 218

```tl
messages.messages#1d73e7ea messages:Vector<Message> topics:Vector<ForumTopic> chats:Vector<Chat> users:Vector<User> = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | List of messages |
| <mark>topics</mark> | [`Vector<ForumTopic>`](type/ForumTopic) | NOTHING |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in dialogs |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in messages and chats |

---

## Type

[messages.Messages](type/messages.Messages)

---

## Example

```php
$messagesMessages = $client->messages->messages(
	messages : array(
		$client->messageEmpty(
			id : 23,
			peer_id : $client->peerUser(
				user_id : 8418340343621623995,
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
			id : 27,
			from_id : $client->peerUser(
				user_id : 8441788542265378226,
			),
			from_boosts_applied : 93,
			peer_id : $client->peerUser(
				user_id : 873032995714380517,
			),
			saved_peer_id : $client->peerUser(
				user_id : -888296083122698538,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 89149697183810547,
				),
				from_name : 'THg3FpDCWYZ98ihE',
				date : 58,
				channel_post : 70,
				post_author : 'arLyjH2t68PBUnOV',
				saved_from_peer : $client->peerUser(
					user_id : -4971170490422962174,
				),
				saved_from_msg_id : 56,
				saved_from_id : $client->peerUser(
					user_id : 7339998428951837860,
				),
				saved_from_name : 'FvHbsR7dw2SuW9Kg',
				saved_date : 57,
				psa_type : 'qf9UKe7OXJkW5Nhv',
			),
			via_bot_id : -112172056239037436,
			via_business_bot_id : 944951912497001629,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 44,
				reply_to_peer_id : $client->peerUser(
					user_id : 4864672280007484395,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '2zqexIVMhYglrU5j',
					date : 48,
					channel_post : 34,
					post_author : 'gG4kWYyOUZKfPIAJ',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 2,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'y5DhizZbEB3WcCmH',
					saved_date : 72,
					psa_type : 'rUd7ynXEv893HZ56',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 44,
				quote_text : 'BFYVTctOa6EMjeLG',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 89,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 56,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 37,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 46,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 68,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 43,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 67,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 73,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 5,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 45,
						language : 'rYPzd8kpNM5LbKuQ',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 54,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 18,
						user_id : 9130078046406896669,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 16,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 78,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 50,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 97,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 66,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 27,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 46,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 25,
						document_id : -6107951105604491588,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 66,
					),
				),
				quote_offset : 48,
				todo_item_id : 8,
			),
			date : 4,
			message : 'CJ5QT03MNc4d2Rl9',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 73,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 86,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 7,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 16,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 41,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 19,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 80,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 45,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 26,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 9,
					language : 'bwoJQrKBF5nyxhgM',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 59,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 99,
					user_id : -15881576694915262,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 71,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 87,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 88,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 6,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 22,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 65,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 41,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 88,
					document_id : 885263285031463756,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 87,
				),
			),
			views : 0,
			forwards : 88,
			replies : $client->messageReplies(
				comments : true,
				replies : 60,
				replies_pts : 32,
				recent_repliers : array(
					$client->peerUser(
						user_id : 387467717260886980,
					),
					$client->peerChat(
						chat_id : 8506421826063116939,
					),
					$client->peerChannel(
						channel_id : -4212811355975296387,
					),
				),
				channel_id : -4566792096747825326,
				max_id : 66,
				read_max_id : 51,
			),
			edit_date : 45,
			post_author : 'egk1Mc8ULidFpujv',
			grouped_id : 4820769022923854850,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 65,
						reaction : $client->reactionEmpty(...),
						count : 39,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 4,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 100,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'KXbnZCuSIzYtJywT',
					reason : 'znS7gDdW0Kor4IEl',
					text : 'TtBKNQpkX8wVjFH5',
				),
			),
			ttl_period : 76,
			quick_reply_shortcut_id : 1,
			effect : -7283244587766650859,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'PfAEv2KHT4MSG9xy',
				text : $client->textWithEntities(
					text : 'VC1PjdLv0Ssp2F7Y',
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
			report_delivery_until_date : 34,
			paid_message_stars : -968919237269536005,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -8981806355970246780,
					nanos : 8,
				),
				schedule_date : 54,
			),
			schedule_repeat_period : 15,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 73,
			from_id : $client->peerUser(
				user_id : -4595865806490487056,
			),
			peer_id : $client->peerUser(
				user_id : 7909650583166200670,
			),
			saved_peer_id : $client->peerUser(
				user_id : -7462879014288311626,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 52,
				reply_to_peer_id : $client->peerUser(
					user_id : -6317603023468355077,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'J7ixcH6zZyqMLK85',
					date : 33,
					channel_post : 19,
					post_author : 'CbBs93xvEL5FPRdK',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 32,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'CrxbguwUdJDLo5QB',
					saved_date : 36,
					psa_type : 'nZIwklz3TpoQCA5J',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 34,
				quote_text : '7D5TArYaH6hpuUbq',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 38,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 90,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 56,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 70,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 83,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 26,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 71,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 45,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 21,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 73,
						language : 'BbME2uNW0lAeG9Kv',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 47,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 26,
						user_id : 6617221674565147433,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 65,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 91,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 67,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 90,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 29,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 58,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 22,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 1,
						document_id : -6578119372827096512,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 79,
					),
				),
				quote_offset : 49,
				todo_item_id : 75,
			),
			date : 80,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 7,
						reaction : $client->reactionEmpty(...),
						count : 50,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 77,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 82,
					),
				),
			),
			ttl_period : 68,
		),
	),
	topics : array(
		$client->forumTopicDeleted(
			id : 33,
		),
		$client->forumTopic(
			my : true,
			closed : true,
			pinned : true,
			short : true,
			hidden : true,
			title_missing : true,
			id : 15,
			date : 69,
			peer : $client->peerUser(
				user_id : -4977420458046363073,
			),
			title : 'wCak0X3eBDz9UqQh',
			icon_color : 44,
			icon_emoji_id : 1839951427247809401,
			top_message : 76,
			read_inbox_max_id : 50,
			read_outbox_max_id : 40,
			unread_count : 24,
			unread_mentions_count : 84,
			unread_reactions_count : 5,
			from_id : $client->peerUser(
				user_id : -7021732077849458405,
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : true,
				mute_until : 90,
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
				date : 19,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 5389478249907726420,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 9157863263538140827,
			title : 'WqchNkJAFKXfsQE9',
			photo : $client->chatPhotoEmpty(),
			participants_count : 19,
			date : 5,
			version : 15,
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
				until_date : 10,
			),
		),
		$client->chatForbidden(
			id : 8138843021214647779,
			title : 'cEdw2SryNGAYbWF5',
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
			id : 1967353396115672518,
			access_hash : -6145300919637521723,
			title : 'aQE8X3ISjhMAsort',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 100,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'mABt5adiNwRGWI3O',
					reason : 'IYQT7MfogORKqrlA',
					text : 'Nq2RIXjeimQ1vwkV',
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
				until_date : 96,
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
			participants_count : 68,
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
				color : 69,
				background_emoji_id : -7871231323510426119,
			),
			profile_color : $client->peerColor(
				color : 11,
				background_emoji_id : 1048130934708892381,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 4,
			subscription_until_date : 39,
			bot_verification_icon : -6519637598942527975,
			send_paid_messages_stars : 3290872741048254576,
			linked_monoforum_id : 652140460412856471,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 111649298348328353,
			access_hash : 8212315694890904318,
			title : 'BIGtRKyU9nS5wXNO',
			until_date : 47,
		),
	),
	users : array(
		$client->userEmpty(
			id : 7714562488447930698,
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
			id : 2703453744034093296,
			access_hash : -231307632379738133,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 55,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'QuO8pHsPg1Vhw4IR',
					reason : 'qSIVOF2yMk79g6sJ',
					text : 'YiVlGs0kavC1JMpI',
				),
			),
			bot_inline_placeholder : 'TrDXGFuChQjgNm7S',
			lang_code : 'UamxbMvwKiBWzGOY',
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
				max_id : 82,
			),
			color : $client->peerColor(
				color : 82,
				background_emoji_id : -3234402450836022135,
			),
			profile_color : $client->peerColor(
				color : 77,
				background_emoji_id : -114943246283574328,
			),
			bot_active_users : 52,
			bot_verification_icon : -2702899773003845778,
			send_paid_messages_stars : 895272954639966878,
		),
	),
);
```