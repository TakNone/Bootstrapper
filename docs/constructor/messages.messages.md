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
			id : 81,
			peer_id : $client->peerUser(
				user_id : 365791289240405621,
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
			id : 68,
			from_id : $client->peerUser(
				user_id : 2644016389077510364,
			),
			from_boosts_applied : 5,
			peer_id : $client->peerUser(
				user_id : 1250044720127228043,
			),
			saved_peer_id : $client->peerUser(
				user_id : -246455600023449194,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 2520308158146450064,
				),
				from_name : 'PEaGUtu4icZT1zoC',
				date : 83,
				channel_post : 9,
				post_author : 'vEhPC6G3tpSk45bz',
				saved_from_peer : $client->peerUser(
					user_id : -7408024777613453572,
				),
				saved_from_msg_id : 15,
				saved_from_id : $client->peerUser(
					user_id : 4763968644160314531,
				),
				saved_from_name : 'lfJ80aOigbkN2Yj5',
				saved_date : 54,
				psa_type : 'zExw7s3PcICol6Ap',
			),
			via_bot_id : 3248914260033040239,
			via_business_bot_id : 606308697249943989,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 7,
				reply_to_peer_id : $client->peerUser(
					user_id : -5543639187715099397,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'CoVvdScWtADMeprX',
					date : 97,
					channel_post : 44,
					post_author : 'YAZpeK6uqQOJ53cP',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 4,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'H5MvsX1bm2ROaZNc',
					saved_date : 20,
					psa_type : 'feZ9cjLrwoX18lDk',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 99,
				quote_text : 'ujERzwx3l0sD4OUv',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 24,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 58,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 63,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 37,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 69,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 78,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 8,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 36,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 80,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 47,
						language : 'BDfHgcz9EeVjTFJm',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 45,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 53,
						user_id : -7288674279990569590,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 20,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 80,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 39,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 64,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 55,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 11,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 39,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 77,
						document_id : 5769387638780221560,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 9,
					),
				),
				quote_offset : 97,
				todo_item_id : 63,
			),
			date : 61,
			message : 'ZxQkK0G38evBmEHp',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 82,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 73,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 29,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 78,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 29,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 100,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 67,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 89,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 48,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 53,
					language : 'FGIME9vuLZnh4UDH',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 74,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 30,
					user_id : 2924207720607699637,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 6,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 7,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 10,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 94,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 23,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 60,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 40,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 25,
					document_id : -6641322844670696737,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 31,
				),
			),
			views : 44,
			forwards : 70,
			replies : $client->messageReplies(
				comments : true,
				replies : 62,
				replies_pts : 58,
				recent_repliers : array(
					$client->peerUser(
						user_id : -3118158050034625431,
					),
					$client->peerChat(
						chat_id : 21927554145166153,
					),
					$client->peerChannel(
						channel_id : -4989055327332814743,
					),
				),
				channel_id : -5996641625900853195,
				max_id : 12,
				read_max_id : 8,
			),
			edit_date : 27,
			post_author : 'bSpd0LsHP3eIna5m',
			grouped_id : -5786826013102168694,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 21,
						reaction : $client->reactionEmpty(...),
						count : 44,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 27,
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
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Kebj6cAkXNDWIuwq',
					reason : 'I5okRPHtsyCQ4eTF',
					text : 'OiQBWZNIxa4yrlPM',
				),
			),
			ttl_period : 33,
			quick_reply_shortcut_id : 46,
			effect : 7709533635089493973,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'qnh0i75lBS69XeWU',
				text : $client->textWithEntities(
					text : 'xhgaCAFJifeypNk3',
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
			report_delivery_until_date : 26,
			paid_message_stars : 1192280334981704972,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 3203634603578682304,
					nanos : 10,
				),
				schedule_date : 73,
			),
			schedule_repeat_period : 83,
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
				user_id : -8875847823580576750,
			),
			peer_id : $client->peerUser(
				user_id : 7039102021313469343,
			),
			saved_peer_id : $client->peerUser(
				user_id : 6140051833484958596,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 28,
				reply_to_peer_id : $client->peerUser(
					user_id : 8428699112003275299,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'FfBAINRlq5U8CDEK',
					date : 69,
					channel_post : 80,
					post_author : 'uYIUpNEaLJs5x4dj',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 30,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'FIjHaBm1eJycXvCL',
					saved_date : 46,
					psa_type : 'n7G4XrhAbuaHJ8wS',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 1,
				quote_text : '6HGmbxcT3B1M0D2p',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 12,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 61,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 65,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 77,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 49,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 64,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 1,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 55,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 9,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 48,
						language : 'x05FBWqie2brIwgp',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 17,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 20,
						user_id : 9159872331008978613,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 91,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 46,
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
						length : 80,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 75,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 26,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 86,
						document_id : -5170737729784812237,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 87,
					),
				),
				quote_offset : 65,
				todo_item_id : 59,
			),
			date : 82,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 2,
						reaction : $client->reactionEmpty(...),
						count : 5,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 50,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 60,
					),
				),
			),
			ttl_period : 63,
		),
	),
	topics : array(
		$client->forumTopicDeleted(
			id : 7,
		),
		$client->forumTopic(
			my : true,
			closed : true,
			pinned : true,
			short : true,
			hidden : true,
			title_missing : true,
			id : 12,
			date : 100,
			peer : $client->peerUser(
				user_id : 161523385510042031,
			),
			title : 'Djn2B7IQZ1W93pFL',
			icon_color : 74,
			icon_emoji_id : 7500159573108932639,
			top_message : 49,
			read_inbox_max_id : 13,
			read_outbox_max_id : 9,
			unread_count : 59,
			unread_mentions_count : 96,
			unread_reactions_count : 85,
			from_id : $client->peerUser(
				user_id : -4949855579645500056,
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : false,
				mute_until : 14,
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
				date : 69,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 2054317726562773337,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4760218491344092079,
			title : 'QmReByUGk5HlI3Yt',
			photo : $client->chatPhotoEmpty(),
			participants_count : 34,
			date : 36,
			version : 1,
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
			id : 9169830682368654394,
			title : '1SFKPH8Tfjkxa5vA',
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
			id : 649378354504659672,
			access_hash : -2834641670522172151,
			title : 'WqCduzIh2p347n5Y',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 7,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'VbY4Skov8fjsWUQy',
					reason : 'JBdyEv5HXI94Q0Cn',
					text : 'Y4SjwWqFN3ds8prK',
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
				until_date : 46,
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
				until_date : 24,
			),
			participants_count : 11,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 52,
			),
			color : $client->peerColor(
				color : 33,
				background_emoji_id : 2494092791251893618,
			),
			profile_color : $client->peerColor(
				color : 94,
				background_emoji_id : 8895004626829477003,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 40,
			subscription_until_date : 81,
			bot_verification_icon : 8866691353140083292,
			send_paid_messages_stars : 6618340410713120327,
			linked_monoforum_id : -2843747343804145491,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 4446514204254787329,
			access_hash : 2249351115738034592,
			title : 'JPdrtGjMYSW78EQn',
			until_date : 45,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4395354407767373290,
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
			id : -6438337548383115011,
			access_hash : 4565854296739364318,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 15,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'F8LB4AD9KdGstzmk',
					reason : 'K1hbwdjaOD59leZy',
					text : '1VRZxGKX37ot25Ei',
				),
			),
			bot_inline_placeholder : 'kE3aCluepjH9o2nI',
			lang_code : '0b3JGCTSAg9rw1hq',
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
				max_id : 40,
			),
			color : $client->peerColor(
				color : 25,
				background_emoji_id : -1099244540129256285,
			),
			profile_color : $client->peerColor(
				color : 11,
				background_emoji_id : -4570877308849340570,
			),
			bot_active_users : 43,
			bot_verification_icon : 505414135787049559,
			send_paid_messages_stars : -5529059813685351319,
		),
	),
);
```