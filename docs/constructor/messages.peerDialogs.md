# messages.peerDialogs

**Description** : *Dialog info of multiple peers*

**Layer** : 218

```tl
messages.peerDialogs#3371c354 dialogs:Vector<Dialog> messages:Vector<Message> chats:Vector<Chat> users:Vector<User> state:updates.State = messages.PeerDialogs;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>dialogs</mark> | [`Vector<Dialog>`](type/Dialog) | Dialog info |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | Messages mentioned in dialog info |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |
| <mark>state</mark> | [`updates.State`](type/updates.State) | Current update state of dialog |

---

## Type

[messages.PeerDialogs](type/messages.PeerDialogs)

---

## Example

```php
$messagesPeerDialogs = $client->messages->peerDialogs(
	dialogs : array(
		$client->dialog(
			pinned : true,
			unread_mark : true,
			view_forum_as_messages : true,
			peer : $client->peerUser(
				user_id : 5895667778303564647,
			),
			top_message : 76,
			read_inbox_max_id : 34,
			read_outbox_max_id : 82,
			unread_count : 79,
			unread_mentions_count : 91,
			unread_reactions_count : 28,
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : true,
				mute_until : 81,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : false,
				stories_hide_sender : true,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
			pts : 100,
			draft : $client->draftMessageEmpty(
				date : 15,
			),
			folder_id : 63,
			ttl_period : 67,
		),
		$client->dialogFolder(
			pinned : true,
			folder : $client->folder(
				autofill_new_broadcasts : true,
				autofill_public_groups : true,
				autofill_new_correspondents : true,
				id : 73,
				title : 'nozmZ32BydaRsiQk',
				photo : $client->chatPhotoEmpty(),
			),
			peer : $client->peerUser(
				user_id : -1502348592228967824,
			),
			top_message : 0,
			unread_muted_peers_count : 58,
			unread_unmuted_peers_count : 1,
			unread_muted_messages_count : 6,
			unread_unmuted_messages_count : 51,
		),
	),
	messages : array(
		$client->messageEmpty(
			id : 54,
			peer_id : $client->peerUser(
				user_id : 4662779241836536607,
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
			id : 3,
			from_id : $client->peerUser(
				user_id : -4335859242495193588,
			),
			from_boosts_applied : 3,
			peer_id : $client->peerUser(
				user_id : 3631826478193072276,
			),
			saved_peer_id : $client->peerUser(
				user_id : -8082428611845855696,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -9052437512502483618,
				),
				from_name : 'M6TzNlUXFB1RksGy',
				date : 42,
				channel_post : 0,
				post_author : 'exK4gTfPiWNoEvmJ',
				saved_from_peer : $client->peerUser(
					user_id : -7969276895373317996,
				),
				saved_from_msg_id : 13,
				saved_from_id : $client->peerUser(
					user_id : -3796468184881754932,
				),
				saved_from_name : 'eiIHOk9Wdf4xGCau',
				saved_date : 65,
				psa_type : 'Pbt87w04lBRjEFXL',
			),
			via_bot_id : -2889090378046752773,
			via_business_bot_id : -4457910679805753387,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 70,
				reply_to_peer_id : $client->peerUser(
					user_id : 3347547275598155724,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'StVGR3zbZYx0OFQu',
					date : 25,
					channel_post : 66,
					post_author : 'n0W5y4hMmaiv7Obl',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 92,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'mKVafiCkb7ZEMYXl',
					saved_date : 12,
					psa_type : 'AG7Z8g61cXaW5lUq',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 31,
				quote_text : 'U7rS3tVN104juvgP',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 50,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 31,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 36,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 72,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 48,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 45,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 54,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 82,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 21,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 19,
						language : 'UqMDV3oFs8t7dJwX',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 34,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 50,
						user_id : 6888381592169337845,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 98,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 20,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 39,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 72,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 17,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 33,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 78,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 66,
						document_id : 4949601599484060278,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 47,
					),
				),
				quote_offset : 53,
				todo_item_id : 87,
			),
			date : 7,
			message : '8I5BWNUJO4bqYFMs',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 61,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 45,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 59,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 81,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 58,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 87,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 25,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 73,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 82,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 11,
					language : 'k6iISDZ9b7RMvKBU',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 99,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 45,
					user_id : 7177983978293292354,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 79,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 30,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 4,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 7,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 32,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 26,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 98,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 49,
					document_id : -6406113152582539551,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 45,
				),
			),
			views : 13,
			forwards : 14,
			replies : $client->messageReplies(
				comments : true,
				replies : 57,
				replies_pts : 97,
				recent_repliers : array(
					$client->peerUser(
						user_id : 540563435203910189,
					),
					$client->peerChat(
						chat_id : 8391797470300752601,
					),
					$client->peerChannel(
						channel_id : 2926142424049407857,
					),
				),
				channel_id : -1114748993988806098,
				max_id : 95,
				read_max_id : 17,
			),
			edit_date : 38,
			post_author : 'J8QOznY1uDBCWGZt',
			grouped_id : 6928103966917880353,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 70,
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
						date : 90,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 43,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'YrXnAUG6PFQaM3Zf',
					reason : 'RkHOfhiBFTPDeQVU',
					text : 'RAfrKM6BxYsnwPoG',
				),
			),
			ttl_period : 26,
			quick_reply_shortcut_id : 31,
			effect : -5889976768091806508,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'cuxPeosQih5bVOlv',
				text : $client->textWithEntities(
					text : 'mA9ntRX0gxCyuhBQ',
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
			report_delivery_until_date : 12,
			paid_message_stars : 946966723812481970,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -1884758853329317375,
					nanos : 48,
				),
				schedule_date : 40,
			),
			schedule_repeat_period : 62,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 59,
			from_id : $client->peerUser(
				user_id : 698874637263746651,
			),
			peer_id : $client->peerUser(
				user_id : -7784378461406767158,
			),
			saved_peer_id : $client->peerUser(
				user_id : -6210204542138953807,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 5,
				reply_to_peer_id : $client->peerUser(
					user_id : 2757104146538178891,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'RFyuhxpbXQ1eEiNL',
					date : 28,
					channel_post : 99,
					post_author : 'Fa6sPQGeRIpiUzjr',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 34,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'Lo9I7xedlBmcUQVb',
					saved_date : 77,
					psa_type : 'DahTy8UdArwNGOj4',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 16,
				quote_text : 'YrkId8U1x5wPO0Cj',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 0,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 56,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 40,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 30,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 77,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 94,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 94,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 32,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 0,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 19,
						language : '4jtLFvNp0goPde6O',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 83,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 48,
						user_id : 4302837583271814433,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 92,
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
						length : 17,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 91,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 33,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 20,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 96,
						document_id : 5361933096543496375,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 32,
					),
				),
				quote_offset : 95,
				todo_item_id : 34,
			),
			date : 47,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 87,
						reaction : $client->reactionEmpty(...),
						count : 95,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 29,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 40,
					),
				),
			),
			ttl_period : 88,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 8795803051282351124,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 1937952330880846984,
			title : 'gjwseDYXHbIFNG5t',
			photo : $client->chatPhotoEmpty(),
			participants_count : 35,
			date : 43,
			version : 58,
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
				until_date : 20,
			),
		),
		$client->chatForbidden(
			id : -7061634399131074834,
			title : 'ksuJaW3PXvMKlUtm',
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
			id : -3503926490450761339,
			access_hash : 1546717454934927915,
			title : 'goh1Cj57bSRyupHA',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 48,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'mvZKexQqHsA34pbu',
					reason : '8SEjG7cQ4AUkhCDw',
					text : 'SB37CvwtcqyYMLDW',
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
				until_date : 71,
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
				until_date : 49,
			),
			participants_count : 13,
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
				color : 45,
				background_emoji_id : -721738988031049906,
			),
			profile_color : $client->peerColor(
				color : 60,
				background_emoji_id : 2105503917776267476,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 68,
			subscription_until_date : 41,
			bot_verification_icon : -8195180963770479526,
			send_paid_messages_stars : -1402960274153732189,
			linked_monoforum_id : 3794113302543199722,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -7951460425364799,
			access_hash : -4743581882610118578,
			title : 'atocO9gnq0JwVAGH',
			until_date : 91,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2146845147047125688,
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
			id : -5807022356627753310,
			access_hash : -5359028154995790772,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 64,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tqL3E4I98AvComDf',
					reason : '5yYxOP2kEKu1qCAj',
					text : 'MpPauYkjAoswiOWf',
				),
			),
			bot_inline_placeholder : 'zRrL3c2sgp607TVt',
			lang_code : 'Ch2UpejGsxuKmF5N',
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
				max_id : 12,
			),
			color : $client->peerColor(
				color : 66,
				background_emoji_id : -3364739277453368897,
			),
			profile_color : $client->peerColor(
				color : 32,
				background_emoji_id : -3290248422927292857,
			),
			bot_active_users : 6,
			bot_verification_icon : -3530327155240587061,
			send_paid_messages_stars : 1549010816019435078,
		),
	),
	state : $client->updates->state(
		pts : 42,
		qts : 30,
		date : 48,
		seq : 69,
		unread_count : 4,
	),
);
```