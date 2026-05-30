# messages.sponsoredMessages

**Description** : *A set of sponsored messages associated to a channel*

**Layer** : 222

```tl
messages.sponsoredMessages#ffda656d flags:# posts_between:flags.0?int start_delay:flags.1?int between_delay:flags.2?int messages:Vector<SponsoredMessage> chats:Vector<Chat> users:Vector<User> = messages.SponsoredMessages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	posts_between : 42,
	start_delay : 0,
	between_delay : 60,
	messages : array(
		$client->sponsoredMessage(
			recommended : true,
			can_report : true,
			random_id : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			url : 'https://docs.liveproto.dev',
			title : 'u2bVdsWY3y7eqQwI',
			message : 'buqwrlTUQjLf4cdY',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 51,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 84,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 20,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 55,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 25,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 61,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 47,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 100,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 100,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 4,
					language : 'mUFLqrQzklS2NxGt',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 29,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 84,
					user_id : -5060058415359275579,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 30,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 63,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 84,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 14,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 56,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 82,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 79,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 0,
					document_id : -6088452108931674045,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 46,
				),
			),
			photo : $client->photoEmpty(
				id : 5972371187959775771,
			),
			media : $client->messageMediaEmpty(),
			color : $client->peerColor(
				color : 51,
				background_emoji_id : 4491905951666205439,
			),
			button_text : 'hmORT43z6ZqfN7ab',
			sponsor_info : 'nQMImyT3DqaucC2V',
			additional_info : 'HBj5CWyELpnAFKTf',
			min_display_duration : 92,
			max_display_duration : 27,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7958950002458429442,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4128551327585846853,
			title : 'rjGBdPtbUfxMhZgL',
			photo : $client->chatPhotoEmpty(),
			participants_count : 68,
			date : 63,
			version : 8,
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
			id : -7763123016775935905,
			title : 'waLbgAWmIli7VhEQ',
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
			id : -5957176222291644012,
			access_hash : -1941559375053155060,
			title : 'F2DZ1ML7uqQK3BUO',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 53,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'MI21PLkCJArDQiUb',
					reason : 'xjpAwi6foQzPgCq2',
					text : 'FcVNGst2Q9KE5Jke',
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
				until_date : 1,
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
				until_date : 83,
			),
			participants_count : 32,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 9,
			),
			color : $client->peerColor(
				color : 87,
				background_emoji_id : 8255357401551941444,
			),
			profile_color : $client->peerColor(
				color : 59,
				background_emoji_id : 3302613062633321874,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 97,
			subscription_until_date : 34,
			bot_verification_icon : -2619899883232455708,
			send_paid_messages_stars : 1554228365370251843,
			linked_monoforum_id : -1764162770954724732,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -6463922711761480279,
			access_hash : 4046754850273335341,
			title : 'WnUhHE6swN5LJrkS',
			until_date : 95,
		),
	),
	users : array(
		$client->userEmpty(
			id : 80096468877754808,
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
			id : 8248403634225807186,
			access_hash : 1505465879522311825,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 35,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'dapI1mYJB0OGi4ju',
					reason : 'nwvMCdKD6ZQkLF70',
					text : 'gekRGE2HXMDVYLSP',
				),
			),
			bot_inline_placeholder : 'FZcP61sugLoIeqQK',
			lang_code : '76vjtL4yUNZqgA8p',
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
				max_id : 78,
			),
			color : $client->peerColor(
				color : 10,
				background_emoji_id : 4889980451213829067,
			),
			profile_color : $client->peerColor(
				color : 79,
				background_emoji_id : -2300709658667061205,
			),
			bot_active_users : 0,
			bot_verification_icon : 4218785241109371051,
			send_paid_messages_stars : -6596683790469400950,
		),
	),
);
```