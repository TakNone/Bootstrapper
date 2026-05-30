# messages.savedDialogsSlice

**Description** : *Incomplete list of saved message dialogs &raquo; with messages and auxiliary data*

**Layer** : 222

```tl
messages.savedDialogsSlice#44ba9dd9 count:int dialogs:Vector<SavedDialog> messages:Vector<Message> chats:Vector<Chat> users:Vector<User> = messages.SavedDialogs;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of saved message dialogs |
| <mark>dialogs</mark> | [`Vector<SavedDialog>`](type/SavedDialog) | List of saved message dialogs |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | List of last messages from dialogs |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[messages.SavedDialogs](type/messages.SavedDialogs)

---

## Example

```php
$messagesSavedDialogs = $client->messages->savedDialogsSlice(
	count : 32,
	dialogs : array(
		$client->savedDialog(
			pinned : true,
			peer : $client->peerUser(
				user_id : 7667133277516577762,
			),
			top_message : 48,
		),
		$client->monoForumDialog(
			unread_mark : true,
			nopaid_messages_exception : true,
			peer : $client->peerUser(
				user_id : -3671953488787407861,
			),
			top_message : 81,
			read_inbox_max_id : 75,
			read_outbox_max_id : 60,
			unread_count : 22,
			unread_reactions_count : 82,
			draft : $client->draftMessageEmpty(
				date : 26,
			),
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 71,
			peer_id : $client->peerUser(
				user_id : 3324402835854161602,
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
				user_id : 8877571535728889916,
			),
			from_boosts_applied : 8,
			peer_id : $client->peerUser(
				user_id : 2208419810768190527,
			),
			saved_peer_id : $client->peerUser(
				user_id : -8577061296513718866,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -75193639900374764,
				),
				from_name : 'Tb1YfQXyE5V8GRcB',
				date : 16,
				channel_post : 56,
				post_author : 'mHJX82whVY1TlBnD',
				saved_from_peer : $client->peerUser(
					user_id : 3831151635496821457,
				),
				saved_from_msg_id : 66,
				saved_from_id : $client->peerUser(
					user_id : -9169515063193249954,
				),
				saved_from_name : 'lmLcSPTosfFX7AHb',
				saved_date : 69,
				psa_type : 'psiI1hNUb8kJe9PO',
			),
			via_bot_id : -7593453612870930660,
			via_business_bot_id : 5792637695306132749,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 4,
				reply_to_peer_id : $client->peerUser(
					user_id : 9009890202848402007,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'tu58NrHEOelmcRIz',
					date : 19,
					channel_post : 84,
					post_author : 'CbTUhAi5pPmGe3Oc',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 48,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'izUnWfIlGPkdJpgY',
					saved_date : 88,
					psa_type : 'b64xYAFPkR2dfVqg',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 35,
				quote_text : '3D8qOMa0tgTXRjAk',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 42,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 70,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 8,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 23,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 54,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 51,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 2,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 27,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 48,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 53,
						language : 'HDXASoxfW93OKtua',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 50,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 85,
						user_id : 2840293048419397084,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 2,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 15,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 80,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 95,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 2,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 66,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 27,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 78,
						document_id : -2366779628409902876,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 64,
					),
				),
				quote_offset : 83,
				todo_item_id : 52,
			),
			date : 83,
			message : 'UcF1xklm9rBnsWq6',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 20,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 37,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 19,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 57,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 24,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 66,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 30,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 52,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 37,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 18,
					language : 'GNRxCZY9X1cyAbul',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 51,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 13,
					user_id : -5295892258933965120,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 66,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 86,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 16,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 84,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 75,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 74,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 33,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 66,
					document_id : -8179257334858168026,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 54,
				),
			),
			views : 66,
			forwards : 53,
			replies : $client->messageReplies(
				comments : true,
				replies : 77,
				replies_pts : 38,
				recent_repliers : array(
					$client->peerUser(
						user_id : 4016537533015497244,
					),
					$client->peerChat(
						chat_id : 3652803652680306216,
					),
					$client->peerChannel(
						channel_id : 2707418613267197177,
					),
				),
				channel_id : -2517792501101550392,
				max_id : 53,
				read_max_id : 53,
			),
			edit_date : 83,
			post_author : 'XGQ9BdmkOKt6wEvb',
			grouped_id : 8705241064961379478,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 96,
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
						date : 5,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 77,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'PeNEHuoLbiBfxAIJ',
					reason : 'awKWThcBFAy0bQGz',
					text : '9EnkaryUNqX8w6f4',
				),
			),
			ttl_period : 16,
			quick_reply_shortcut_id : 69,
			effect : -7638057125461933664,
			factcheck : $client->factCheck(
				need_check : true,
				country : '8PfMvLpqNHC4Acsn',
				text : $client->textWithEntities(
					text : 'Y8wPb4UsofSztcpM',
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
			report_delivery_until_date : 55,
			paid_message_stars : 5117234616008904604,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 8265077249558908413,
					nanos : 43,
				),
				schedule_date : 11,
			),
			schedule_repeat_period : 52,
			summary_from_language : 'dWcA4wuiYSNQDrsH',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 58,
			from_id : $client->peerUser(
				user_id : -5923779827249449680,
			),
			peer_id : $client->peerUser(
				user_id : 7301745417610058214,
			),
			saved_peer_id : $client->peerUser(
				user_id : -8410112480746118912,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 47,
				reply_to_peer_id : $client->peerUser(
					user_id : -3198841300748658615,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'aDMeo97fQ2AbPh3w',
					date : 21,
					channel_post : 75,
					post_author : 'kwMVe8Fh43yOtbGg',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 5,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'Q9JmVrLRNZHTW4zX',
					saved_date : 83,
					psa_type : '68ST9DsKQyj7IHar',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 50,
				quote_text : 'mLSpvgXYBQR8HZJe',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 65,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 61,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 40,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 6,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 18,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 92,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 83,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 4,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 41,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 9,
						language : 'RJ6bPBlurgv3YUVt',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 0,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 83,
						user_id : 1483132955395858852,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 81,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 51,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 47,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 6,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 29,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 23,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 66,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 89,
						document_id : -2060067829688346192,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 60,
					),
				),
				quote_offset : 17,
				todo_item_id : 14,
			),
			date : 91,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 66,
						reaction : $client->reactionEmpty(...),
						count : 97,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 34,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 5,
					),
				),
			),
			ttl_period : 13,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 8335796240622873588,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 954154267834231457,
			title : 'mfQSAhURtnB63kbs',
			photo : $client->chatPhotoEmpty(),
			participants_count : 95,
			date : 42,
			version : 95,
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
				until_date : 54,
			),
		),
		$client->chatForbidden(
			id : -8275877441962790553,
			title : 'pqn52PZicU0aWyer',
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
			id : 3196103466264881761,
			access_hash : 414070735066111086,
			title : 'QN8k2tdnugOCj4oE',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 13,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'u2g1LXzNkPmqvljH',
					reason : 'be9sAtx4U7LIpalX',
					text : 'NMLe85oFdtEjWTka',
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
				until_date : 89,
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
				until_date : 91,
			),
			participants_count : 2,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 22,
			),
			color : $client->peerColor(
				color : 28,
				background_emoji_id : -2016256600236429618,
			),
			profile_color : $client->peerColor(
				color : 76,
				background_emoji_id : -6981697175397494644,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 62,
			subscription_until_date : 3,
			bot_verification_icon : 6849587336366974214,
			send_paid_messages_stars : -4555101886089967361,
			linked_monoforum_id : 6194742974592852570,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 711132409400568571,
			access_hash : 7617353647417643791,
			title : 'AQ9WqEwt42gpxTjr',
			until_date : 96,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1449748803067515822,
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
			id : -4590049360979974283,
			access_hash : -336665073605992774,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 31,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '9IAplMgkr4eG7swN',
					reason : 'xm2i5tNIojwnlABp',
					text : 'F1C7NaHiEW6SqvsZ',
				),
			),
			bot_inline_placeholder : 'FeHgNobtdyaixVDj',
			lang_code : 'X659yp3LUM0hvmwi',
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
				max_id : 36,
			),
			color : $client->peerColor(
				color : 77,
				background_emoji_id : -2889151061293288474,
			),
			profile_color : $client->peerColor(
				color : 86,
				background_emoji_id : 1392891273749715378,
			),
			bot_active_users : 82,
			bot_verification_icon : 9129625052926229208,
			send_paid_messages_stars : -434458433335077990,
		),
	),
);
```