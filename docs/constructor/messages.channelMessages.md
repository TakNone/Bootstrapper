# messages.channelMessages

**Description** : *Channel messages*

**Layer** : 218

```tl
messages.channelMessages#c776ba4e flags:# inexact:flags.1?true pts:int count:int offset_id_offset:flags.2?int messages:Vector<Message> topics:Vector<ForumTopic> chats:Vector<Chat> users:Vector<User> = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	pts : 11,
	count : 59,
	offset_id_offset : 0,
	messages : array(
		$client->messageEmpty(
			id : 79,
			peer_id : $client->peerUser(
				user_id : 7536176332685162940,
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
			id : 81,
			from_id : $client->peerUser(
				user_id : -1311516583989376182,
			),
			from_boosts_applied : 5,
			peer_id : $client->peerUser(
				user_id : -6519559894776882083,
			),
			saved_peer_id : $client->peerUser(
				user_id : 6836728260893595149,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 3409003367629223155,
				),
				from_name : 'AyFI9VMruJ1smdD5',
				date : 78,
				channel_post : 45,
				post_author : '9bhfO1ZpKYARMziG',
				saved_from_peer : $client->peerUser(
					user_id : -8902021684743901299,
				),
				saved_from_msg_id : 34,
				saved_from_id : $client->peerUser(
					user_id : 1279148449292283886,
				),
				saved_from_name : 'N87nvzDd1QOZA4Ib',
				saved_date : 94,
				psa_type : 'jBAK1uX5iOVxmk90',
			),
			via_bot_id : 966304669171439112,
			via_business_bot_id : -8263663661202721024,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 38,
				reply_to_peer_id : $client->peerUser(
					user_id : 4195463141678786803,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'RXv8FKyqNSTlJoUh',
					date : 59,
					channel_post : 50,
					post_author : '84lK71C2VunALk6i',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 36,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'LnAWr3gV9DyBU4OZ',
					saved_date : 80,
					psa_type : 'vZwhrD6liuPXtE4d',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 9,
				quote_text : 'elukKVw7ICd9ZSiA',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 43,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 49,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 62,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 85,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 76,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 13,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 21,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 41,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 85,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 79,
						language : 'TmxJehyFQl8cq9fr',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 41,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 14,
						user_id : 4765793562261212815,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 92,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 14,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 96,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 83,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 28,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 48,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 22,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 88,
						document_id : -1353325022485592282,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 5,
					),
				),
				quote_offset : 22,
				todo_item_id : 92,
			),
			date : 52,
			message : 'LKbBauw8J3DYrvGd',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 76,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 2,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 43,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 55,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 24,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 56,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 44,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 51,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 82,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 63,
					language : 'dQZAjmfg013KV2YT',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 62,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 14,
					user_id : 1748927539997563518,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 45,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 13,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 21,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 68,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 49,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 98,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 61,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 58,
					document_id : -7208607510384901861,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 55,
				),
			),
			views : 27,
			forwards : 94,
			replies : $client->messageReplies(
				comments : true,
				replies : 27,
				replies_pts : 75,
				recent_repliers : array(
					$client->peerUser(
						user_id : -5231622014010283223,
					),
					$client->peerChat(
						chat_id : 5105921188250873750,
					),
					$client->peerChannel(
						channel_id : -6133082322381788310,
					),
				),
				channel_id : 9161788069453210918,
				max_id : 31,
				read_max_id : 95,
			),
			edit_date : 61,
			post_author : '3DLdJYn0h98c2isg',
			grouped_id : 7122450058945542761,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 79,
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
						date : 52,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 9,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : '1UVnRrSCFYBHIkgG',
					reason : '8PwdOkzayut40lIh',
					text : 'prfhSALDz4qmCPjW',
				),
			),
			ttl_period : 94,
			quick_reply_shortcut_id : 34,
			effect : -8253511023797459187,
			factcheck : $client->factCheck(
				need_check : true,
				country : '3x8eOpDS7mc6Xrf1',
				text : $client->textWithEntities(
					text : '9PYT8MFVo4zARb5s',
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
			report_delivery_until_date : 9,
			paid_message_stars : -6010145942753863447,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -8808790417045539472,
					nanos : 84,
				),
				schedule_date : 75,
			),
			schedule_repeat_period : 48,
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 77,
			from_id : $client->peerUser(
				user_id : 4683292405856120826,
			),
			peer_id : $client->peerUser(
				user_id : 3532962358650276575,
			),
			saved_peer_id : $client->peerUser(
				user_id : -2917981288833175700,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 94,
				reply_to_peer_id : $client->peerUser(
					user_id : -2214165387704708114,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'jMQYn28Oy1rb4Rp7',
					date : 9,
					channel_post : 30,
					post_author : 'bB0TVMLt2fIzcNrW',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 68,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'mVbA79JX5CWatoqU',
					saved_date : 59,
					psa_type : 'meZByT4GWRkFQ2rb',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 39,
				quote_text : 'gkq1nOrW9CSa6v7z',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 44,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 75,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 10,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 19,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 57,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 10,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 34,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 67,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 80,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 23,
						language : 'pgGrwj4bN9zfW1LI',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 97,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 93,
						user_id : 6253201654864418642,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 23,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 24,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 45,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 46,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 86,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 44,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 16,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 2,
						document_id : -8484169747578080251,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 97,
					),
				),
				quote_offset : 51,
				todo_item_id : 34,
			),
			date : 100,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 48,
						reaction : $client->reactionEmpty(...),
						count : 93,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 99,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 71,
					),
				),
			),
			ttl_period : 66,
		),
	),
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
			id : 47,
			date : 94,
			peer : $client->peerUser(
				user_id : 3069874846853163884,
			),
			title : '8soXR2TtjZaCepbd',
			icon_color : 87,
			icon_emoji_id : 570900550959806786,
			top_message : 85,
			read_inbox_max_id : 6,
			read_outbox_max_id : 64,
			unread_count : 82,
			unread_mentions_count : 27,
			unread_reactions_count : 44,
			from_id : $client->peerUser(
				user_id : -3029365599905462161,
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : false,
				mute_until : 76,
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
				date : 10,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7262981940065697212,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -2789766586203471561,
			title : 'ypMlt8FOo0HQdYzk',
			photo : $client->chatPhotoEmpty(),
			participants_count : 93,
			date : 1,
			version : 12,
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
				until_date : 30,
			),
		),
		$client->chatForbidden(
			id : 4907883331279416128,
			title : '9uNe1bUQCmO7HBqf',
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
			id : -4197264814348228384,
			access_hash : -736267058981850765,
			title : 'v6tKwFsdSJeyYig8',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 97,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'RXZFsabEc2O7injw',
					reason : 'UhWNbQ4Mge0BFnq2',
					text : 'Kt9IhBUYXn4lzPwC',
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
				until_date : 65,
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
				until_date : 89,
			),
			participants_count : 18,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 19,
			),
			color : $client->peerColor(
				color : 43,
				background_emoji_id : -1132246794862149029,
			),
			profile_color : $client->peerColor(
				color : 24,
				background_emoji_id : 9055633423332992289,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 59,
			subscription_until_date : 96,
			bot_verification_icon : 5193430434857913479,
			send_paid_messages_stars : -2961719924818051909,
			linked_monoforum_id : -6568954891878983070,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -8163593262246604405,
			access_hash : 9168471752954693691,
			title : 'XmC9L4yH3fnsFQBt',
			until_date : 70,
		),
	),
	users : array(
		$client->userEmpty(
			id : 5494018951374294165,
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
			id : 8855618866210465,
			access_hash : -598822351053120636,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 33,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'EhfL3Jkx4nCsKplY',
					reason : 'YN3BROtmgJ1AHeVj',
					text : 'MhESL2tZmoqnbcdX',
				),
			),
			bot_inline_placeholder : 'suWjKGaQHCkwB2tm',
			lang_code : '1PtqpeG5muOxhjXf',
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
				max_id : 96,
			),
			color : $client->peerColor(
				color : 64,
				background_emoji_id : -3089469282169712892,
			),
			profile_color : $client->peerColor(
				color : 17,
				background_emoji_id : 2716292818810244322,
			),
			bot_active_users : 43,
			bot_verification_icon : -5883444879718617509,
			send_paid_messages_stars : 5605143438973642252,
		),
	),
);
```