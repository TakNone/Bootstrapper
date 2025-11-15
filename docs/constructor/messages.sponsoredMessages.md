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
	posts_between : 22,
	start_delay : 48,
	between_delay : 47,
	messages : array(
		$client->sponsoredMessage(
			recommended : true,
			can_report : true,
			random_id : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			url : 'https://docs.liveproto.dev',
			title : 'm7ijOatP9KGuClpB',
			message : '9bL6AQU7N4VifCDZ',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 75,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 71,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 1,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 69,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 7,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 15,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 15,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 27,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 83,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 3,
					language : 'HzL0eMYW5DOjiqnt',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 80,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 86,
					user_id : -2452556001190485378,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 62,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 73,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 73,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 36,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 69,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 44,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 25,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 70,
					document_id : -5892761821375838584,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 33,
				),
			),
			photo : $client->photoEmpty(
				id : -4567905725518903979,
			),
			media : $client->messageMediaEmpty(),
			color : $client->peerColor(
				color : 5,
				background_emoji_id : 5009865442707587013,
			),
			button_text : 'R1jaln5Z6JpFgTYO',
			sponsor_info : '5JEzRuHq7mANLihf',
			additional_info : 'msDUcYuFP5QJLTMw',
			min_display_duration : 86,
			max_display_duration : 50,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 8150475008986507804,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -8867506370032406252,
			title : 'lwx9sFNAjkMOfW0v',
			photo : $client->chatPhotoEmpty(),
			participants_count : 35,
			date : 96,
			version : 8,
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
				until_date : 84,
			),
		),
		$client->chatForbidden(
			id : 343749023322364324,
			title : 'mcoSVpqJCZkt9R2O',
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
			id : -5556400167497170153,
			access_hash : -6866373840902075663,
			title : '40hNowLWQ9KSpBIT',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 44,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6oN1LMZa94rgem0I',
					reason : 'SMvXhsoV7lqG0BrF',
					text : 'orcB9UgKzXenjGdh',
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
				until_date : 16,
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
				until_date : 55,
			),
			participants_count : 10,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 58,
			),
			color : $client->peerColor(
				color : 74,
				background_emoji_id : 1576441429096066717,
			),
			profile_color : $client->peerColor(
				color : 12,
				background_emoji_id : -5995093195512283050,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 11,
			subscription_until_date : 72,
			bot_verification_icon : 8060182280162156645,
			send_paid_messages_stars : 4898932869835031353,
			linked_monoforum_id : 5290188614069939969,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -2356287369027611056,
			access_hash : 7093163675550116708,
			title : 't0xJI7FrOWk9Y3dG',
			until_date : 51,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4352980752531390371,
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
			id : 1705314804256799767,
			access_hash : -6421151232258494221,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 24,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ViF2bc8HSdMPCKw6',
					reason : 'KGDS4BNC9MPZROv2',
					text : 'KgBdFYHCN5DekPIZ',
				),
			),
			bot_inline_placeholder : 'yaqML1FNDPm5r7Ot',
			lang_code : 'vLJ7kYxql0VCKhog',
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
				max_id : 64,
			),
			color : $client->peerColor(
				color : 81,
				background_emoji_id : -8921051238076538617,
			),
			profile_color : $client->peerColor(
				color : 41,
				background_emoji_id : 2155509775965633854,
			),
			bot_active_users : 11,
			bot_verification_icon : -9104411220855114284,
			send_paid_messages_stars : -4410319677835670465,
		),
	),
);
```