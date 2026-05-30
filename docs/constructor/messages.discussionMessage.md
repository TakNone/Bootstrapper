# messages.discussionMessage

**Description** : *Information about a message thread*

**Layer** : 222

```tl
messages.discussionMessage#a6341782 flags:# messages:Vector<Message> max_id:flags.0?int read_inbox_max_id:flags.1?int read_outbox_max_id:flags.2?int unread_count:int chats:Vector<Chat> users:Vector<User> = messages.DiscussionMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>messages</mark> | [`Vector<Message>`](type/Message) | The messages from which the thread starts. The messages are returned in reverse chronological order (i.e., in order of decreasing message ID) |
| **max_id** | [`flags.0?int`](type/int) | Message ID of latest reply in this thread |
| **read_inbox_max_id** | [`flags.1?int`](type/int) | Message ID of latest read incoming message in this thread |
| **read_outbox_max_id** | [`flags.2?int`](type/int) | Message ID of latest read outgoing message in this thread |
| <mark>unread_count</mark> | [`int`](type/int) | Number of unread messages |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats mentioned in constructor |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in constructor |

---

## Type

[messages.DiscussionMessage](type/messages.DiscussionMessage)

---

## Example

```php
$messagesDiscussionMessage = $client->messages->discussionMessage(
	messages : array(
		$client->messageEmpty(
			id : 57,
			peer_id : $client->peerUser(
				user_id : -1192461233135443108,
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
			id : 45,
			from_id : $client->peerUser(
				user_id : -8529602685704049529,
			),
			from_boosts_applied : 27,
			peer_id : $client->peerUser(
				user_id : 5776970988782435088,
			),
			saved_peer_id : $client->peerUser(
				user_id : 6131587348181311501,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 426302699181612967,
				),
				from_name : 'aRcbxPBfJGlup3CW',
				date : 91,
				channel_post : 93,
				post_author : 'qw4UFfEd9j1x2V3v',
				saved_from_peer : $client->peerUser(
					user_id : -8137796164701751632,
				),
				saved_from_msg_id : 50,
				saved_from_id : $client->peerUser(
					user_id : 3053028941894948420,
				),
				saved_from_name : 'FJTPfXBasZcwLzVY',
				saved_date : 68,
				psa_type : 'WNngR8YQILfGSKMB',
			),
			via_bot_id : -5092402751426558514,
			via_business_bot_id : 6751266103192952758,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 100,
				reply_to_peer_id : $client->peerUser(
					user_id : 4077827321835025694,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'Qfxb8E3kWMO25ziL',
					date : 36,
					channel_post : 87,
					post_author : 'Hwu4OLgsaNCdt9xv',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 55,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'KwNCfTe94PVIEbo3',
					saved_date : 89,
					psa_type : 'qjrBbzgJFMRPuGLc',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 38,
				quote_text : 'NLGuikwV9M6TXemE',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 98,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 12,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 16,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 63,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 84,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 82,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 57,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 84,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 75,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 32,
						language : '7PTG3kq0g82pZiHB',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 28,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 1,
						user_id : -5949786491870131012,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 52,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 94,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 68,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 16,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 6,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 37,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 55,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 100,
						document_id : 1344294868838707885,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 28,
					),
				),
				quote_offset : 45,
				todo_item_id : 12,
			),
			date : 48,
			message : 'M9QmBVaJgwj6efNo',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 45,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 67,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 85,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 80,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 70,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 19,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 91,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 77,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 5,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 72,
					language : 'tbGRmEhig4jONY50',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 80,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 4,
					user_id : 5115096705182206225,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 75,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 65,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 1,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 48,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 38,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 16,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 11,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 17,
					document_id : -7044856826227301348,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 19,
				),
			),
			views : 61,
			forwards : 28,
			replies : $client->messageReplies(
				comments : true,
				replies : 44,
				replies_pts : 41,
				recent_repliers : array(
					$client->peerUser(
						user_id : -1324216472263672865,
					),
					$client->peerChat(
						chat_id : -2684435538141902874,
					),
					$client->peerChannel(
						channel_id : -1292931647531961332,
					),
				),
				channel_id : 6468698683140136944,
				max_id : 60,
				read_max_id : 38,
			),
			edit_date : 30,
			post_author : 'dfTWjOlyULMXtcz6',
			grouped_id : 1362935270227641407,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 45,
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
						date : 85,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 72,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6hzoKjixW3csYStM',
					reason : '8Tebl0RsH1Y4Oq6A',
					text : 'SpT7HG85FmdQy3Vi',
				),
			),
			ttl_period : 34,
			quick_reply_shortcut_id : 24,
			effect : 4293305357652483405,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'zmqDcYHgTAtPrQZ2',
				text : $client->textWithEntities(
					text : 'UOtW2iTGXq4PvBIz',
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
			report_delivery_until_date : 42,
			paid_message_stars : 7790120410330865490,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : 1220636437456717296,
					nanos : 69,
				),
				schedule_date : 75,
			),
			schedule_repeat_period : 31,
			summary_from_language : 'd5myqMGcfD8XaFis',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 90,
			from_id : $client->peerUser(
				user_id : -3123107368009771237,
			),
			peer_id : $client->peerUser(
				user_id : 753191330538880199,
			),
			saved_peer_id : $client->peerUser(
				user_id : 8460670460152753716,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 88,
				reply_to_peer_id : $client->peerUser(
					user_id : -8698281144229717062,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'iUDuyX10apEz8B9M',
					date : 12,
					channel_post : 28,
					post_author : 'OPAiX8Y9FZ5S3C4R',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 38,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'dxVh7SRrgTJ2kcY9',
					saved_date : 73,
					psa_type : '0XfAdMEYSJUxgisk',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 79,
				quote_text : '0OrB9pwTP2LMfaEn',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 54,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 27,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 29,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 27,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 56,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 24,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 85,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 20,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 76,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 26,
						language : 'Qte6dB3I8mSv0M4W',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 86,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 69,
						user_id : 8402176678189252037,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 15,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 82,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 28,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 25,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 80,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 78,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 78,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 66,
						document_id : 8915032232820926344,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 49,
					),
				),
				quote_offset : 69,
				todo_item_id : 73,
			),
			date : 68,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 74,
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
						date : 23,
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
			ttl_period : 45,
		),
	),
	max_id : 47,
	read_inbox_max_id : 18,
	read_outbox_max_id : 97,
	unread_count : 34,
	chats : array(
		$client->chatEmpty(
			id : -1918797621824966985,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -1897968442816651063,
			title : 'n8FafdtrvpqLAeON',
			photo : $client->chatPhotoEmpty(),
			participants_count : 77,
			date : 60,
			version : 80,
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
				until_date : 22,
			),
		),
		$client->chatForbidden(
			id : 1426792488343947422,
			title : 'ahek2Jwy3uBWExvr',
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
			id : -8569452380680433926,
			access_hash : 4881165346192363801,
			title : 'Q9vP3M8BdW2I1HKh',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 76,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'f8hG7u2n3Dw4aNMR',
					reason : 'ugKos67NWj9lRB01',
					text : 'rPRlVoyLjg3XpYUf',
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
				until_date : 74,
			),
			participants_count : 65,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 43,
			),
			color : $client->peerColor(
				color : 67,
				background_emoji_id : 7538654434136672984,
			),
			profile_color : $client->peerColor(
				color : 43,
				background_emoji_id : -1645812788583397651,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 51,
			subscription_until_date : 0,
			bot_verification_icon : 1699567237590164313,
			send_paid_messages_stars : 5195430937364856429,
			linked_monoforum_id : -8708282658390625627,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -5012062300858309470,
			access_hash : -2056806119666601429,
			title : 'qch4jvUiLSy8Bw9b',
			until_date : 59,
		),
	),
	users : array(
		$client->userEmpty(
			id : -5322894937494601500,
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
			id : -8037820078108987903,
			access_hash : -3562493349855479745,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 39,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'LDrTRcQdeBmvFx8A',
					reason : '1zuj04KpDyZALqmx',
					text : 'VjcKl6PdkyIOwMZW',
				),
			),
			bot_inline_placeholder : 'jR3ea1Xxmt0b4r8i',
			lang_code : '5hSQIZxdspbUyPjG',
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
				max_id : 67,
			),
			color : $client->peerColor(
				color : 19,
				background_emoji_id : 2290761569658190708,
			),
			profile_color : $client->peerColor(
				color : 33,
				background_emoji_id : 8716979445791032875,
			),
			bot_active_users : 24,
			bot_verification_icon : -4866905208727571031,
			send_paid_messages_stars : -5022104559805327406,
		),
	),
);
```