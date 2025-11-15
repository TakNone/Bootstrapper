# channels.adminLogResults

**Description** : *Admin log events*

**Layer** : 218

```tl
channels.adminLogResults#ed8af74d events:Vector<ChannelAdminLogEvent> chats:Vector<Chat> users:Vector<User> = channels.AdminLogResults;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>events</mark> | [`Vector<ChannelAdminLogEvent>`](type/ChannelAdminLogEvent) | Admin log events |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats mentioned in events |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in events |

---

## Type

[channels.AdminLogResults](type/channels.AdminLogResults)

---

## Example

```php
$channelsAdminLogResults = $client->channels->adminLogResults(
	events : array(
		$client->channelAdminLogEvent(
			id : -7234156838724657425,
			date : 64,
			user_id : 3901435735335407592,
			action : $client->channelAdminLogEventActionChangeTitle(
				prev_value : 'Y3NTlKE9msgDoxV1',
				new_value : 'XE4Dp6gwJdTKcYaZ',
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -4915666339085520130,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -9143092066037480201,
			title : 'wxgKsTlNYAIUCziS',
			photo : $client->chatPhotoEmpty(),
			participants_count : 100,
			date : 59,
			version : 40,
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
				until_date : 34,
			),
		),
		$client->chatForbidden(
			id : 5346498153861902821,
			title : 'AD6KmZHkgL9XSBi8',
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
			id : 3713752688588733660,
			access_hash : 4598654194507061133,
			title : 'xhpvwckHNWt6V1ql',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 78,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'o7KhevXzqSI2CNQr',
					reason : 'K5g28YEZcGlkBumN',
					text : 'et3ogT8R7164Uunv',
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
				until_date : 52,
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
				until_date : 59,
			),
			participants_count : 21,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 2,
			),
			color : $client->peerColor(
				color : 96,
				background_emoji_id : 2198184284713332746,
			),
			profile_color : $client->peerColor(
				color : 49,
				background_emoji_id : 2774372475348177917,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 81,
			subscription_until_date : 55,
			bot_verification_icon : 1093541136433514722,
			send_paid_messages_stars : 7400885430210815953,
			linked_monoforum_id : -5490572455412512099,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -6670176898588444271,
			access_hash : 8227673925006252224,
			title : 'OjqAQV5swB7G9CxT',
			until_date : 4,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1615001094127881298,
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
			id : -6740058392662465523,
			access_hash : -1407281060251697698,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 32,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '18uAFzC5aVkcImSn',
					reason : 'UBdJEoLPHyxlaFI5',
					text : 'KEjB9GucyQemFoAg',
				),
			),
			bot_inline_placeholder : 's1FYlWtUT7VMAwyN',
			lang_code : 'KwYU7aAQE6gmSTpG',
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
				max_id : 69,
			),
			color : $client->peerColor(
				color : 97,
				background_emoji_id : -992436557507939757,
			),
			profile_color : $client->peerColor(
				color : 54,
				background_emoji_id : -112612771932090252,
			),
			bot_active_users : 1,
			bot_verification_icon : 4460870434999512692,
			send_paid_messages_stars : 6429240821329161880,
		),
	),
);
```