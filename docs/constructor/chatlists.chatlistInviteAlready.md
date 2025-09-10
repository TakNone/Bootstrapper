# chatlists.chatlistInviteAlready

**Description** : *Updated info about a chat folder deep link &raquo; we already imported*

**Layer** : 214

```tl
chatlists.chatlistInviteAlready#fa87f659 filter_id:int missing_peers:Vector<Peer> already_peers:Vector<Peer> chats:Vector<Chat> users:Vector<User> = chatlists.ChatlistInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>filter_id</mark> | [`int`](type/int) | ID of the imported folder |
| <mark>missing_peers</mark> | [`Vector<Peer>`](type/Peer) | New peers to be imported |
| <mark>already_peers</mark> | [`Vector<Peer>`](type/Peer) | Peers that were already imported |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Related chat information |
| <mark>users</mark> | [`Vector<User>`](type/User) | Related user information |

---

## Type

[chatlists.ChatlistInvite](type/chatlists.ChatlistInvite)

---

## Example

```php
$chatlistsChatlistInvite = $client->chatlists->chatlistInviteAlready(
	filter_id : 51,
	missing_peers : array(
		$client->peerUser(
			user_id : -977510660408785565,
		),
		$client->peerChat(
			chat_id : 7143437629513635352,
		),
		$client->peerChannel(
			channel_id : 1772894815708163683,
		),
	),
	already_peers : array(
		$client->peerUser(
			user_id : 8055706916869293836,
		),
		$client->peerChat(
			chat_id : -3826857192462247722,
		),
		$client->peerChannel(
			channel_id : 3611192841602403446,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -480624925759711639,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -1529697223008258594,
			title : 'PD1rp78AkgVEn6Yc',
			photo : $client->chatPhotoEmpty(),
			participants_count : 87,
			date : 14,
			version : 16,
			migrated_to : $client->inputChannelEmpty(),
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
				until_date : 45,
			),
		),
		$client->chatForbidden(
			id : 1835581717434085912,
			title : 'jtQECB743UAczvdw',
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
			id : 6770349887180238249,
			access_hash : 4933069369816412556,
			title : 'gm3eqKA7X9hPNsv4',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 77,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tYO5pJ7Xf8CiuUel',
					reason : 'QFJjEhy8xY7DO94r',
					text : 'g74yMisktQpH6mdf',
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
				until_date : 57,
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
				until_date : 52,
			),
			participants_count : 94,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 64,
			color : $client->peerColor(
				color : 93,
				background_emoji_id : -5318111460088668218,
			),
			profile_color : $client->peerColor(
				color : 38,
				background_emoji_id : 7682421087895864772,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 70,
			subscription_until_date : 45,
			bot_verification_icon : -5397548601783147090,
			send_paid_messages_stars : 6093773159272058299,
			linked_monoforum_id : 5382482664849794251,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -8097351249077214211,
			access_hash : -6831355043596692402,
			title : 'D2qxdO1gGpXYfAwK',
			until_date : 46,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8858352150186349797,
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
			id : 7850490969631898399,
			access_hash : -56227251241504541,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 47,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'iG3VoR8Ocj2pdMqP',
					reason : '2dxjy4nviGZe56h0',
					text : 'i9kSYWhoj4a0fJBQ',
				),
			),
			bot_inline_placeholder : 'YaePtgsJ13M25idQ',
			lang_code : '2vQspyDAk3liKLSM',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 14,
			color : $client->peerColor(
				color : 21,
				background_emoji_id : -1125945512665150185,
			),
			profile_color : $client->peerColor(
				color : 72,
				background_emoji_id : -7652860408375242346,
			),
			bot_active_users : 2,
			bot_verification_icon : -6260926801786540020,
			send_paid_messages_stars : 6782216685685229863,
		),
	),
);
```