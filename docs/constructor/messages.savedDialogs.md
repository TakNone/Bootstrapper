# messages.savedDialogs

**Description** : *Represents some saved message dialogs &raquo;*

**Layer** : 218

```tl
messages.savedDialogs#f83ae221 dialogs:Vector<SavedDialog> messages:Vector<Message> chats:Vector<Chat> users:Vector<User> = messages.SavedDialogs;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>dialogs</mark> | [`Vector<SavedDialog>`](type/SavedDialog) | Saved message dialogs » |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | List of last messages from each saved dialog |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[messages.SavedDialogs](type/messages.SavedDialogs)

---

## Example

```php
$messagesSavedDialogs = $client->messages->savedDialogs(
	dialogs : array(
		$client->savedDialog(
			pinned : true,
			peer : $client->peerUser(
				user_id : 1342061905729118008,
			),
			top_message : 72,
		),
		$client->monoForumDialog(
			unread_mark : true,
			nopaid_messages_exception : true,
			peer : $client->peerUser(
				user_id : 1325747532887364000,
			),
			top_message : 79,
			read_inbox_max_id : 79,
			read_outbox_max_id : 79,
			unread_count : 75,
			unread_reactions_count : 20,
			draft : $client->draftMessageEmpty(
				date : 32,
			),
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 66,
			peer_id : $client->peerUser(
				user_id : 2372177860782681642,
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
			id : 43,
			from_id : $client->peerUser(
				user_id : 5202502392799238685,
			),
			from_boosts_applied : 51,
			peer_id : $client->peerUser(
				user_id : 1305105903620429515,
			),
			saved_peer_id : $client->peerUser(
				user_id : -6147771955868112814,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -8605833823597167692,
				),
				from_name : 'uGbCeOKqZE6thapX',
				date : 52,
				channel_post : 78,
				post_author : 'XNxDRbT6Ao1G9hf3',
				saved_from_peer : $client->peerUser(
					user_id : 4141813314825814250,
				),
				saved_from_msg_id : 13,
				saved_from_id : $client->peerUser(
					user_id : -5858156283271430300,
				),
				saved_from_name : 'lka4ycZwdNuzoGhH',
				saved_date : 12,
				psa_type : 'xEj3vrm9F5uVROfY',
			),
			via_bot_id : 5566543301561560364,
			via_business_bot_id : -4357008484323223661,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 24,
				reply_to_peer_id : $client->peerUser(
					user_id : 720578147124555753,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '4tOEj2WgysDNuAl5',
					date : 53,
					channel_post : 45,
					post_author : 'u6P5na32zBbLQYkH',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 86,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'SQZ6zWou3lxr9GRy',
					saved_date : 69,
					psa_type : 'uhAlacN56pGFdDJI',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 55,
				quote_text : 'IjqLePBm62ydicQk',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 42,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 37,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 99,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 43,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 62,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 84,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 79,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 89,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 94,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 3,
						language : 'aZbmoJ6gCDQkA9vf',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 11,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 17,
						user_id : -806538597956926668,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 81,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 45,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 42,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 59,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 92,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 49,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 64,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 69,
						document_id : 4288219416369762775,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 25,
					),
				),
				quote_offset : 21,
				todo_item_id : 33,
			),
			date : 45,
			message : 'jZTbRatGdDkrXwex',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 43,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 11,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 56,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 52,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 49,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 33,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 67,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 28,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 87,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 92,
					language : 'kCMW4czLxvBUrlI8',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 3,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 11,
					user_id : 3050040554586605850,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 77,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 81,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 32,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 67,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 92,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 68,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 6,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 21,
					document_id : 5359598279561629380,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 85,
				),
			),
			views : 64,
			forwards : 47,
			replies : $client->messageReplies(
				comments : true,
				replies : 16,
				replies_pts : 34,
				recent_repliers : array(
					$client->peerUser(
						user_id : 9106884617727223913,
					),
					$client->peerChat(
						chat_id : 1978344991352675302,
					),
					$client->peerChannel(
						channel_id : 8146571812389618208,
					),
				),
				channel_id : 577259197919427440,
				max_id : 12,
				read_max_id : 3,
			),
			edit_date : 44,
			post_author : 'vfUTKxDIwFYn1zZL',
			grouped_id : 612380530529470830,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 56,
						reaction : $client->reactionEmpty(...),
						count : 21,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 21,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 76,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ZvA3X1y97hKcLuep',
					reason : 'qIOcDAUZxdv9K84n',
					text : 'BAdWt2kjP86Ys054',
				),
			),
			ttl_period : 71,
			quick_reply_shortcut_id : 52,
			effect : 5433065735108944578,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'A0nN6ZiEg3ORTxrs',
				text : $client->textWithEntities(
					text : 'oeBuwHOK6iN27EsU',
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
			report_delivery_until_date : 58,
			paid_message_stars : 8783583308779869572,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 3071897097776911526,
					nanos : 1,
				),
				schedule_date : 40,
			),
			schedule_repeat_period : 40,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 47,
			from_id : $client->peerUser(
				user_id : -6758805483918819687,
			),
			peer_id : $client->peerUser(
				user_id : 6723272416513479157,
			),
			saved_peer_id : $client->peerUser(
				user_id : -3585651856640498282,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 33,
				reply_to_peer_id : $client->peerUser(
					user_id : -8308473954633624786,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'kd5rwsBjpzonVXvE',
					date : 93,
					channel_post : 51,
					post_author : 'geCBWhSFUwzOTo37',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 27,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'PJBguI6yAC59bXNY',
					saved_date : 93,
					psa_type : 'BkYhmaXbq9MwJVEC',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 44,
				quote_text : 'c2FMPu8mnVrbgCly',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 14,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 59,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 38,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 81,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 35,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 15,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 21,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 39,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 28,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 25,
						language : 'UNMPg9Y50OlG8CWB',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 4,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 11,
						user_id : -9215768333992342779,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 63,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 76,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 76,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 26,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 9,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 44,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 3,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 13,
						document_id : -6952280025636685893,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 94,
					),
				),
				quote_offset : 45,
				todo_item_id : 71,
			),
			date : 13,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 38,
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
						date : 45,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 35,
					),
				),
			),
			ttl_period : 61,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -7929760426077822059,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6697880553234297968,
			title : 'FatUwIiAqJnsmDxE',
			photo : $client->chatPhotoEmpty(),
			participants_count : 66,
			date : 45,
			version : 88,
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
				until_date : 26,
			),
		),
		$client->chatForbidden(
			id : 4901701791390862542,
			title : 'DOeW2EGHipF8Pqsk',
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
			id : 4167463925178728447,
			access_hash : -6963861232748417471,
			title : '71t5TZbO2R3DXSyu',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 8,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '0Hf6huMqt1CVg2sr',
					reason : 'jiRlPokGQ81sg4zJ',
					text : 'n81YGkHv706Aw4m3',
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
				until_date : 92,
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
			participants_count : 1,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 37,
			),
			color : $client->peerColor(
				color : 14,
				background_emoji_id : 7947942537984816750,
			),
			profile_color : $client->peerColor(
				color : 26,
				background_emoji_id : -6489976426905830417,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 21,
			subscription_until_date : 62,
			bot_verification_icon : -3977731186762826391,
			send_paid_messages_stars : 4106277072553524952,
			linked_monoforum_id : -4507073882899244312,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -2014949748610111260,
			access_hash : 4124099956253294169,
			title : '9D0JELy24g7G3kMr',
			until_date : 41,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4431650554926370246,
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
			id : 4320654743900310311,
			access_hash : -8256686674633463427,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 76,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '9XMGjx1qS03NhbmI',
					reason : 'Jmb3fHclIiTMxzPS',
					text : '0lMDsBtUxdo7RevN',
				),
			),
			bot_inline_placeholder : 'Rei17WxlA3VDYq9C',
			lang_code : 'ztqKMyDXBx0s3Lp1',
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
				max_id : 1,
			),
			color : $client->peerColor(
				color : 32,
				background_emoji_id : 6538087104799914533,
			),
			profile_color : $client->peerColor(
				color : 63,
				background_emoji_id : 4350001420160385166,
			),
			bot_active_users : 7,
			bot_verification_icon : 6635560020998701648,
			send_paid_messages_stars : -3422167664715673297,
		),
	),
);
```