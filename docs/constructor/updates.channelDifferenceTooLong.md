# updates.channelDifferenceTooLong

**Description** : *The provided pts \+ limit &lt; remote pts\. Simply, there are too many updates to be fetched \(more than limit\), the client has to resolve the update gap in one of the following ways \(assuming the existence of a persistent database to locally store messages\):*

**Layer** : 222

```tl
updates.channelDifferenceTooLong#a4bcc6fe flags:# final:flags.0?true timeout:flags.1?int dialog:Dialog messages:Vector<Message> chats:Vector<Chat> users:Vector<User> = updates.ChannelDifference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **final** | [`flags.0?true`](type/true) | Whether there are more updates that must be fetched (always false) |
| **timeout** | [`flags.1?int`](type/int) | Clients are supposed to refetch the channel difference after timeout seconds have elapsed |
| <mark>dialog</mark> | [`Dialog`](type/Dialog) | Dialog containing the latest PTS that can be used to reset the channel state |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | The latest messages |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats from messages |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users from messages |

---

## Type

[updates.ChannelDifference](type/updates.ChannelDifference)

---

## Example

```php
$updatesChannelDifference = $client->updates->channelDifferenceTooLong(
	final : true,
	timeout : 88,
	dialog : $client->dialog(
		pinned : true,
		unread_mark : true,
		view_forum_as_messages : true,
		peer : $client->peerUser(
			user_id : -7604725169228784637,
		),
		top_message : 39,
		read_inbox_max_id : 66,
		read_outbox_max_id : 39,
		unread_count : 74,
		unread_mentions_count : 71,
		unread_reactions_count : 23,
		notify_settings : $client->peerNotifySettings(
			show_previews : false,
			silent : true,
			mute_until : 6,
			ios_sound : $client->notificationSoundDefault(),
			android_sound : $client->notificationSoundDefault(),
			other_sound : $client->notificationSoundDefault(),
			stories_muted : true,
			stories_hide_sender : false,
			stories_ios_sound : $client->notificationSoundDefault(),
			stories_android_sound : $client->notificationSoundDefault(),
			stories_other_sound : $client->notificationSoundDefault(),
		),
		pts : 88,
		draft : $client->draftMessageEmpty(
			date : 81,
		),
		folder_id : 98,
		ttl_period : 3,
	),
	messages : array(
		$client->messageEmpty(
			id : 87,
			peer_id : $client->peerUser(
				user_id : 2160210182048357603,
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
			id : 54,
			from_id : $client->peerUser(
				user_id : -6572454907089680409,
			),
			from_boosts_applied : 39,
			peer_id : $client->peerUser(
				user_id : -6022660949734566989,
			),
			saved_peer_id : $client->peerUser(
				user_id : 8307421586262663895,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 6720159624087828576,
				),
				from_name : '8QozK4qEDisMWwNe',
				date : 80,
				channel_post : 97,
				post_author : '7DHRdaepEsb3cWYF',
				saved_from_peer : $client->peerUser(
					user_id : 6281569005245707114,
				),
				saved_from_msg_id : 38,
				saved_from_id : $client->peerUser(
					user_id : 8500526010993885748,
				),
				saved_from_name : 'u9Dvo8UTY3pPQzLm',
				saved_date : 64,
				psa_type : 'AwiZ7LsIoqbrBlnH',
			),
			via_bot_id : 7760815988686009762,
			via_business_bot_id : -5845563523139002682,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 94,
				reply_to_peer_id : $client->peerUser(
					user_id : -2013709793399219155,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'P5n0KILJRFt3MuVe',
					date : 12,
					channel_post : 99,
					post_author : '7Eu6sOdc1ktDPqMr',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 82,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'oFB69ACc2muLY45H',
					saved_date : 18,
					psa_type : 'GOUjv3PRCyF1aXrk',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 27,
				quote_text : 'chYWf4RVl8nxgoy3',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 21,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 67,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 82,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 62,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 84,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 66,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 57,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 97,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 6,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 26,
						language : 'fc3jESDdbz56slpw',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 43,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 39,
						user_id : 1428505534542107295,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 84,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 46,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 56,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 86,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 74,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 19,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 93,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 59,
						document_id : -425470838763316002,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 20,
					),
				),
				quote_offset : 20,
				todo_item_id : 5,
			),
			date : 73,
			message : 'Lf8OQvA6scouZlIx',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 50,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 38,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 29,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 30,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 11,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 6,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 82,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 32,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 66,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 96,
					language : 'jxLNJ07moAgSs1UZ',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 47,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 61,
					user_id : 5639294048539665570,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 16,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 49,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 69,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 10,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 79,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 20,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 29,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 67,
					document_id : -7233466632210763670,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 88,
				),
			),
			views : 73,
			forwards : 41,
			replies : $client->messageReplies(
				comments : true,
				replies : 20,
				replies_pts : 11,
				recent_repliers : array(
					$client->peerUser(
						user_id : -2351008277510998710,
					),
					$client->peerChat(
						chat_id : -6942319099509607738,
					),
					$client->peerChannel(
						channel_id : 5501123680117668947,
					),
				),
				channel_id : 2405507226274449813,
				max_id : 14,
				read_max_id : 94,
			),
			edit_date : 90,
			post_author : 'Cxu7l359oSBNpftO',
			grouped_id : -5731393663332277372,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 14,
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
						date : 71,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 23,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'nMXQR2Hy1wck4iVb',
					reason : 'UCTYZbV5RaHFvAqP',
					text : 'VJdKhgLtG37sQuie',
				),
			),
			ttl_period : 50,
			quick_reply_shortcut_id : 62,
			effect : -3818707555721033395,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'vwDrlEoZhkJT1P4f',
				text : $client->textWithEntities(
					text : 'OIlhrgLS95QAHXqT',
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
			report_delivery_until_date : 31,
			paid_message_stars : -4969317197162189845,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -3838867996333286986,
					nanos : 80,
				),
				schedule_date : 57,
			),
			schedule_repeat_period : 84,
			summary_from_language : '8RNsy9wrxuV56paP',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 22,
			from_id : $client->peerUser(
				user_id : 8664163902928499012,
			),
			peer_id : $client->peerUser(
				user_id : 484374798622975089,
			),
			saved_peer_id : $client->peerUser(
				user_id : -5362688069637305687,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 80,
				reply_to_peer_id : $client->peerUser(
					user_id : -7701308171158438931,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '3TPB0RUft8NWdbY1',
					date : 100,
					channel_post : 58,
					post_author : 'LGKpnDEViUfRdr75',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 72,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'mqUM1k4d96vznpo2',
					saved_date : 47,
					psa_type : 'TBkDh2nUJ7VrOlo8',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 91,
				quote_text : 'bPN4B1GjUup9FeSZ',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 4,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 40,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 67,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 41,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 56,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 88,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 28,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 79,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 13,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 42,
						language : 'm1vYJNPkcAKgVEWX',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 63,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 89,
						user_id : -1011902617030125579,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 38,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 30,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 37,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 53,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 17,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 53,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 11,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 7,
						document_id : -313510034430570174,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 31,
					),
				),
				quote_offset : 49,
				todo_item_id : 35,
			),
			date : 21,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 22,
						reaction : $client->reactionEmpty(...),
						count : 0,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 6,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 46,
					),
				),
			),
			ttl_period : 68,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 429813313472120251,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 3778312299619987653,
			title : '59suKiDHoU1dI8Nr',
			photo : $client->chatPhotoEmpty(),
			participants_count : 51,
			date : 63,
			version : 66,
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
				until_date : 95,
			),
		),
		$client->chatForbidden(
			id : -6566379792958038057,
			title : 'Oq4MKuHWLJbXfepB',
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
			id : 5223836352726734163,
			access_hash : 1670319288320115452,
			title : 'BYiq8Mmfl1DLwx2n',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 51,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'LRzpjN05WtGilBUh',
					reason : 'z2Oachu67GJ5geTq',
					text : 'rtxdicBsU8VbZjEl',
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
				until_date : 98,
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
				until_date : 86,
			),
			participants_count : 90,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 68,
			),
			color : $client->peerColor(
				color : 41,
				background_emoji_id : -6391116905642772431,
			),
			profile_color : $client->peerColor(
				color : 95,
				background_emoji_id : -4171399152825957803,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 67,
			subscription_until_date : 63,
			bot_verification_icon : 2863400621174948893,
			send_paid_messages_stars : 3819288590690052451,
			linked_monoforum_id : 3532612607648033823,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -5468165850313937491,
			access_hash : 3875368916199210122,
			title : 'aZOg380JjcGMrUwq',
			until_date : 69,
		),
	),
	users : array(
		$client->userEmpty(
			id : -3116973099113294024,
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
			id : 1436599673229956595,
			access_hash : 479411908984430302,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 67,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '1fucryqpAaT42H96',
					reason : 'ajYzkn6WrXZ4LPUB',
					text : 'nAGhR1eBpbdalrqK',
				),
			),
			bot_inline_placeholder : 'Im65ybXoPzwT8usU',
			lang_code : 'vE9QAmO346PyHsUf',
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
				max_id : 20,
			),
			color : $client->peerColor(
				color : 64,
				background_emoji_id : 8843140051013583820,
			),
			profile_color : $client->peerColor(
				color : 26,
				background_emoji_id : 4302348977650952124,
			),
			bot_active_users : 36,
			bot_verification_icon : 1554473318521341990,
			send_paid_messages_stars : 8811589009128074009,
		),
	),
);
```