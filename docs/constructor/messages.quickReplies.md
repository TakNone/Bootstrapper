# messages.quickReplies

**Description** : *Info about quick reply shortcuts &raquo;*

**Layer** : 218

```tl
messages.quickReplies#c68d6695 quick_replies:Vector<QuickReply> messages:Vector<Message> chats:Vector<Chat> users:Vector<User> = messages.QuickReplies;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>quick_replies</mark> | [`Vector<QuickReply>`](type/QuickReply) | Quick reply shortcuts |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | Messages mentioned in quick_replies |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[messages.QuickReplies](type/messages.QuickReplies)

---

## Example

```php
$messagesQuickReplies = $client->messages->quickReplies(
	quick_replies : array(
		$client->quickReply(
			shortcut_id : 62,
			shortcut : 'Rp5jqD1InJi6vS7t',
			top_message : 33,
			count : 18,
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 87,
			peer_id : $client->peerUser(
				user_id : 8085910046104530801,
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
			id : 44,
			from_id : $client->peerUser(
				user_id : 7106596872621917438,
			),
			from_boosts_applied : 26,
			peer_id : $client->peerUser(
				user_id : -579384763574710336,
			),
			saved_peer_id : $client->peerUser(
				user_id : 979110548293005735,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 3952993095284319994,
				),
				from_name : 'u0qrvdHWXAoeBZFC',
				date : 79,
				channel_post : 89,
				post_author : '9fQGDyWYAmntsuwN',
				saved_from_peer : $client->peerUser(
					user_id : -1327907021239100593,
				),
				saved_from_msg_id : 19,
				saved_from_id : $client->peerUser(
					user_id : -3900273651939812108,
				),
				saved_from_name : 'R28PvGV6NDLrWTnE',
				saved_date : 62,
				psa_type : 'Vn8fcJMzIRp74rdy',
			),
			via_bot_id : 4877376614339217753,
			via_business_bot_id : -5122443640080668899,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 78,
				reply_to_peer_id : $client->peerUser(
					user_id : -8897539439477899266,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'DBRcZ3SfWoYyvrkK',
					date : 5,
					channel_post : 53,
					post_author : 'hr0JaHXoOpMEfIBe',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 84,
					saved_from_id : $client->peerUser(...),
					saved_from_name : '71wxNts5kAvydecL',
					saved_date : 69,
					psa_type : 'ZJDG3bQFewC25Uv1',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 43,
				quote_text : 'zRUye8K6pjWxdaIQ',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 89,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 9,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 96,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 78,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 61,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 16,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 7,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 39,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 91,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 25,
						language : 't7a1qMTCmlvH4fgo',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 15,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 53,
						user_id : 1006814721848156478,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 27,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 77,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 99,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 39,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 16,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 74,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 51,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 24,
						document_id : 6610222981630829499,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 74,
					),
				),
				quote_offset : 22,
				todo_item_id : 34,
			),
			date : 70,
			message : 'HDvYbjrfOmZtk5n6',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 27,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 21,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 3,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 11,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 13,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 77,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 61,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 64,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 0,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 39,
					language : 't1TK0WycJOvRZsfL',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 87,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 6,
					user_id : 1610623184971087932,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 74,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 21,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 60,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 60,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 94,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 77,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 64,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 100,
					document_id : -8685810187284024309,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 27,
				),
			),
			views : 5,
			forwards : 21,
			replies : $client->messageReplies(
				comments : true,
				replies : 35,
				replies_pts : 44,
				recent_repliers : array(
					$client->peerUser(
						user_id : -6422292887197991737,
					),
					$client->peerChat(
						chat_id : -5126925170180841124,
					),
					$client->peerChannel(
						channel_id : -5819730236260430975,
					),
				),
				channel_id : 5282837622807528878,
				max_id : 31,
				read_max_id : 53,
			),
			edit_date : 97,
			post_author : 'J5fKjGY2mrvRoVlz',
			grouped_id : -5977567692441948418,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 69,
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
						date : 96,
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
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'S47IZv6cxjLYRuQw',
					reason : 'JTdX9mr7znbq62fF',
					text : 'iZdAhsJc9pb7F4xX',
				),
			),
			ttl_period : 19,
			quick_reply_shortcut_id : 76,
			effect : -7346479406138802604,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'UwOIPGo2MQCqt9gk',
				text : $client->textWithEntities(
					text : 'm6lYSyTbxKNfp5ik',
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
			paid_message_stars : 7563460876599502080,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -2379339616013830731,
					nanos : 25,
				),
				schedule_date : 27,
			),
			schedule_repeat_period : 1,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 23,
			from_id : $client->peerUser(
				user_id : -2973122916987677762,
			),
			peer_id : $client->peerUser(
				user_id : 8060688662209587298,
			),
			saved_peer_id : $client->peerUser(
				user_id : -3958194494400544448,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 25,
				reply_to_peer_id : $client->peerUser(
					user_id : -8568321778411234645,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'Ug5In3GY9ZJyuD7l',
					date : 43,
					channel_post : 94,
					post_author : 'MqeUa0Wyn7B6KQu9',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 46,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'HEGM21Qo9rFSRZwV',
					saved_date : 13,
					psa_type : 'Mc4HlJ0QesCU7FXf',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 79,
				quote_text : 'oZ47z0b59DtlTfmK',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 64,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 36,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 73,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 73,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 50,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 89,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 96,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 6,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 49,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 50,
						language : 'ZvyIM4hRXQYKD1P9',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 43,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 78,
						user_id : 5166982360362819477,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 6,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 40,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 90,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 100,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 84,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 61,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 87,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 83,
						document_id : 2721622564589901020,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 41,
					),
				),
				quote_offset : 12,
				todo_item_id : 34,
			),
			date : 42,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 36,
						reaction : $client->reactionEmpty(...),
						count : 20,
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
						count : 24,
					),
				),
			),
			ttl_period : 97,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 9211953417746394260,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -5491609000691657149,
			title : '1wxz2DOkjvG4P9Rd',
			photo : $client->chatPhotoEmpty(),
			participants_count : 62,
			date : 36,
			version : 88,
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
				until_date : 69,
			),
		),
		$client->chatForbidden(
			id : -1511991489294665055,
			title : 'gyAfiqxj2KrUlcJz',
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
			id : 4378431551788049198,
			access_hash : 6197007560771434452,
			title : 'QKFwqjtLUHTSPzBD',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 0,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'cYotfbE7G4SpdDgC',
					reason : 'I021ymwEfOF8YHGN',
					text : '1a8f2HEO4iuvQxbR',
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
				until_date : 12,
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
				until_date : 66,
			),
			participants_count : 89,
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
				color : 94,
				background_emoji_id : 4468094898370619004,
			),
			profile_color : $client->peerColor(
				color : 57,
				background_emoji_id : -318095451370065330,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 14,
			subscription_until_date : 70,
			bot_verification_icon : -4722051510420407015,
			send_paid_messages_stars : -1112845943033346689,
			linked_monoforum_id : 5591387585099328211,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -5532172974369125449,
			access_hash : 3683227635277860247,
			title : 'lurKqTa7E3FeUXCR',
			until_date : 26,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4181895940873135418,
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
			id : -3514006722321678845,
			access_hash : -426527996180315571,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 7,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '7f8mB9ZN3TaRoX6I',
					reason : 'u8jiqofrKEnPTymM',
					text : '2lGb8AgKPnDh40yf',
				),
			),
			bot_inline_placeholder : 'RKGlMC5hFLvX3zIP',
			lang_code : '7bSmjlXEC59Uyfae',
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
				max_id : 32,
			),
			color : $client->peerColor(
				color : 74,
				background_emoji_id : -3505034309896956339,
			),
			profile_color : $client->peerColor(
				color : 64,
				background_emoji_id : -4390973772241240809,
			),
			bot_active_users : 87,
			bot_verification_icon : -6912356631138062344,
			send_paid_messages_stars : -1279987681909565886,
		),
	),
);
```