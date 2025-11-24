# messages.sponsoredMessages

**Description** : *A set of sponsored messages associated to a channel*

**Layer** : 218

```tl
messages.sponsoredMessages#ffda656d flags:# posts_between:flags.0?int start_delay:flags.1?int between_delay:flags.2?int messages:Vector<SponsoredMessage> chats:Vector<Chat> users:Vector<User> = messages.SponsoredMessages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **posts_between** | [`flags.0?int`](type/int) | If set, specifies the minimum number of messages between shown sponsored messages; otherwise, only one sponsored message must be shown after all ordinary messages |
| **start_delay** | [`flags.1?int`](type/int) | For sponsored messages to show on channel videos », the number of seconds to wait before showing the first ad |
| **between_delay** | [`flags.2?int`](type/int) | For sponsored messages to show on channel videos », the number of seconds to wait after the previous ad is hidden, before showing the next ad |
| <mark>messages</mark> | [`Vector<SponsoredMessage>`](type/SponsoredMessage) | Sponsored messages |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats mentioned in the sponsored messages |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in the sponsored messages |

---

## Type

[messages.SponsoredMessages](type/messages.SponsoredMessages)

---

## Example

```php
$messagesSponsoredMessages = $client->messages->sponsoredMessages(
	posts_between : 73,
	start_delay : 83,
	between_delay : 99,
	messages : array(
		$client->sponsoredMessage(
			recommended : true,
			can_report : true,
			random_id : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			url : 'https://docs.liveproto.dev',
			title : 'tCmDW1B9Zgu7s3IS',
			message : 'Loqs2iZtkcANnXK0',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 59,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 85,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 88,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 21,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 47,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 50,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 89,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 4,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 4,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 79,
					language : 'tywCE2kDWJpaNTxl',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 89,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 24,
					user_id : 4722879262873393812,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 77,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 2,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 44,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 70,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 47,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 36,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 42,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 16,
					document_id : -1899210270704039603,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 25,
				),
			),
			photo : $client->photoEmpty(
				id : 7822048156467796004,
			),
			media : $client->messageMediaEmpty(),
			color : $client->peerColor(
				color : 45,
				background_emoji_id : -4677117780342565022,
			),
			button_text : '6yW1i9dzgchKtxVu',
			sponsor_info : 'D4nazh6YyLWK0Jdk',
			additional_info : 'FMQzjkg4YCaKh7Gx',
			min_display_duration : 46,
			max_display_duration : 33,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 8032937421032461352,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -6423853458623593137,
			title : 'peLFUKAx1yQ3Z927',
			photo : $client->chatPhotoEmpty(),
			participants_count : 77,
			date : 82,
			version : 11,
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
				until_date : 89,
			),
		),
		$client->chatForbidden(
			id : -1534753396218498937,
			title : 'AsWiGeMdqx6pamRo',
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
			id : 4863313386958768936,
			access_hash : -5269714606939470252,
			title : 'rCuXx03vW1NJgBen',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 85,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '1g4VAIbmlafowYRK',
					reason : 'YLqi5yBwuWf3FScs',
					text : 'f9p0QTP4ent2Rds3',
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
				until_date : 21,
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
				until_date : 57,
			),
			participants_count : 51,
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
				color : 58,
				background_emoji_id : -6205267588410186510,
			),
			profile_color : $client->peerColor(
				color : 14,
				background_emoji_id : 492812846696251919,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 97,
			subscription_until_date : 54,
			bot_verification_icon : -4994786652372640101,
			send_paid_messages_stars : 4605107138983989188,
			linked_monoforum_id : 3845140699836924587,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 1800547260976104205,
			access_hash : 3230374930920121780,
			title : 'EraiuWG3SYzbZTL2',
			until_date : 15,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4109623116808931059,
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
			id : -2954450024208431518,
			access_hash : 8536590308581211271,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 92,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'G6RCH5gFEtioU0ub',
					reason : 'pAXqxvGNWEPJlVC2',
					text : 'm0UuPwA9EIfcbTL8',
				),
			),
			bot_inline_placeholder : 'aIt1cAb0zmPEWUKp',
			lang_code : 'Xing0j4fJZwmpFCL',
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
				max_id : 66,
			),
			color : $client->peerColor(
				color : 16,
				background_emoji_id : 1775904151185590618,
			),
			profile_color : $client->peerColor(
				color : 45,
				background_emoji_id : 3749522874321126490,
			),
			bot_active_users : 71,
			bot_verification_icon : 8107324883243367768,
			send_paid_messages_stars : -6684777664901000166,
		),
	),
);
```