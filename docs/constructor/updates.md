# updates

**Description** : *Full constructor of updates*

**Layer** : 214

```tl
updates#74ae4240 updates:Vector<Update> users:Vector<User> chats:Vector<Chat> date:int seq:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in updates |
| <mark>date</mark> | [`int`](type/int) | Current date |
| <mark>seq</mark> | [`int`](type/int) | Total number of sent updates |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updates(
	updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 95,
				peer_id : $client->peerUser(...),
			),
			pts : 78,
			pts_count : 51,
		),
		$client->updateMessageID(
			id : 74,
			random_id : 118093298599233499,
		),
		$client->updateDeleteMessages(
			messages : array(95),
			pts : 67,
			pts_count : 71,
		),
		$client->updateUserTyping(
			user_id : 9126823292800930735,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 5049690896665816573,
			from_id : $client->peerUser(
				user_id : 7487825355221093336,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -5810839366685273841,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : 5807370300437613735,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -5191686878838639402,
			first_name : 'Tak',
			last_name : 'None',
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
		),
		$client->updateNewAuthorization(
			unconfirmed : true,
			hash : -6411788607003275482,
			date : 69,
			device : 'exOZFWDhCtMozBdU',
			location : 'DoXPQE3rM5igsH1I',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 7263044281851230716,
				chat_id : 11,
				date : 67,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(...),
			),
			qts : 94,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 50,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 59,
			),
			date : 39,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 91,
			max_date : 91,
			date : 79,
		),
		$client->updateChatParticipantAdd(
			chat_id : -1701874895969527368,
			user_id : -4768657204866254446,
			inviter_id : 8332826749481689852,
			date : 80,
			version : 75,
		),
		$client->updateChatParticipantDelete(
			chat_id : -4298787727120767028,
			user_id : 7669789562989902624,
			version : 57,
		),
		$client->updateDcOptions(
			dc_options : array(
				$client->dcOption(
					ipv6 : true,
					media_only : true,
					tcpo_only : true,
					cdn : true,
					static : true,
					this_port_only : true,
					id : 66,
					ip_address : '127.0.0.1',
					port : 77,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(...),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : true,
				mute_until : 36,
				ios_sound : $client->notificationSoundDefault(...),
				android_sound : $client->notificationSoundDefault(...),
				other_sound : $client->notificationSoundDefault(...),
				stories_muted : false,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(...),
				stories_android_sound : $client->notificationSoundDefault(...),
				stories_other_sound : $client->notificationSoundDefault(...),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 42,
			type : 'sjewtLIFMaJYqn6V',
			message : 'hdRqOAUGrf6kZY4t',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 37,
					length : 78,
				),
				$client->messageEntityMention(
					offset : 39,
					length : 19,
				),
				$client->messageEntityHashtag(
					offset : 69,
					length : 15,
				),
				$client->messageEntityBotCommand(
					offset : 69,
					length : 71,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 49,
				),
				$client->messageEntityEmail(
					offset : 14,
					length : 5,
				),
				$client->messageEntityBold(
					offset : 48,
					length : 70,
				),
				$client->messageEntityItalic(
					offset : 48,
					length : 41,
				),
				$client->messageEntityCode(
					offset : 64,
					length : 10,
				),
				$client->messageEntityPre(
					offset : 49,
					length : 46,
					language : 'sKTlIbqin5ShULyY',
				),
				$client->messageEntityTextUrl(
					offset : 57,
					length : 17,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 50,
					length : 96,
					user_id : -4967438510222064514,
				),
				$client->inputMessageEntityMentionName(
					offset : 81,
					length : 62,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 94,
					length : 4,
				),
				$client->messageEntityCashtag(
					offset : 16,
					length : 57,
				),
				$client->messageEntityUnderline(
					offset : 7,
					length : 79,
				),
				$client->messageEntityStrike(
					offset : 34,
					length : 81,
				),
				$client->messageEntityBankCard(
					offset : 17,
					length : 100,
				),
				$client->messageEntitySpoiler(
					offset : 8,
					length : 44,
				),
				$client->messageEntityCustomEmoji(
					offset : 58,
					length : 88,
					document_id : 2529075904282343828,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 88,
					length : 40,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(347276441272482040),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(2519289282485263778),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(4797335227232089577),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-5551546646694467201),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 4819654516344318451,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 7,
			peer : $client->peerUser(
				user_id : 7731502401900974875,
			),
			max_id : 30,
			still_unread_count : 7,
			pts : 33,
			pts_count : 62,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -8773826695307873884,
			),
			max_id : 73,
			pts : 3,
			pts_count : 26,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 1868306673199083601,
				url : 'https://docs.liveproto.dev',
			),
			pts : 18,
			pts_count : 29,
		),
		$client->updateReadMessagesContents(
			messages : array(88),
			pts : 54,
			pts_count : 71,
			date : 75,
		),
		$client->updateChannelTooLong(
			channel_id : 7147577497523740493,
			pts : 17,
		),
		$client->updateChannel(
			channel_id : 7411440934600511252,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 57,
				peer_id : $client->peerUser(...),
			),
			pts : 15,
			pts_count : 89,
		),
		$client->updateReadChannelInbox(
			folder_id : 34,
			channel_id : 7038624274878691676,
			max_id : 32,
			still_unread_count : 73,
			pts : 3,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 8209182319610899623,
			messages : array(96),
			pts : 1,
			pts_count : 86,
		),
		$client->updateChannelMessageViews(
			channel_id : -4627477135254874698,
			id : 33,
			views : 28,
		),
		$client->updateChatParticipantAdmin(
			chat_id : -1194963426680108792,
			user_id : 5433844989058462447,
			is_admin : false,
			version : 4,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(...),
				packs : array(
					$client->stickerPack(...),
				),
				keywords : array(
					$client->stickerKeyword(...),
				),
				documents : array(
					$client->documentEmpty(...),
					$client->document(...),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(-6040241126967605733),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 1164213633960321854,
			user_id : -551783459026059471,
			query : 'LkKFsvjuBbtpZdD9',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'cmXHVijMbnQTZ6kO',
		),
		$client->updateBotInlineSend(
			user_id : -9111409262382617916,
			query : 'c4XBR3gDGfmqI05P',
			geo : $client->geoPointEmpty(),
			id : 'Ys1ojIESifdH3tPO',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 37,
				id : -1621008970230243764,
				access_hash : 3766319459333847473,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 74,
				peer_id : $client->peerUser(...),
			),
			pts : 16,
			pts_count : 54,
		),
		$client->updateBotCallbackQuery(
			query_id : -2138900676039571108,
			user_id : 539360678952465571,
			peer : $client->peerUser(
				user_id : 1414735769272589934,
			),
			msg_id : 15,
			chat_instance : 6559238321796213543,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'Cz7wmJcOobNqKivn',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 45,
				peer_id : $client->peerUser(...),
			),
			pts : 58,
			pts_count : 76,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 5030622374725871221,
			user_id : 5003527742076068855,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 88,
				id : -4895307367808129816,
				access_hash : -7879220675874555389,
			),
			chat_instance : -6311040679688834840,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : '5RHWDATBhZmP9uUg',
		),
		$client->updateReadChannelOutbox(
			channel_id : 3572166401988593437,
			max_id : 7,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : -4524896399565140284,
			),
			top_msg_id : 12,
			saved_peer_id : $client->peerUser(
				user_id : 5598628108213410576,
			),
			draft : $client->draftMessageEmpty(
				date : 72,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -8358836122956097620,
			webpage : $client->webPageEmpty(
				id : 1518717871243911765,
				url : 'https://docs.liveproto.dev',
			),
			pts : 28,
			pts_count : 69,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 23,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 23,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 67,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'gNEAIkDW3iC54pUw',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -4959249598050750580,
			data : $client->dataJSON(
				data : '0KVOlTy1eMg27nGs',
			),
			timeout : 6,
		),
		$client->updateBotShippingQuery(
			query_id : -5518857766158106876,
			user_id : 3168472934692658391,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : '8XypOUk0CHj39et7',
				street_line2 : 'JN5BfSz4C6hi3ad8',
				city : 'c0FGCDs43UgJB8Ra',
				state : 'cudX8ZqQoRbx0myH',
				country_iso2 : 'nuU6S5qGsCX3wJvm',
				post_code : 'iwlkZsRC3QWyXpdn',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 7900367755351462393,
			user_id : 1385249698259196744,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'cCsTbdpOD9PoA8y6',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'b28MFmWvgVwufPja',
			currency : 'bOyU17QI3JCrxY0f',
			total_amount : -4428580670809492135,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -2109071834235464140,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'WlZDrckj8Jo79Rzp',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'M8SxrvbgB0XRLTzA',
				from_version : 87,
				version : 69,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 9043003350457309415,
			top_msg_id : 99,
			saved_peer_id : $client->peerUser(
				user_id : -5907693192293166414,
			),
			messages : array(61),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 8789123052552239917,
			available_min_id : 44,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : -8429394250016008403,
			),
		),
		$client->updateMessagePoll(
			poll_id : -4737601811195795992,
			poll : $client->poll(
				id : 6895969510845700555,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 31,
				close_date : 45,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 55,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'wLQqC1pVBJmZ9dGN',
				solution_entities : array(
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
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 8546524193114670603,
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
				until_date : 17,
			),
			version : 88,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 33,
				),
			),
			pts : 65,
			pts_count : 95,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -4968661201625991541,
			),
			settings : $client->peerSettings(
				report_spam : true,
				add_contact : true,
				block_contact : true,
				share_contact : true,
				need_contacts_exception : true,
				report_geo : true,
				autoarchived : true,
				invite_members : true,
				request_chat_broadcast : true,
				business_bot_paused : true,
				business_bot_can_reply : true,
				geo_distance : 100,
				request_chat_title : '1XjBV47ZvkO3Unct',
				request_chat_date : 62,
				business_bot_id : -4685358049927660228,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -515311878631803335,
				registration_month : 'N1hD4JzbP0CruEKY',
				phone_country : '+1234567890',
				name_change_date : 66,
				photo_change_date : 22,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 20,
					distance : 56,
				),
				$client->peerSelfLocated(
					expires : 99,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 81,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 89466768004812841,
			),
			messages : array(52),
			sent_messages : array(14),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -6791140025035778326,
				access_hash : -5234910600483291615,
				slug : 'bcfCOz24ygVa5QUW',
				title : 'L8pyJba6HquI2EN5',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'XdAqi56FIPDM1Vum',
				installs_count : 61,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 4067125655846956495,
			),
			msg_id : 77,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -5097863383267701699,
			peer : $client->peerUser(
				user_id : 4800496328504864970,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 40,
		),
		$client->updateDialogFilter(
			id : 60,
			filter : $client->dialogFilter(
				contacts : true,
				non_contacts : true,
				groups : true,
				broadcasts : true,
				bots : true,
				exclude_muted : true,
				exclude_read : true,
				exclude_archived : true,
				title_noanimate : true,
				id : 1,
				title : $client->textWithEntities(...),
				emoticon : 'YajF8vHIyqmntehl',
				color : 3,
				pinned_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				include_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				exclude_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(24),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -4952841800755743373,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -3852363480244432345,
			id : 41,
			forwards : 9,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 1997274656212053550,
			top_msg_id : 57,
			read_max_id : 67,
			broadcast_id : 5905494692091848448,
			broadcast_post : 17,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -1654279079262067386,
			top_msg_id : 26,
			read_max_id : 11,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -6476036855892298458,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -5903935224951363916,
			top_msg_id : 26,
			from_id : $client->peerUser(
				user_id : 3368317204929603486,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 204005642360187191,
			),
			messages : array(4),
			pts : 85,
			pts_count : 88,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 6229634903831883878,
			messages : array(63),
			pts : 88,
			pts_count : 1,
		),
		$client->updateChat(
			chat_id : 4828585646556387497,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -5157743433748186005,
				access_hash : 323190384971891236,
			),
			participants : array(
				$client->groupCallParticipant(
					muted : true,
					left : true,
					can_self_unmute : true,
					just_joined : true,
					versioned : true,
					min : true,
					muted_by_you : true,
					volume_by_admin : true,
					self : true,
					video_joined : true,
					peer : $client->peerUser(...),
					date : 55,
					active_date : 52,
					source : 95,
					volume : 32,
					about : 'y7Fr5PpjAUuZS3Bf',
					raise_hand_rating : 3824864103291563050,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 96,
		),
		$client->updateGroupCall(
			chat_id : 4382955290044816407,
			call : $client->groupCallDiscarded(
				id : -5510655913791776120,
				access_hash : 5263828301622604858,
				duration : 34,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -6734865871629787083,
			),
			ttl_period : 50,
		),
		$client->updateChatParticipant(
			chat_id : -3412748321687919136,
			date : 58,
			actor_id : -7093466281337573841,
			user_id : -5506181261752988317,
			prev_participant : $client->chatParticipant(
				user_id : 4622658172090995630,
				inviter_id : 1107698665734660186,
				date : 41,
			),
			new_participant : $client->chatParticipant(
				user_id : 6764583567393709356,
				inviter_id : 8103929556254275331,
				date : 68,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'noiHzGWwPM5UyALV',
				admin_id : 3696068545074220794,
				date : 36,
				start_date : 65,
				expire_date : 24,
				usage_limit : 100,
				usage : 14,
				requested : 32,
				subscription_expired : 57,
				title : 'mc5ENegrpQat4fCA',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 76,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -2334203152786805525,
			date : 70,
			actor_id : 1967983875119111856,
			user_id : -1127006173117065655,
			prev_participant : $client->channelParticipant(
				user_id : -3993390586999643276,
				date : 86,
				subscription_until_date : 8,
			),
			new_participant : $client->channelParticipant(
				user_id : -3202887516232355451,
				date : 55,
				subscription_until_date : 99,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'BZfQPCFmX83Od0Hc',
				admin_id : -5727973647550831264,
				date : 99,
				start_date : 18,
				expire_date : 1,
				usage_limit : 25,
				usage : 48,
				requested : 79,
				subscription_expired : 89,
				title : 'yMwViAnmkTIet6qG',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 56,
		),
		$client->updateBotStopped(
			user_id : 5050072928907601285,
			date : 57,
			stopped : false,
			qts : 70,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'V18xh6dpD5OkXBEK',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 1560507208703417664,
			),
			bot_id : -8651968146342251206,
			commands : array(
				$client->botCommand(
					command : 'OYXyNtZbRvJcjHrp',
					description : 'aD1PWJF2Se7Uum6c',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -3797330698725356058,
			),
			requests_pending : 24,
			recent_requesters : array(-3696739442996652202),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 4242009445095888816,
			),
			date : 11,
			user_id : -67548404417474962,
			about : 'u2YgPoyRan3K91vI',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'Y68KoBhCSgtJEeAa',
				admin_id : -8092249673730592699,
				date : 96,
				start_date : 82,
				expire_date : 50,
				usage_limit : 46,
				usage : 61,
				requested : 97,
				subscription_expired : 87,
				title : 'WyEPpmXz8R3Uexrg',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 80,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -845725586925655881,
			),
			msg_id : 66,
			top_msg_id : 46,
			saved_peer_id : $client->peerUser(
				user_id : -6804337653801494038,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : -6450076074256492991,
		),
		$client->updateBotMenuButton(
			bot_id : -1474877026191098442,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 2442169598834490664,
			),
			msg_id : 88,
			transcription_id : -7479073047032496064,
			text : 'HDZbBL4sgdCnEpkv',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 3583569377671107896,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -4722304276032529044,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 4877153024999131541,
			),
			msg_id : 83,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 10,
					h : 37,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 93,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : -5563928535266812453,
			topic_id : 8,
		),
		$client->updateChannelPinnedTopics(
			channel_id : 804473591325844536,
			order : array(57),
		),
		$client->updateUser(
			user_id : -6056246059328125598,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 1670527458092205178,
			),
			story : $client->storyItemDeleted(
				id : 5,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -4444187136967257482,
			),
			max_id : 66,
		),
		$client->updateStoryID(
			id : 5,
			random_id : -7413234322267143497,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 41,
				cooldown_until_date : 76,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -1779451732692463453,
			),
			story_id : 9,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 4644015749908390301,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'rSpQ3TNoyWHAPU40',
				user_id : 7968673640431975739,
				giveaway_msg_id : 29,
				date : 78,
				expires : 24,
				used_gift_slug : 'TyBXACE0FPQwWfJS',
				multiplier : 88,
				stars : -723085112086978599,
			),
			qts : 31,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -6629457148419194830,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 2709271954378047132,
			),
			wallpaper : $client->wallPaper(
				id : -6627544975525086200,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -4996396545858429591,
				slug : 'XowqgWfC4AZnNrLz',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 7249618926933836188,
			),
			msg_id : 43,
			date : 100,
			actor : $client->peerUser(
				user_id : -2430492437859214718,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'QhtHKN3ydf9DA0oq',
				),
				$client->reactionCustomEmoji(
					document_id : -8627933765805653334,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'KQkcLqJbP4NG71FI',
				),
				$client->reactionCustomEmoji(
					document_id : 397280932851093512,
				),
				$client->reactionPaid(),
			),
			qts : 2,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 1820471402916698744,
			),
			msg_id : 84,
			date : 61,
			reactions : array(
				$client->reactionCount(
					chosen_order : 93,
					reaction : $client->reactionEmpty(...),
					count : 84,
				),
			),
			qts : 82,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 36,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'wTXHSFYLa0WIn6QV',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 20,
					shortcut : 'gxNYE8z7M5S9CoPq',
					top_message : 88,
					count : 27,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 89,
				shortcut : 'dFn4Tw2QIAu8lfc5',
				top_message : 46,
				count : 59,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 69,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 94,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 16,
			messages : array(70),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : '6TlyJFo5s0SXZCNV',
				user_id : -1845848697173142220,
				dc_id : 75,
				date : 19,
				rights : $client->businessBotRights(...),
			),
			qts : 76,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'heQDNOjU3qsRbCr9',
			message : $client->messageEmpty(
				id : 56,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 20,
				peer_id : $client->peerUser(...),
			),
			qts : 42,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'WCdcFejpfLPyuhn3',
			message : $client->messageEmpty(
				id : 98,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 92,
				peer_id : $client->peerUser(...),
			),
			qts : 91,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'ZSDjW5yrsnlO91qd',
			peer : $client->peerUser(
				user_id : -5553753064277140407,
			),
			messages : array(83),
			qts : 99,
		),
		$client->updateNewStoryReaction(
			story_id : 90,
			peer : $client->peerUser(
				user_id : -4593506131669696565,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 2937446979278520470,
				nanos : 99,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -8585916561076682221,
			user_id : 7351666831977154098,
			connection_id : 'BIes81i9dN3wRrkg',
			message : $client->messageEmpty(
				id : 85,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 16,
				peer_id : $client->peerUser(...),
			),
			chat_instance : 7156662088514610856,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -3148129837665582972,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 13,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 4536790147446728106,
			payload : 'vugfyhi72nqYw5T9',
			qts : 67,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 89,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 1830087268727751211,
				access_hash : -4739351361225660635,
			),
			sub_chain_id : 32,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 57,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 4268096966929561759,
			saved_peer_id : $client->peerUser(
				user_id : -2386976659154826893,
			),
			read_max_id : 9,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 8252275195550990230,
			saved_peer_id : $client->peerUser(
				user_id : -5574779088620353725,
			),
			read_max_id : 33,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 1538671771330341539,
			saved_peer_id : $client->peerUser(
				user_id : -8422065036291179964,
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : 7614422916590786074,
			text : 'U1ELmIoK8punVTQA',
		),
		$client->updateBotSubscriptionExpire(
			user_id : -3123890993632324398,
			payload : 'i0NS2oaq4OludtYB',
			until_date : 56,
			qts : 82,
		),
		$client->updateUserPhoto(
			user_id : 4551991686096589072,
			date : 56,
			photo : $client->userProfilePhotoEmpty(),
			previous : true,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2335957023923353486,
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
			id : -6762884066514848070,
			access_hash : -6884997919381488754,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 86,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2onua5ydBOAJY0ft',
					reason : 'JWgw6ZbDhKExROC9',
					text : 'ODtwGClRA5xpQW2E',
				),
			),
			bot_inline_placeholder : 'MNVKpAjGTCEztsXW',
			lang_code : 'MujaqCWYZUcrP7AS',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 11,
			color : $client->peerColor(
				color : 70,
				background_emoji_id : -2335807350984843821,
			),
			profile_color : $client->peerColor(
				color : 77,
				background_emoji_id : -4553322799701577654,
			),
			bot_active_users : 70,
			bot_verification_icon : 1499844877617063977,
			send_paid_messages_stars : -3269495917628960555,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 2814297141665634214,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 3961633886383329882,
			title : '6YrR8s9NvVD3QqZn',
			photo : $client->chatPhotoEmpty(),
			participants_count : 1,
			date : 68,
			version : 55,
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
				until_date : 47,
			),
		),
		$client->chatForbidden(
			id : 1538968074433734277,
			title : 'CnRqJl8ATD147HPp',
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
			id : -9175927636936205454,
			access_hash : 1170311737532584679,
			title : 'kR8L3zjOfMJSCZng',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 99,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'RZEjO2q4Ue58Ptub',
					reason : 'cInwWV5hKrRQaHNL',
					text : 'HFGBeQoTACgXS7hD',
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
				until_date : 82,
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
			participants_count : 80,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 66,
			color : $client->peerColor(
				color : 12,
				background_emoji_id : 8001210312761578570,
			),
			profile_color : $client->peerColor(
				color : 37,
				background_emoji_id : 6698906402179239787,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 45,
			subscription_until_date : 23,
			bot_verification_icon : -6978451945845772084,
			send_paid_messages_stars : -8891832582172149853,
			linked_monoforum_id : -166194037323955284,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 7193610917931047876,
			access_hash : -1731036681044247670,
			title : 'vVw5048rzWOyEe9x',
			until_date : 90,
		),
	),
	date : 45,
	seq : 2,
);
```