
# Methods

---

###### :link: [invokeAfterMsg](method/invokeAfterMsg)

  - *Invokes a query after successful completion of one of the previous queries*

---

###### :link: [invokeAfterMsgs](method/invokeAfterMsgs)

  - *Invokes a query after a successful completion of previous queries*

---

###### :link: [initConnection](method/initConnection)

  - *Initialize connection*

---

###### :link: [invokeWithLayer](method/invokeWithLayer)

  - *Invoke the specified query using the specified API layer*

---

###### :link: [invokeWithoutUpdates](method/invokeWithoutUpdates)

  - *Invoke a request without subscribing the used connection for updates (this is enabled by default for file queries)*

---

###### :link: [invokeWithMessagesRange](method/invokeWithMessagesRange)

  - *Invoke with the given message range*

---

###### :link: [invokeWithTakeout](method/invokeWithTakeout)

  - *Invoke a method within a takeout session, see here » for more info*

---

###### :link: [invokeWithBusinessConnection](method/invokeWithBusinessConnection)

  - *Invoke a method using a Telegram Business Bot connection, see here » for more info, including a list of the methods that can be wrapped in this constructor*

---

###### :link: [invokeWithGooglePlayIntegrity](method/invokeWithGooglePlayIntegrity)

  - *Official clients only, invoke with Google Play Integrity token*

---

###### :link: [invokeWithApnsSecret](method/invokeWithApnsSecret)

  - *Official clients only, invoke with Apple push verification*

---

###### :link: [invokeWithReCaptcha](method/invokeWithReCaptcha)

---

###### :link: [auth.sendCode](method/auth.sendCode)

  - *Send the verification code for login*

---

###### :link: [auth.signUp](method/auth.signUp)

  - *Registers a validated phone number in the system*

---

###### :link: [auth.signIn](method/auth.signIn)

  - *Signs in a user with a validated phone number*

---

###### :link: [auth.logOut](method/auth.logOut)

  - *Logs out the user*

---

###### :link: [auth.resetAuthorizations](method/auth.resetAuthorizations)

  - *Terminates all user's authorized sessions except for the current one*

---

###### :link: [auth.exportAuthorization](method/auth.exportAuthorization)

  - *Returns data for copying authorization to another data-center*

---

###### :link: [auth.importAuthorization](method/auth.importAuthorization)

  - *Logs in a user using a key transmitted from his native data-center*

---

###### :link: [auth.bindTempAuthKey](method/auth.bindTempAuthKey)

  - *Binds a temporary authorization key temp_auth_key_id to the permanent authorization key perm_auth_key_id. Each permanent key may only be bound to one temporary key at a time, binding a new temporary key overwrites the previous one*

---

###### :link: [auth.importBotAuthorization](method/auth.importBotAuthorization)

  - *Login as a bot*

---

###### :link: [auth.checkPassword](method/auth.checkPassword)

  - *Try logging to an account protected by a 2FA password*

---

###### :link: [auth.requestPasswordRecovery](method/auth.requestPasswordRecovery)

  - *Request recovery code of a 2FA password, only for accounts with a recovery email configured*

---

###### :link: [auth.recoverPassword](method/auth.recoverPassword)

  - *Reset the 2FA password using the recovery code sent using auth.requestPasswordRecovery*

---

###### :link: [auth.resendCode](method/auth.resendCode)

  - *Resend the login code via another medium, the phone code type is determined by the return value of the previous auth.sendCode/auth.resendCode: see login for more info*

---

###### :link: [auth.cancelCode](method/auth.cancelCode)

  - *Cancel the login verification code*

---

###### :link: [auth.dropTempAuthKeys](method/auth.dropTempAuthKeys)

  - *Delete all temporary authorization keys except for the ones specified*

---

###### :link: [auth.exportLoginToken](method/auth.exportLoginToken)

  - *Generate a login token, for login via QR code.
The generated login token should be encoded using base64url, then shown as a tg://login?token=base64encodedtoken deep link » in the QR code*

---

###### :link: [auth.importLoginToken](method/auth.importLoginToken)

  - *Login using a redirected login token, generated in case of DC mismatch during QR code login*

---

###### :link: [auth.acceptLoginToken](method/auth.acceptLoginToken)

  - *Accept QR code login token, logging in the app that generated it*

---

###### :link: [auth.checkRecoveryPassword](method/auth.checkRecoveryPassword)

  - *Check if the 2FA recovery code sent using auth.requestPasswordRecovery is valid, before passing it to auth.recoverPassword*

---

###### :link: [auth.importWebTokenAuthorization](method/auth.importWebTokenAuthorization)

  - *Login by importing an authorization token*

---

###### :link: [auth.requestFirebaseSms](method/auth.requestFirebaseSms)

  - *Request an SMS code via Firebase*

---

###### :link: [auth.resetLoginEmail](method/auth.resetLoginEmail)

  - *Reset the login email »*

---

###### :link: [auth.reportMissingCode](method/auth.reportMissingCode)

  - *Official apps only, reports that the SMS authentication code wasn't delivered*

---

###### :link: [account.registerDevice](method/account.registerDevice)

  - *Register device to receive PUSH notifications*

---

###### :link: [account.unregisterDevice](method/account.unregisterDevice)

  - *Deletes a device by its token, stops sending PUSH-notifications to it*

---

###### :link: [account.updateNotifySettings](method/account.updateNotifySettings)

  - *Edits notification settings from a given user/group, from all users/all groups*

---

###### :link: [account.getNotifySettings](method/account.getNotifySettings)

  - *Gets current notification settings for a given user/group, from all users/all groups*

---

###### :link: [account.resetNotifySettings](method/account.resetNotifySettings)

  - *Resets all notification settings from users and groups*

---

###### :link: [account.updateProfile](method/account.updateProfile)

  - *Updates user profile*

---

###### :link: [account.updateStatus](method/account.updateStatus)

  - *Updates online user status*

---

###### :link: [account.getWallPapers](method/account.getWallPapers)

  - *Returns a list of available wallpapers*

---

###### :link: [account.reportPeer](method/account.reportPeer)

  - *Report a peer for violation of telegram's Terms of Service*

---

###### :link: [account.checkUsername](method/account.checkUsername)

  - *Validates a username and checks availability*

---

###### :link: [account.updateUsername](method/account.updateUsername)

  - *Changes username for the current user*

---

###### :link: [account.getPrivacy](method/account.getPrivacy)

  - *Get privacy settings of current account*

---

###### :link: [account.setPrivacy](method/account.setPrivacy)

  - *Change privacy settings of current account*

---

###### :link: [account.deleteAccount](method/account.deleteAccount)

  - *Delete the user's account from the telegram servers*

---

###### :link: [account.getAccountTTL](method/account.getAccountTTL)

  - *Get days to live of account*

---

###### :link: [account.setAccountTTL](method/account.setAccountTTL)

  - *Set account self-destruction period*

---

###### :link: [account.sendChangePhoneCode](method/account.sendChangePhoneCode)

  - *Verify a new phone number to associate to the current account*

---

###### :link: [account.changePhone](method/account.changePhone)

  - *Change the phone number of the current account*

---

###### :link: [account.updateDeviceLocked](method/account.updateDeviceLocked)

  - *When client-side passcode lock feature is enabled, will not show message texts in incoming PUSH notifications*

---

###### :link: [account.getAuthorizations](method/account.getAuthorizations)

  - *Get logged-in sessions*

---

###### :link: [account.resetAuthorization](method/account.resetAuthorization)

  - *Log out an active authorized session by its hash*

---

###### :link: [account.getPassword](method/account.getPassword)

  - *Obtain configuration for two-factor authorization with password*

---

###### :link: [account.getPasswordSettings](method/account.getPasswordSettings)

  - *Get private info associated to the password info (recovery email, telegram passport info & so on)*

---

###### :link: [account.updatePasswordSettings](method/account.updatePasswordSettings)

  - *Set a new 2FA password*

---

###### :link: [account.sendConfirmPhoneCode](method/account.sendConfirmPhoneCode)

  - *Send confirmation code to cancel account deletion, for more info click here »*

---

###### :link: [account.confirmPhone](method/account.confirmPhone)

  - *Confirm a phone number to cancel account deletion, for more info click here »*

---

###### :link: [account.getTmpPassword](method/account.getTmpPassword)

  - *Get temporary payment password*

---

###### :link: [account.getWebAuthorizations](method/account.getWebAuthorizations)

  - *Get web login widget authorizations*

---

###### :link: [account.resetWebAuthorization](method/account.resetWebAuthorization)

  - *Log out an active web telegram login session*

---

###### :link: [account.resetWebAuthorizations](method/account.resetWebAuthorizations)

  - *Reset all active web telegram login sessions*

---

###### :link: [account.getAllSecureValues](method/account.getAllSecureValues)

  - *Get all saved Telegram Passport documents, for more info see the passport docs »*

---

###### :link: [account.getSecureValue](method/account.getSecureValue)

  - *Get saved Telegram Passport document, for more info see the passport docs »*

---

###### :link: [account.saveSecureValue](method/account.saveSecureValue)

  - *Securely save Telegram Passport document, for more info see the passport docs »*

---

###### :link: [account.deleteSecureValue](method/account.deleteSecureValue)

  - *Delete stored Telegram Passport documents, for more info see the passport docs »*

---

###### :link: [account.getAuthorizationForm](method/account.getAuthorizationForm)

  - *Returns a Telegram Passport authorization form for sharing data with a service*

---

###### :link: [account.acceptAuthorization](method/account.acceptAuthorization)

  - *Sends a Telegram Passport authorization form, effectively sharing data with the service*

---

###### :link: [account.sendVerifyPhoneCode](method/account.sendVerifyPhoneCode)

  - *Send the verification phone code for telegram passport*

---

###### :link: [account.verifyPhone](method/account.verifyPhone)

  - *Verify a phone number for telegram passport*

---

###### :link: [account.sendVerifyEmailCode](method/account.sendVerifyEmailCode)

  - *Send an email verification code*

---

###### :link: [account.verifyEmail](method/account.verifyEmail)

  - *Verify an email address*

---

###### :link: [account.initTakeoutSession](method/account.initTakeoutSession)

  - *Initialize a takeout session, see here » for more info*

---

###### :link: [account.finishTakeoutSession](method/account.finishTakeoutSession)

  - *Terminate a takeout session, see here » for more info*

---

###### :link: [account.confirmPasswordEmail](method/account.confirmPasswordEmail)

  - *Verify an email to use as 2FA recovery method*

---

###### :link: [account.resendPasswordEmail](method/account.resendPasswordEmail)

  - *Resend the code to verify an email to use as 2FA recovery method*

---

###### :link: [account.cancelPasswordEmail](method/account.cancelPasswordEmail)

  - *Cancel the code that was sent to verify an email to use as 2FA recovery method*

---

###### :link: [account.getContactSignUpNotification](method/account.getContactSignUpNotification)

  - *Whether the user will receive notifications when contacts sign up*

---

###### :link: [account.setContactSignUpNotification](method/account.setContactSignUpNotification)

  - *Toggle contact sign up notifications*

---

###### :link: [account.getNotifyExceptions](method/account.getNotifyExceptions)

  - *Returns list of chats with non-default notification settings*

---

###### :link: [account.getWallPaper](method/account.getWallPaper)

  - *Get info about a certain wallpaper*

---

###### :link: [account.uploadWallPaper](method/account.uploadWallPaper)

  - *Create and upload a new wallpaper*

---

###### :link: [account.saveWallPaper](method/account.saveWallPaper)

  - *Install/uninstall wallpaper*

---

###### :link: [account.installWallPaper](method/account.installWallPaper)

  - *Install wallpaper*

---

###### :link: [account.resetWallPapers](method/account.resetWallPapers)

  - *Delete all installed wallpapers, reverting to the default wallpaper set*

---

###### :link: [account.getAutoDownloadSettings](method/account.getAutoDownloadSettings)

  - *Get media autodownload settings*

---

###### :link: [account.saveAutoDownloadSettings](method/account.saveAutoDownloadSettings)

  - *Change media autodownload settings*

---

###### :link: [account.uploadTheme](method/account.uploadTheme)

  - *Upload theme*

---

###### :link: [account.createTheme](method/account.createTheme)

  - *Create a theme*

---

###### :link: [account.updateTheme](method/account.updateTheme)

  - *Update theme*

---

###### :link: [account.saveTheme](method/account.saveTheme)

  - *Save a theme*

---

###### :link: [account.installTheme](method/account.installTheme)

  - *Install a theme*

---

###### :link: [account.getTheme](method/account.getTheme)

  - *Get theme information*

---

###### :link: [account.getThemes](method/account.getThemes)

  - *Get installed themes*

---

###### :link: [account.setContentSettings](method/account.setContentSettings)

  - *Set sensitive content settings (for viewing or hiding NSFW content)*

---

###### :link: [account.getContentSettings](method/account.getContentSettings)

  - *Get sensitive content settings*

---

###### :link: [account.getMultiWallPapers](method/account.getMultiWallPapers)

  - *Get info about multiple wallpapers*

---

###### :link: [account.getGlobalPrivacySettings](method/account.getGlobalPrivacySettings)

  - *Get global privacy settings*

---

###### :link: [account.setGlobalPrivacySettings](method/account.setGlobalPrivacySettings)

  - *Set global privacy settings*

---

###### :link: [account.reportProfilePhoto](method/account.reportProfilePhoto)

  - *Report a profile photo of a dialog*

---

###### :link: [account.resetPassword](method/account.resetPassword)

  - *Initiate a 2FA password reset: can only be used if the user is already logged-in, see here for more info »*

---

###### :link: [account.declinePasswordReset](method/account.declinePasswordReset)

  - *Abort a pending 2FA password reset, see here for more info »*

---

###### :link: [account.getChatThemes](method/account.getChatThemes)

  - *Get all available chat themes »*

---

###### :link: [account.setAuthorizationTTL](method/account.setAuthorizationTTL)

  - *Set time-to-live of current session*

---

###### :link: [account.changeAuthorizationSettings](method/account.changeAuthorizationSettings)

  - *Change settings related to a session*

---

###### :link: [account.getSavedRingtones](method/account.getSavedRingtones)

  - *Fetch saved notification sounds*

---

###### :link: [account.saveRingtone](method/account.saveRingtone)

  - *Save or remove saved notification sound*

---

###### :link: [account.uploadRingtone](method/account.uploadRingtone)

  - *Upload notification sound, use account.saveRingtone to convert it and add it to the list of saved notification sounds*

---

###### :link: [account.updateEmojiStatus](method/account.updateEmojiStatus)

  - *Set an emoji status*

---

###### :link: [account.getDefaultEmojiStatuses](method/account.getDefaultEmojiStatuses)

  - *Get a list of default suggested emoji statuses*

---

###### :link: [account.getRecentEmojiStatuses](method/account.getRecentEmojiStatuses)

  - *Get recently used emoji statuses*

---

###### :link: [account.clearRecentEmojiStatuses](method/account.clearRecentEmojiStatuses)

  - *Clears list of recently used emoji statuses*

---

###### :link: [account.reorderUsernames](method/account.reorderUsernames)

  - *Reorder usernames associated with the currently logged-in user*

---

###### :link: [account.toggleUsername](method/account.toggleUsername)

  - *Activate or deactivate a purchased fragment.com username associated to the currently logged-in user*

---

###### :link: [account.getDefaultProfilePhotoEmojis](method/account.getDefaultProfilePhotoEmojis)

  - *Get a set of suggested custom emoji stickers that can be used as profile picture*

---

###### :link: [account.getDefaultGroupPhotoEmojis](method/account.getDefaultGroupPhotoEmojis)

  - *Get a set of suggested custom emoji stickers that can be used as group picture*

---

###### :link: [account.getAutoSaveSettings](method/account.getAutoSaveSettings)

  - *Get autosave settings*

---

###### :link: [account.saveAutoSaveSettings](method/account.saveAutoSaveSettings)

  - *Modify autosave settings*

---

###### :link: [account.deleteAutoSaveExceptions](method/account.deleteAutoSaveExceptions)

  - *Clear all peer-specific autosave settings*

---

###### :link: [account.invalidateSignInCodes](method/account.invalidateSignInCodes)

  - *Invalidate the specified login codes, see here » for more info*

---

###### :link: [account.updateColor](method/account.updateColor)

  - *Update the accent color and background custom emoji » of the current account*

---

###### :link: [account.getDefaultBackgroundEmojis](method/account.getDefaultBackgroundEmojis)

  - *Get a set of suggested custom emoji stickers that can be used in an accent color pattern*

---

###### :link: [account.getChannelDefaultEmojiStatuses](method/account.getChannelDefaultEmojiStatuses)

  - *Get a list of default suggested channel emoji statuses*

---

###### :link: [account.getChannelRestrictedStatusEmojis](method/account.getChannelRestrictedStatusEmojis)

  - *Returns fetch the full list of custom emoji IDs » that cannot be used in channel emoji statuses »*

---

###### :link: [account.updateBusinessWorkHours](method/account.updateBusinessWorkHours)

  - *Specify a set of Telegram Business opening hours.
This info will be contained in userFull.business_work_hours*

---

###### :link: [account.updateBusinessLocation](method/account.updateBusinessLocation)

  - *Businesses » may advertise their location using this method, see here » for more info*

---

###### :link: [account.updateBusinessGreetingMessage](method/account.updateBusinessGreetingMessage)

  - *Set a list of Telegram Business greeting messages*

---

###### :link: [account.updateBusinessAwayMessage](method/account.updateBusinessAwayMessage)

  - *Set a list of Telegram Business away messages*

---

###### :link: [account.updateConnectedBot](method/account.updateConnectedBot)

  - *Connect a business bot » to the current account, or to change the current connection settings*

---

###### :link: [account.getConnectedBots](method/account.getConnectedBots)

  - *List all currently connected business bots »*

---

###### :link: [account.getBotBusinessConnection](method/account.getBotBusinessConnection)

  - *Bots may invoke this method to re-fetch the updateBotBusinessConnect constructor associated with a specific business connection_id, see here » for more info on connected business bots.
This is needed for example for freshly logged in bots that are receiving some updateBotNewBusinessMessage, etc. updates because some users have already connected to the bot before it could login.
In this case, the bot is receiving messages from the business connection, but it hasn't cached the associated updateBotBusinessConnect with info about the connection (can it reply to messages? etc.) yet, and cannot receive the old ones because they were sent when the bot wasn't logged into the session yet.
This method can be used to fetch info about a not-yet-cached business connection, and should not be invoked if the info is already cached or to fetch changes, as eventual changes will automatically be sent as new updateBotBusinessConnect updates to the bot using the usual update delivery methods »*

---

###### :link: [account.updateBusinessIntro](method/account.updateBusinessIntro)

  - *Set or remove the Telegram Business introduction »*

---

###### :link: [account.toggleConnectedBotPaused](method/account.toggleConnectedBotPaused)

  - *Pause or unpause a specific chat, temporarily disconnecting it from all business bots »*

---

###### :link: [account.disablePeerConnectedBot](method/account.disablePeerConnectedBot)

  - *Permanently disconnect a specific chat from all business bots » (equivalent to specifying it in recipients.exclude_users during initial configuration with account.updateConnectedBot »); to reconnect of a chat disconnected using this method the user must reconnect the entire bot by invoking account.updateConnectedBot »*

---

###### :link: [account.updateBirthday](method/account.updateBirthday)

  - *Update our birthday, see here » for more info*

---

###### :link: [account.createBusinessChatLink](method/account.createBusinessChatLink)

  - *Create a business chat deep link »*

---

###### :link: [account.editBusinessChatLink](method/account.editBusinessChatLink)

  - *Edit a created business chat deep link »*

---

###### :link: [account.deleteBusinessChatLink](method/account.deleteBusinessChatLink)

  - *Delete a business chat deep link »*

---

###### :link: [account.getBusinessChatLinks](method/account.getBusinessChatLinks)

  - *List all created business chat deep links »*

---

###### :link: [account.resolveBusinessChatLink](method/account.resolveBusinessChatLink)

  - *Resolve a business chat deep link »*

---

###### :link: [account.updatePersonalChannel](method/account.updatePersonalChannel)

  - *Associate (or remove) a personal channel », that will be listed on our personal profile page »*

---

###### :link: [account.toggleSponsoredMessages](method/account.toggleSponsoredMessages)

  - *Disable or re-enable Telegram ads for the current Premium account*

---

###### :link: [account.getReactionsNotifySettings](method/account.getReactionsNotifySettings)

  - *Get the current reaction notification settings »*

---

###### :link: [account.setReactionsNotifySettings](method/account.setReactionsNotifySettings)

  - *Change the reaction notification settings »*

---

###### :link: [account.getCollectibleEmojiStatuses](method/account.getCollectibleEmojiStatuses)

---

###### :link: [account.getPaidMessagesRevenue](method/account.getPaidMessagesRevenue)

---

###### :link: [account.toggleNoPaidMessagesException](method/account.toggleNoPaidMessagesException)

---

###### :link: [users.getUsers](method/users.getUsers)

  - *Returns basic user info according to their identifiers*

---

###### :link: [users.getFullUser](method/users.getFullUser)

  - *Returns extended user info by ID*

---

###### :link: [users.setSecureValueErrors](method/users.setSecureValueErrors)

  - *Notify the user that the sent passport data contains some errors The user will not be able to re-submit their Passport data to you until the errors are fixed (the contents of the field for which you returned the error must change)*

---

###### :link: [users.getRequirementsToContact](method/users.getRequirementsToContact)

---

###### :link: [contacts.getContactIDs](method/contacts.getContactIDs)

  - *Get the telegram IDs of all contacts.
Returns an array of Telegram user IDs for all contacts (0 if a contact does not have an associated Telegram account or have hidden their account using privacy settings)*

---

###### :link: [contacts.getStatuses](method/contacts.getStatuses)

  - *Use this method to obtain the online statuses of all contacts with an accessible Telegram account*

---

###### :link: [contacts.getContacts](method/contacts.getContacts)

  - *Returns the current user's contact list*

---

###### :link: [contacts.importContacts](method/contacts.importContacts)

  - *Imports contacts: saves a full list on the server, adds already registered contacts to the contact list, returns added contacts and their info*

---

###### :link: [contacts.deleteContacts](method/contacts.deleteContacts)

  - *Deletes several contacts from the list*

---

###### :link: [contacts.deleteByPhones](method/contacts.deleteByPhones)

  - *Delete contacts by phone number*

---

###### :link: [contacts.block](method/contacts.block)

  - *Adds a peer to a blocklist, see here » for more info*

---

###### :link: [contacts.unblock](method/contacts.unblock)

  - *Deletes a peer from a blocklist, see here » for more info*

---

###### :link: [contacts.getBlocked](method/contacts.getBlocked)

  - *Returns the list of blocked users*

---

###### :link: [contacts.search](method/contacts.search)

  - *Returns users found by username substring*

---

###### :link: [contacts.resolveUsername](method/contacts.resolveUsername)

  - *Resolve a @username to get peer info*

---

###### :link: [contacts.getTopPeers](method/contacts.getTopPeers)

  - *Get most used peers*

---

###### :link: [contacts.resetTopPeerRating](method/contacts.resetTopPeerRating)

  - *Reset rating of top peer*

---

###### :link: [contacts.resetSaved](method/contacts.resetSaved)

  - *Removes all contacts without an associated Telegram account*

---

###### :link: [contacts.getSaved](method/contacts.getSaved)

  - *Get all contacts, requires a takeout session, see here » for more info*

---

###### :link: [contacts.toggleTopPeers](method/contacts.toggleTopPeers)

  - *Enable/disable top peers*

---

###### :link: [contacts.addContact](method/contacts.addContact)

  - *Add an existing telegram user as contact*

---

###### :link: [contacts.acceptContact](method/contacts.acceptContact)

  - *If the add contact action bar is active, add that user as contact*

---

###### :link: [contacts.getLocated](method/contacts.getLocated)

  - *Get users and geochats near you, see here » for more info*

---

###### :link: [contacts.blockFromReplies](method/contacts.blockFromReplies)

  - *Stop getting notifications about discussion replies of a certain user in @replies*

---

###### :link: [contacts.resolvePhone](method/contacts.resolvePhone)

  - *Resolve a phone number to get user info, if their privacy settings allow it*

---

###### :link: [contacts.exportContactToken](method/contacts.exportContactToken)

  - *Generates a temporary profile link for the currently logged-in user*

---

###### :link: [contacts.importContactToken](method/contacts.importContactToken)

  - *Obtain user info from a temporary profile link*

---

###### :link: [contacts.editCloseFriends](method/contacts.editCloseFriends)

  - *Edit the close friends list, see here » for more info*

---

###### :link: [contacts.setBlocked](method/contacts.setBlocked)

  - *Replace the contents of an entire blocklist, see here for more info »*

---

###### :link: [contacts.getBirthdays](method/contacts.getBirthdays)

  - *Fetch all users with birthdays that fall within +1/-1 days, relative to the current day: this method should be invoked by clients every 6-8 hours, and if the result is non-empty, it should be used to appropriately update locally cached birthday information in user.birthday*

---

###### :link: [contacts.getSponsoredPeers](method/contacts.getSponsoredPeers)

---

###### :link: [messages.getMessages](method/messages.getMessages)

  - *Returns the list of messages by their IDs*

---

###### :link: [messages.getDialogs](method/messages.getDialogs)

  - *Returns the current user dialog list*

---

###### :link: [messages.getHistory](method/messages.getHistory)

  - *Returns the conversation history with one interlocutor / within a chat*

---

###### :link: [messages.search](method/messages.search)

  - *Search for messages*

---

###### :link: [messages.readHistory](method/messages.readHistory)

  - *Marks message history as read*

---

###### :link: [messages.deleteHistory](method/messages.deleteHistory)

  - *Deletes communication history*

---

###### :link: [messages.deleteMessages](method/messages.deleteMessages)

  - *Deletes messages by their identifiers*

---

###### :link: [messages.receivedMessages](method/messages.receivedMessages)

  - *Confirms receipt of messages by a client, cancels PUSH-notification sending*

---

###### :link: [messages.setTyping](method/messages.setTyping)

  - *Sends a current user typing event (see SendMessageAction for all event types) to a conversation partner or group*

---

###### :link: [messages.sendMessage](method/messages.sendMessage)

  - *Sends a message to a chat*

---

###### :link: [messages.sendMedia](method/messages.sendMedia)

  - *Send a media*

---

###### :link: [messages.forwardMessages](method/messages.forwardMessages)

  - *Forwards messages by their IDs*

---

###### :link: [messages.reportSpam](method/messages.reportSpam)

  - *Report a new incoming chat for spam, if the peer settings of the chat allow us to do that*

---

###### :link: [messages.getPeerSettings](method/messages.getPeerSettings)

  - *Get peer settings*

---

###### :link: [messages.report](method/messages.report)

  - *Report a message in a chat for violation of telegram's Terms of Service*

---

###### :link: [messages.getChats](method/messages.getChats)

  - *Returns chat basic info on their IDs*

---

###### :link: [messages.getFullChat](method/messages.getFullChat)

  - *Get full info about a basic group*

---

###### :link: [messages.editChatTitle](method/messages.editChatTitle)

  - *Changes chat name and sends a service message on it*

---

###### :link: [messages.editChatPhoto](method/messages.editChatPhoto)

  - *Changes chat photo and sends a service message on it*

---

###### :link: [messages.addChatUser](method/messages.addChatUser)

  - *Adds a user to a chat and sends a service message on it*

---

###### :link: [messages.deleteChatUser](method/messages.deleteChatUser)

  - *Deletes a user from a chat and sends a service message on it*

---

###### :link: [messages.createChat](method/messages.createChat)

  - *Creates a new chat*

---

###### :link: [messages.getDhConfig](method/messages.getDhConfig)

  - *Returns configuration parameters for Diffie-Hellman key generation. Can also return a random sequence of bytes of required length*

---

###### :link: [messages.requestEncryption](method/messages.requestEncryption)

  - *Sends a request to start a secret chat to the user*

---

###### :link: [messages.acceptEncryption](method/messages.acceptEncryption)

  - *Confirms creation of a secret chat*

---

###### :link: [messages.discardEncryption](method/messages.discardEncryption)

  - *Cancels a request for creation and/or delete info on secret chat*

---

###### :link: [messages.setEncryptedTyping](method/messages.setEncryptedTyping)

  - *Send typing event by the current user to a secret chat*

---

###### :link: [messages.readEncryptedHistory](method/messages.readEncryptedHistory)

  - *Marks message history within a secret chat as read*

---

###### :link: [messages.sendEncrypted](method/messages.sendEncrypted)

  - *Sends a text message to a secret chat*

---

###### :link: [messages.sendEncryptedFile](method/messages.sendEncryptedFile)

  - *Sends a message with a file attachment to a secret chat*

---

###### :link: [messages.sendEncryptedService](method/messages.sendEncryptedService)

  - *Sends a service message to a secret chat*

---

###### :link: [messages.receivedQueue](method/messages.receivedQueue)

  - *Confirms receipt of messages in a secret chat by client, cancels push notifications.
The method returns a list of random_ids of messages for which push notifications were cancelled*

---

###### :link: [messages.reportEncryptedSpam](method/messages.reportEncryptedSpam)

  - *Report a secret chat for spam*

---

###### :link: [messages.readMessageContents](method/messages.readMessageContents)

  - *Notifies the sender about the recipient having listened a voice message or watched a video*

---

###### :link: [messages.getStickers](method/messages.getStickers)

  - *Get stickers by emoji*

---

###### :link: [messages.getAllStickers](method/messages.getAllStickers)

  - *Get all installed stickers*

---

###### :link: [messages.getWebPagePreview](method/messages.getWebPagePreview)

  - *Get preview of webpage*

---

###### :link: [messages.exportChatInvite](method/messages.exportChatInvite)

  - *Export an invite link for a chat*

---

###### :link: [messages.checkChatInvite](method/messages.checkChatInvite)

  - *Check the validity of a chat invite link and get basic info about it*

---

###### :link: [messages.importChatInvite](method/messages.importChatInvite)

  - *Import a chat invite and join a private chat/supergroup/channel*

---

###### :link: [messages.getStickerSet](method/messages.getStickerSet)

  - *Get info about a stickerset*

---

###### :link: [messages.installStickerSet](method/messages.installStickerSet)

  - *Install a stickerset*

---

###### :link: [messages.uninstallStickerSet](method/messages.uninstallStickerSet)

  - *Uninstall a stickerset*

---

###### :link: [messages.startBot](method/messages.startBot)

  - *Start a conversation with a bot using a deep linking parameter*

---

###### :link: [messages.getMessagesViews](method/messages.getMessagesViews)

  - *Get and increase the view counter of a message sent or forwarded from a channel*

---

###### :link: [messages.editChatAdmin](method/messages.editChatAdmin)

  - *Make a user admin in a basic group*

---

###### :link: [messages.migrateChat](method/messages.migrateChat)

  - *Turn a basic group into a supergroup*

---

###### :link: [messages.searchGlobal](method/messages.searchGlobal)

  - *Search for messages and peers globally*

---

###### :link: [messages.reorderStickerSets](method/messages.reorderStickerSets)

  - *Reorder installed stickersets*

---

###### :link: [messages.getDocumentByHash](method/messages.getDocumentByHash)

  - *Get a document by its SHA256 hash, mainly used for gifs*

---

###### :link: [messages.getSavedGifs](method/messages.getSavedGifs)

  - *Get saved GIFs*

---

###### :link: [messages.saveGif](method/messages.saveGif)

  - *Add GIF to saved gifs list*

---

###### :link: [messages.getInlineBotResults](method/messages.getInlineBotResults)

  - *Query an inline bot*

---

###### :link: [messages.setInlineBotResults](method/messages.setInlineBotResults)

  - *Answer an inline query, for bots only*

---

###### :link: [messages.sendInlineBotResult](method/messages.sendInlineBotResult)

  - *Send a result obtained using messages.getInlineBotResults*

---

###### :link: [messages.getMessageEditData](method/messages.getMessageEditData)

  - *Find out if a media message's caption can be edited*

---

###### :link: [messages.editMessage](method/messages.editMessage)

  - *Edit message*

---

###### :link: [messages.editInlineBotMessage](method/messages.editInlineBotMessage)

  - *Edit an inline bot message*

---

###### :link: [messages.getBotCallbackAnswer](method/messages.getBotCallbackAnswer)

  - *Press an inline callback button and get a callback answer from the bot*

---

###### :link: [messages.setBotCallbackAnswer](method/messages.setBotCallbackAnswer)

  - *Set the callback answer to a user button press (bots only)*

---

###### :link: [messages.getPeerDialogs](method/messages.getPeerDialogs)

  - *Get dialog info of specified peers*

---

###### :link: [messages.saveDraft](method/messages.saveDraft)

  - *Save a message draft associated to a chat*

---

###### :link: [messages.getAllDrafts](method/messages.getAllDrafts)

  - *Return all message drafts.
Returns all the latest updateDraftMessage updates related to all chats with drafts*

---

###### :link: [messages.getFeaturedStickers](method/messages.getFeaturedStickers)

  - *Get featured stickers*

---

###### :link: [messages.readFeaturedStickers](method/messages.readFeaturedStickers)

  - *Mark new featured stickers as read*

---

###### :link: [messages.getRecentStickers](method/messages.getRecentStickers)

  - *Get recent stickers*

---

###### :link: [messages.saveRecentSticker](method/messages.saveRecentSticker)

  - *Add/remove sticker from recent stickers list*

---

###### :link: [messages.clearRecentStickers](method/messages.clearRecentStickers)

  - *Clear recent stickers*

---

###### :link: [messages.getArchivedStickers](method/messages.getArchivedStickers)

  - *Get all archived stickers*

---

###### :link: [messages.getMaskStickers](method/messages.getMaskStickers)

  - *Get installed mask stickers*

---

###### :link: [messages.getAttachedStickers](method/messages.getAttachedStickers)

  - *Get stickers attached to a photo or video*

---

###### :link: [messages.setGameScore](method/messages.setGameScore)

  - *Use this method to set the score of the specified user in a game sent as a normal message (bots only)*

---

###### :link: [messages.setInlineGameScore](method/messages.setInlineGameScore)

  - *Use this method to set the score of the specified user in a game sent as an inline message (bots only)*

---

###### :link: [messages.getGameHighScores](method/messages.getGameHighScores)

  - *Get highscores of a game*

---

###### :link: [messages.getInlineGameHighScores](method/messages.getInlineGameHighScores)

  - *Get highscores of a game sent using an inline bot*

---

###### :link: [messages.getCommonChats](method/messages.getCommonChats)

  - *Get chats in common with a user*

---

###### :link: [messages.getWebPage](method/messages.getWebPage)

  - *Get instant view page*

---

###### :link: [messages.toggleDialogPin](method/messages.toggleDialogPin)

  - *Pin/unpin a dialog*

---

###### :link: [messages.reorderPinnedDialogs](method/messages.reorderPinnedDialogs)

  - *Reorder pinned dialogs*

---

###### :link: [messages.getPinnedDialogs](method/messages.getPinnedDialogs)

  - *Get pinned dialogs*

---

###### :link: [messages.setBotShippingResults](method/messages.setBotShippingResults)

  - *If you sent an invoice requesting a shipping address and the parameter is_flexible was specified, the bot will receive an updateBotShippingQuery update. Use this method to reply to shipping queries*

---

###### :link: [messages.setBotPrecheckoutResults](method/messages.setBotPrecheckoutResults)

  - *Once the user has confirmed their payment and shipping details, the bot receives an updateBotPrecheckoutQuery update.
Use this method to respond to such pre-checkout queries.
Note: Telegram must receive an answer within 10 seconds after the pre-checkout query was sent*

---

###### :link: [messages.uploadMedia](method/messages.uploadMedia)

  - *Upload a file and associate it to a chat (without actually sending it to the chat)*

---

###### :link: [messages.sendScreenshotNotification](method/messages.sendScreenshotNotification)

  - *Notify the other user in a private chat that a screenshot of the chat was taken*

---

###### :link: [messages.getFavedStickers](method/messages.getFavedStickers)

  - *Get faved stickers*

---

###### :link: [messages.faveSticker](method/messages.faveSticker)

  - *Mark or unmark a sticker as favorite*

---

###### :link: [messages.getUnreadMentions](method/messages.getUnreadMentions)

  - *Get unread messages where we were mentioned*

---

###### :link: [messages.readMentions](method/messages.readMentions)

  - *Mark mentions as read*

---

###### :link: [messages.getRecentLocations](method/messages.getRecentLocations)

  - *Get live location history of a certain user*

---

###### :link: [messages.sendMultiMedia](method/messages.sendMultiMedia)

  - *Send an album or grouped media*

---

###### :link: [messages.uploadEncryptedFile](method/messages.uploadEncryptedFile)

  - *Upload encrypted file and associate it to a secret chat*

---

###### :link: [messages.searchStickerSets](method/messages.searchStickerSets)

  - *Search for stickersets*

---

###### :link: [messages.getSplitRanges](method/messages.getSplitRanges)

  - *Get message ranges for saving the user's chat history*

---

###### :link: [messages.markDialogUnread](method/messages.markDialogUnread)

  - *Manually mark dialog as unread*

---

###### :link: [messages.getDialogUnreadMarks](method/messages.getDialogUnreadMarks)

  - *Get dialogs manually marked as unread*

---

###### :link: [messages.clearAllDrafts](method/messages.clearAllDrafts)

  - *Clear all drafts*

---

###### :link: [messages.updatePinnedMessage](method/messages.updatePinnedMessage)

  - *Pin a message*

---

###### :link: [messages.sendVote](method/messages.sendVote)

  - *Vote in a poll*

---

###### :link: [messages.getPollResults](method/messages.getPollResults)

  - *Get poll results*

---

###### :link: [messages.getOnlines](method/messages.getOnlines)

  - *Get count of online users in a chat*

---

###### :link: [messages.editChatAbout](method/messages.editChatAbout)

  - *Edit the description of a group/supergroup/channel*

---

###### :link: [messages.editChatDefaultBannedRights](method/messages.editChatDefaultBannedRights)

  - *Edit the default banned rights of a channel/supergroup/group*

---

###### :link: [messages.getEmojiKeywords](method/messages.getEmojiKeywords)

  - *Get localized emoji keywords »*

---

###### :link: [messages.getEmojiKeywordsDifference](method/messages.getEmojiKeywordsDifference)

  - *Get changed emoji keywords »*

---

###### :link: [messages.getEmojiKeywordsLanguages](method/messages.getEmojiKeywordsLanguages)

  - *Obtain a list of related languages that must be used when fetching emoji keyword lists »*

---

###### :link: [messages.getEmojiURL](method/messages.getEmojiURL)

  - *Returns an HTTP URL which can be used to automatically log in into translation platform and suggest new emoji keywords ». The URL will be valid for 30 seconds after generation*

---

###### :link: [messages.getSearchCounters](method/messages.getSearchCounters)

  - *Get the number of results that would be found by a messages.search call with the same parameters*

---

###### :link: [messages.requestUrlAuth](method/messages.requestUrlAuth)

  - *Get more info about a Seamless Telegram Login authorization request, for more info click here »*

---

###### :link: [messages.acceptUrlAuth](method/messages.acceptUrlAuth)

  - *Use this to accept a Seamless Telegram Login authorization request, for more info click here »*

---

###### :link: [messages.hidePeerSettingsBar](method/messages.hidePeerSettingsBar)

  - *Should be called after the user hides the report spam/add as contact bar of a new chat, effectively prevents the user from executing the actions specified in the action bar »*

---

###### :link: [messages.getScheduledHistory](method/messages.getScheduledHistory)

  - *Get scheduled messages*

---

###### :link: [messages.getScheduledMessages](method/messages.getScheduledMessages)

  - *Get scheduled messages*

---

###### :link: [messages.sendScheduledMessages](method/messages.sendScheduledMessages)

  - *Send scheduled messages right away*

---

###### :link: [messages.deleteScheduledMessages](method/messages.deleteScheduledMessages)

  - *Delete scheduled messages*

---

###### :link: [messages.getPollVotes](method/messages.getPollVotes)

  - *Get poll results for non-anonymous polls*

---

###### :link: [messages.toggleStickerSets](method/messages.toggleStickerSets)

  - *Apply changes to multiple stickersets*

---

###### :link: [messages.getDialogFilters](method/messages.getDialogFilters)

  - *Get folders*

---

###### :link: [messages.getSuggestedDialogFilters](method/messages.getSuggestedDialogFilters)

  - *Get suggested folders*

---

###### :link: [messages.updateDialogFilter](method/messages.updateDialogFilter)

  - *Update folder*

---

###### :link: [messages.updateDialogFiltersOrder](method/messages.updateDialogFiltersOrder)

  - *Reorder folders*

---

###### :link: [messages.getOldFeaturedStickers](method/messages.getOldFeaturedStickers)

  - *Method for fetching previously featured stickers*

---

###### :link: [messages.getReplies](method/messages.getReplies)

  - *Get messages in a reply thread*

---

###### :link: [messages.getDiscussionMessage](method/messages.getDiscussionMessage)

  - *Get discussion message from the associated discussion group of a channel to show it on top of the comment section, without actually joining the group*

---

###### :link: [messages.readDiscussion](method/messages.readDiscussion)

  - *Mark a thread as read*

---

###### :link: [messages.unpinAllMessages](method/messages.unpinAllMessages)

  - *Unpin all pinned messages*

---

###### :link: [messages.deleteChat](method/messages.deleteChat)

  - *Delete a chat*

---

###### :link: [messages.deletePhoneCallHistory](method/messages.deletePhoneCallHistory)

  - *Delete the entire phone call history*

---

###### :link: [messages.checkHistoryImport](method/messages.checkHistoryImport)

  - *Obtains information about a chat export file, generated by a foreign chat app, click here for more info about imported chats »*

---

###### :link: [messages.initHistoryImport](method/messages.initHistoryImport)

  - *Import chat history from a foreign chat app into a specific Telegram chat, click here for more info about imported chats »*

---

###### :link: [messages.uploadImportedMedia](method/messages.uploadImportedMedia)

  - *Upload a media file associated with an imported chat, click here for more info »*

---

###### :link: [messages.startHistoryImport](method/messages.startHistoryImport)

  - *Complete the history import process, importing all messages into the chat.
To be called only after initializing the import with messages.initHistoryImport and uploading all files using messages.uploadImportedMedia*

---

###### :link: [messages.getExportedChatInvites](method/messages.getExportedChatInvites)

  - *Get info about the chat invites of a specific chat*

---

###### :link: [messages.getExportedChatInvite](method/messages.getExportedChatInvite)

  - *Get info about a chat invite*

---

###### :link: [messages.editExportedChatInvite](method/messages.editExportedChatInvite)

  - *Edit an exported chat invite*

---

###### :link: [messages.deleteRevokedExportedChatInvites](method/messages.deleteRevokedExportedChatInvites)

  - *Delete all revoked chat invites*

---

###### :link: [messages.deleteExportedChatInvite](method/messages.deleteExportedChatInvite)

  - *Delete a chat invite*

---

###### :link: [messages.getAdminsWithInvites](method/messages.getAdminsWithInvites)

  - *Get info about chat invites generated by admins*

---

###### :link: [messages.getChatInviteImporters](method/messages.getChatInviteImporters)

  - *Get info about the users that joined the chat using a specific chat invite*

---

###### :link: [messages.setHistoryTTL](method/messages.setHistoryTTL)

  - *Set maximum Time-To-Live of all messages in the specified chat*

---

###### :link: [messages.checkHistoryImportPeer](method/messages.checkHistoryImportPeer)

  - *Check whether chat history exported from another chat app can be imported into a specific Telegram chat, click here for more info »*

---

###### :link: [messages.setChatTheme](method/messages.setChatTheme)

  - *Change the chat theme of a certain chat*

---

###### :link: [messages.getMessageReadParticipants](method/messages.getMessageReadParticipants)

  - *Get which users read a specific message: only available for groups and supergroups with less than chat_read_mark_size_threshold members, read receipts will be stored for chat_read_mark_expire_period seconds after the message was sent, see client configuration for more info »*

---

###### :link: [messages.getSearchResultsCalendar](method/messages.getSearchResultsCalendar)

  - *Returns information about the next messages of the specified type in the chat split by days*

---

###### :link: [messages.getSearchResultsPositions](method/messages.getSearchResultsPositions)

  - *Returns sparse positions of messages of the specified type in the chat to be used for shared media scroll implementation*

---

###### :link: [messages.hideChatJoinRequest](method/messages.hideChatJoinRequest)

  - *Dismiss or approve a chat join request related to a specific chat or channel*

---

###### :link: [messages.hideAllChatJoinRequests](method/messages.hideAllChatJoinRequests)

  - *Dismiss or approve all join requests related to a specific chat or channel*

---

###### :link: [messages.toggleNoForwards](method/messages.toggleNoForwards)

  - *Enable or disable content protection on a channel or chat*

---

###### :link: [messages.saveDefaultSendAs](method/messages.saveDefaultSendAs)

  - *Change the default peer that should be used when sending messages, reactions, poll votes to a specific group*

---

###### :link: [messages.sendReaction](method/messages.sendReaction)

  - *React to message*

---

###### :link: [messages.getMessagesReactions](method/messages.getMessagesReactions)

  - *Get message reactions »*

---

###### :link: [messages.getMessageReactionsList](method/messages.getMessageReactionsList)

  - *Get message reaction list, along with the sender of each reaction*

---

###### :link: [messages.setChatAvailableReactions](method/messages.setChatAvailableReactions)

  - *Change the set of message reactions » that can be used in a certain group, supergroup or channel*

---

###### :link: [messages.getAvailableReactions](method/messages.getAvailableReactions)

  - *Obtain available message reactions »*

---

###### :link: [messages.setDefaultReaction](method/messages.setDefaultReaction)

  - *Change default emoji reaction to use in the quick reaction menu: the value is synced across devices and can be fetched using help.getConfig, reactions_default field*

---

###### :link: [messages.translateText](method/messages.translateText)

  - *Translate a given text*

---

###### :link: [messages.getUnreadReactions](method/messages.getUnreadReactions)

  - *Get unread reactions to messages you sent*

---

###### :link: [messages.readReactions](method/messages.readReactions)

  - *Mark message reactions » as read*

---

###### :link: [messages.searchSentMedia](method/messages.searchSentMedia)

  - *View and search recently sent media.
This method does not support pagination*

---

###### :link: [messages.getAttachMenuBots](method/messages.getAttachMenuBots)

  - *Returns installed attachment menu bot mini apps »*

---

###### :link: [messages.getAttachMenuBot](method/messages.getAttachMenuBot)

  - *Returns attachment menu entry for a bot mini app that can be launched from the attachment menu »*

---

###### :link: [messages.toggleBotInAttachMenu](method/messages.toggleBotInAttachMenu)

  - *Enable or disable web bot attachment menu »*

---

###### :link: [messages.requestWebView](method/messages.requestWebView)

  - *Open a bot mini app, sending over user information after user confirmation*

---

###### :link: [messages.prolongWebView](method/messages.prolongWebView)

  - *Indicate to the server (from the user side) that the user is still using a web app*

---

###### :link: [messages.requestSimpleWebView](method/messages.requestSimpleWebView)

  - *Open a bot mini app*

---

###### :link: [messages.sendWebViewResultMessage](method/messages.sendWebViewResultMessage)

  - *Terminate webview interaction started with messages.requestWebView, sending the specified message to the chat on behalf of the user*

---

###### :link: [messages.sendWebViewData](method/messages.sendWebViewData)

  - *Used by the user to relay data from an opened reply keyboard bot mini app to the bot that owns it*

---

###### :link: [messages.transcribeAudio](method/messages.transcribeAudio)

  - *Transcribe voice message*

---

###### :link: [messages.rateTranscribedAudio](method/messages.rateTranscribedAudio)

  - *Rate transcribed voice message*

---

###### :link: [messages.getCustomEmojiDocuments](method/messages.getCustomEmojiDocuments)

  - *Fetch custom emoji stickers »*

---

###### :link: [messages.getEmojiStickers](method/messages.getEmojiStickers)

  - *Gets the list of currently installed custom emoji stickersets*

---

###### :link: [messages.getFeaturedEmojiStickers](method/messages.getFeaturedEmojiStickers)

  - *Gets featured custom emoji stickersets*

---

###### :link: [messages.reportReaction](method/messages.reportReaction)

  - *Report a message reaction*

---

###### :link: [messages.getTopReactions](method/messages.getTopReactions)

  - *Got popular message reactions*

---

###### :link: [messages.getRecentReactions](method/messages.getRecentReactions)

  - *Get recently used message reactions*

---

###### :link: [messages.clearRecentReactions](method/messages.clearRecentReactions)

  - *Clear recently used message reactions*

---

###### :link: [messages.getExtendedMedia](method/messages.getExtendedMedia)

  - *Fetch updated information about paid media, see here » for the full flow*

---

###### :link: [messages.setDefaultHistoryTTL](method/messages.setDefaultHistoryTTL)

  - *Changes the default value of the Time-To-Live setting, applied to all new chats*

---

###### :link: [messages.getDefaultHistoryTTL](method/messages.getDefaultHistoryTTL)

  - *Gets the default value of the Time-To-Live setting, applied to all new chats*

---

###### :link: [messages.sendBotRequestedPeer](method/messages.sendBotRequestedPeer)

  - *Send one or more chosen peers, as requested by a keyboardButtonRequestPeer button*

---

###### :link: [messages.getEmojiGroups](method/messages.getEmojiGroups)

  - *Represents a list of emoji categories*

---

###### :link: [messages.getEmojiStatusGroups](method/messages.getEmojiStatusGroups)

  - *Represents a list of emoji categories, to be used when selecting custom emojis to set as custom emoji status*

---

###### :link: [messages.getEmojiProfilePhotoGroups](method/messages.getEmojiProfilePhotoGroups)

  - *Represents a list of emoji categories, to be used when selecting custom emojis to set as profile picture*

---

###### :link: [messages.searchCustomEmoji](method/messages.searchCustomEmoji)

  - *Look for custom emojis associated to a UTF8 emoji*

---

###### :link: [messages.togglePeerTranslations](method/messages.togglePeerTranslations)

  - *Show or hide the real-time chat translation popup for a certain chat*

---

###### :link: [messages.getBotApp](method/messages.getBotApp)

  - *Obtain information about a direct link Mini App*

---

###### :link: [messages.requestAppWebView](method/messages.requestAppWebView)

  - *Open a bot mini app from a direct Mini App deep link, sending over user information after user confirmation*

---

###### :link: [messages.setChatWallPaper](method/messages.setChatWallPaper)

  - *Set a custom wallpaper » in a specific private chat with another user*

---

###### :link: [messages.searchEmojiStickerSets](method/messages.searchEmojiStickerSets)

  - *Search for custom emoji stickersets »*

---

###### :link: [messages.getSavedDialogs](method/messages.getSavedDialogs)

  - *Returns the current saved dialog list, see here » for more info*

---

###### :link: [messages.getSavedHistory](method/messages.getSavedHistory)

  - *Returns saved messages » forwarded from a specific peer*

---

###### :link: [messages.deleteSavedHistory](method/messages.deleteSavedHistory)

  - *Deletes messages forwarded from a specific peer to saved messages »*

---

###### :link: [messages.getPinnedSavedDialogs](method/messages.getPinnedSavedDialogs)

  - *Get pinned saved dialogs, see here » for more info*

---

###### :link: [messages.toggleSavedDialogPin](method/messages.toggleSavedDialogPin)

  - *Pin or unpin a saved message dialog »*

---

###### :link: [messages.reorderPinnedSavedDialogs](method/messages.reorderPinnedSavedDialogs)

  - *Reorder pinned saved message dialogs »*

---

###### :link: [messages.getSavedReactionTags](method/messages.getSavedReactionTags)

  - *Fetch the full list of saved message tags created by the user*

---

###### :link: [messages.updateSavedReactionTag](method/messages.updateSavedReactionTag)

  - *Update the description of a saved message tag »*

---

###### :link: [messages.getDefaultTagReactions](method/messages.getDefaultTagReactions)

  - *Fetch a default recommended list of saved message tag reactions*

---

###### :link: [messages.getOutboxReadDate](method/messages.getOutboxReadDate)

  - *Get the exact read date of one of our messages, sent to a private chat with another user*

---

###### :link: [messages.getQuickReplies](method/messages.getQuickReplies)

  - *Fetch basic info about all existing quick reply shortcuts*

---

###### :link: [messages.reorderQuickReplies](method/messages.reorderQuickReplies)

  - *Reorder quick reply shortcuts*

---

###### :link: [messages.checkQuickReplyShortcut](method/messages.checkQuickReplyShortcut)

  - *Before offering the user the choice to add a message to a quick reply shortcut, to make sure that none of the limits specified here » were reached*

---

###### :link: [messages.editQuickReplyShortcut](method/messages.editQuickReplyShortcut)

  - *Rename a quick reply shortcut.
This will emit an updateQuickReplies update to other logged-in sessions*

---

###### :link: [messages.deleteQuickReplyShortcut](method/messages.deleteQuickReplyShortcut)

  - *Completely delete a quick reply shortcut.
This will also emit an updateDeleteQuickReply update to other logged-in sessions (and no updateDeleteQuickReplyMessages updates, even if all the messages in the shortcuts are also deleted by this method)*

---

###### :link: [messages.getQuickReplyMessages](method/messages.getQuickReplyMessages)

  - *Fetch (a subset or all) messages in a quick reply shortcut »*

---

###### :link: [messages.sendQuickReplyMessages](method/messages.sendQuickReplyMessages)

  - *Send a quick reply shortcut »*

---

###### :link: [messages.deleteQuickReplyMessages](method/messages.deleteQuickReplyMessages)

  - *Delete one or more messages from a quick reply shortcut. This will also emit an updateDeleteQuickReplyMessages update*

---

###### :link: [messages.toggleDialogFilterTags](method/messages.toggleDialogFilterTags)

  - *Enable or disable folder tags »*

---

###### :link: [messages.getMyStickers](method/messages.getMyStickers)

  - *Fetch all stickersets » owned by the current user*

---

###### :link: [messages.getEmojiStickerGroups](method/messages.getEmojiStickerGroups)

  - *Represents a list of emoji categories, to be used when choosing a sticker*

---

###### :link: [messages.getAvailableEffects](method/messages.getAvailableEffects)

  - *Fetch the full list of usable animated message effects »*

---

###### :link: [messages.editFactCheck](method/messages.editFactCheck)

  - *Edit/create a fact-check on a message*

---

###### :link: [messages.deleteFactCheck](method/messages.deleteFactCheck)

  - *Delete a fact-check from a message*

---

###### :link: [messages.getFactCheck](method/messages.getFactCheck)

  - *Fetch one or more factchecks, see here » for the full flow*

---

###### :link: [messages.requestMainWebView](method/messages.requestMainWebView)

  - *Open a Main Mini App*

---

###### :link: [messages.sendPaidReaction](method/messages.sendPaidReaction)

  - *Sends one or more paid Telegram Star reactions », transferring Telegram Stars » to a channel's balance*

---

###### :link: [messages.togglePaidReactionPrivacy](method/messages.togglePaidReactionPrivacy)

  - *Changes the privacy of already sent paid reactions on a specific message*

---

###### :link: [messages.getPaidReactionPrivacy](method/messages.getPaidReactionPrivacy)

  - *Fetches an updatePaidReactionPrivacy update with the current default paid reaction privacy, see here » for more info*

---

###### :link: [messages.viewSponsoredMessage](method/messages.viewSponsoredMessage)

  - *Mark a specific sponsored message » as read*

---

###### :link: [messages.clickSponsoredMessage](method/messages.clickSponsoredMessage)

  - *Informs the server that the user has interacted with a sponsored message in one of the ways listed here »*

---

###### :link: [messages.reportSponsoredMessage](method/messages.reportSponsoredMessage)

  - *Report a sponsored message », see here » for more info on the full flow*

---

###### :link: [messages.getSponsoredMessages](method/messages.getSponsoredMessages)

  - *Get a list of sponsored messages for a peer, see here » for more info*

---

###### :link: [messages.savePreparedInlineMessage](method/messages.savePreparedInlineMessage)

  - *Save a prepared inline message, to be shared by the user of the mini app using a web_app_send_prepared_message event*

---

###### :link: [messages.getPreparedInlineMessage](method/messages.getPreparedInlineMessage)

  - *Obtain a prepared inline message generated by a mini app: invoked when handling web_app_send_prepared_message events*

---

###### :link: [messages.searchStickers](method/messages.searchStickers)

  - *Search for stickers using AI-powered keyword search*

---

###### :link: [messages.reportMessagesDelivery](method/messages.reportMessagesDelivery)

---

###### :link: [messages.getSavedDialogsByID](method/messages.getSavedDialogsByID)

---

###### :link: [messages.readSavedHistory](method/messages.readSavedHistory)

---

###### :link: [messages.toggleTodoCompleted](method/messages.toggleTodoCompleted)

---

###### :link: [messages.appendTodoList](method/messages.appendTodoList)

---

###### :link: [messages.toggleSuggestedPostApproval](method/messages.toggleSuggestedPostApproval)

---

###### :link: [updates.getState](method/updates.getState)

  - *Returns a current state of updates*

---

###### :link: [updates.getDifference](method/updates.getDifference)

  - *Get new updates*

---

###### :link: [updates.getChannelDifference](method/updates.getChannelDifference)

  - *Returns the difference between the current state of updates of a certain channel and transmitted*

---

###### :link: [photos.updateProfilePhoto](method/photos.updateProfilePhoto)

  - *Installs a previously uploaded photo as a profile photo*

---

###### :link: [photos.uploadProfilePhoto](method/photos.uploadProfilePhoto)

  - *Updates current user profile photo*

---

###### :link: [photos.deletePhotos](method/photos.deletePhotos)

  - *Deletes profile photos. The method returns a list of successfully deleted photo IDs*

---

###### :link: [photos.getUserPhotos](method/photos.getUserPhotos)

  - *Returns the list of user photos*

---

###### :link: [photos.uploadContactProfilePhoto](method/photos.uploadContactProfilePhoto)

  - *Upload a custom profile picture for a contact, or suggest a new profile picture to a contact*

---

###### :link: [upload.saveFilePart](method/upload.saveFilePart)

  - *Saves a part of file for further sending to one of the methods*

---

###### :link: [upload.getFile](method/upload.getFile)

  - *Returns content of a whole file or its part*

---

###### :link: [upload.saveBigFilePart](method/upload.saveBigFilePart)

  - *Saves a part of a large file (over 10 MB in size) to be later passed to one of the methods*

---

###### :link: [upload.getWebFile](method/upload.getWebFile)

  - *Returns content of a web file, by proxying the request through telegram, see the webfile docs for more info*

---

###### :link: [upload.getCdnFile](method/upload.getCdnFile)

  - *Download a CDN file*

---

###### :link: [upload.reuploadCdnFile](method/upload.reuploadCdnFile)

  - *Request a reupload of a certain file to a CDN DC*

---

###### :link: [upload.getCdnFileHashes](method/upload.getCdnFileHashes)

  - *Get SHA256 hashes for verifying downloaded CDN files*

---

###### :link: [upload.getFileHashes](method/upload.getFileHashes)

  - *Get SHA256 hashes for verifying downloaded files*

---

###### :link: [help.getConfig](method/help.getConfig)

  - *Returns current configuration, including data center configuration*

---

###### :link: [help.getNearestDc](method/help.getNearestDc)

  - *Returns info on data center nearest to the user*

---

###### :link: [help.getAppUpdate](method/help.getAppUpdate)

  - *Returns information on update availability for the current application*

---

###### :link: [help.getInviteText](method/help.getInviteText)

  - *Returns localized text of a text message with an invitation*

---

###### :link: [help.getSupport](method/help.getSupport)

  - *Returns the support user for the "ask a question" feature*

---

###### :link: [help.setBotUpdatesStatus](method/help.setBotUpdatesStatus)

  - *Informs the server about the number of pending bot updates if they haven't been processed for a long time; for bots only*

---

###### :link: [help.getCdnConfig](method/help.getCdnConfig)

  - *Get configuration for CDN file downloads*

---

###### :link: [help.getRecentMeUrls](method/help.getRecentMeUrls)

  - *Get recently used t.me links*

---

###### :link: [help.getTermsOfServiceUpdate](method/help.getTermsOfServiceUpdate)

  - *Look for updates of telegram's terms of service*

---

###### :link: [help.acceptTermsOfService](method/help.acceptTermsOfService)

  - *Accept the new terms of service*

---

###### :link: [help.getDeepLinkInfo](method/help.getDeepLinkInfo)

  - *Get info about an unsupported deep link, see here for more info »*

---

###### :link: [help.getAppConfig](method/help.getAppConfig)

  - *Get app-specific configuration, see client configuration for more info on the result*

---

###### :link: [help.saveAppLog](method/help.saveAppLog)

  - *Saves logs of application on the server*

---

###### :link: [help.getPassportConfig](method/help.getPassportConfig)

  - *Get passport configuration*

---

###### :link: [help.getSupportName](method/help.getSupportName)

  - *Get localized name of the telegram support user*

---

###### :link: [help.getUserInfo](method/help.getUserInfo)

  - *Can only be used by TSF members to obtain internal information*

---

###### :link: [help.editUserInfo](method/help.editUserInfo)

  - *Internal use*

---

###### :link: [help.getPromoData](method/help.getPromoData)

  - *Get MTProxy/Public Service Announcement information*

---

###### :link: [help.hidePromoData](method/help.hidePromoData)

  - *Hide MTProxy/Public Service Announcement information*

---

###### :link: [help.dismissSuggestion](method/help.dismissSuggestion)

  - *Dismiss a suggestion, see here for more info »*

---

###### :link: [help.getCountriesList](method/help.getCountriesList)

  - *Get name, ISO code, localized name and phone codes/patterns of all available countries*

---

###### :link: [help.getPremiumPromo](method/help.getPremiumPromo)

  - *Get Telegram Premium promotion information*

---

###### :link: [help.getPeerColors](method/help.getPeerColors)

  - *Get the set of accent color palettes » that can be used for message accents*

---

###### :link: [help.getPeerProfileColors](method/help.getPeerProfileColors)

  - *Get the set of accent color palettes » that can be used in profile page backgrounds*

---

###### :link: [help.getTimezonesList](method/help.getTimezonesList)

  - *Returns timezone information that may be used elsewhere in the API, such as to set Telegram Business opening hours »*

---

###### :link: [channels.readHistory](method/channels.readHistory)

  - *Mark channel/supergroup history as read*

---

###### :link: [channels.deleteMessages](method/channels.deleteMessages)

  - *Delete messages in a channel/supergroup*

---

###### :link: [channels.reportSpam](method/channels.reportSpam)

  - *Reports some messages from a user in a supergroup as spam; requires administrator rights in the supergroup*

---

###### :link: [channels.getMessages](method/channels.getMessages)

  - *Get channel/supergroup messages*

---

###### :link: [channels.getParticipants](method/channels.getParticipants)

  - *Get the participants of a supergroup/channel*

---

###### :link: [channels.getParticipant](method/channels.getParticipant)

  - *Get info about a channel/supergroup participant*

---

###### :link: [channels.getChannels](method/channels.getChannels)

  - *Get info about channels/supergroups*

---

###### :link: [channels.getFullChannel](method/channels.getFullChannel)

  - *Get full info about a supergroup, gigagroup or channel*

---

###### :link: [channels.createChannel](method/channels.createChannel)

  - *Create a supergroup/channel*

---

###### :link: [channels.editAdmin](method/channels.editAdmin)

  - *Modify the admin rights of a user in a supergroup/channel*

---

###### :link: [channels.editTitle](method/channels.editTitle)

  - *Edit the name of a channel/supergroup*

---

###### :link: [channels.editPhoto](method/channels.editPhoto)

  - *Change the photo of a channel/supergroup*

---

###### :link: [channels.checkUsername](method/channels.checkUsername)

  - *Check if a username is free and can be assigned to a channel/supergroup*

---

###### :link: [channels.updateUsername](method/channels.updateUsername)

  - *Change or remove the username of a supergroup/channel*

---

###### :link: [channels.joinChannel](method/channels.joinChannel)

  - *Join a channel/supergroup*

---

###### :link: [channels.leaveChannel](method/channels.leaveChannel)

  - *Leave a channel/supergroup*

---

###### :link: [channels.inviteToChannel](method/channels.inviteToChannel)

  - *Invite users to a channel/supergroup*

---

###### :link: [channels.deleteChannel](method/channels.deleteChannel)

  - *Delete a channel/supergroup*

---

###### :link: [channels.exportMessageLink](method/channels.exportMessageLink)

  - *Get link and embed info of a message in a channel/supergroup*

---

###### :link: [channels.toggleSignatures](method/channels.toggleSignatures)

  - *Enable/disable message signatures in channels*

---

###### :link: [channels.getAdminedPublicChannels](method/channels.getAdminedPublicChannels)

  - *Get channels/supergroups/geogroups we're admin in. Usually called when the user exceeds the limit for owned public channels/supergroups/geogroups, and the user is given the choice to remove one of his channels/supergroups/geogroups*

---

###### :link: [channels.editBanned](method/channels.editBanned)

  - *Ban/unban/kick a user in a supergroup/channel*

---

###### :link: [channels.getAdminLog](method/channels.getAdminLog)

  - *Get the admin log of a channel/supergroup*

---

###### :link: [channels.setStickers](method/channels.setStickers)

  - *Associate a stickerset to the supergroup*

---

###### :link: [channels.readMessageContents](method/channels.readMessageContents)

  - *Mark channel/supergroup message contents as read*

---

###### :link: [channels.deleteHistory](method/channels.deleteHistory)

  - *Delete the history of a supergroup*

---

###### :link: [channels.togglePreHistoryHidden](method/channels.togglePreHistoryHidden)

  - *Hide/unhide message history for new channel/supergroup users*

---

###### :link: [channels.getLeftChannels](method/channels.getLeftChannels)

  - *Get a list of channels/supergroups we left, requires a takeout session, see here » for more info*

---

###### :link: [channels.getGroupsForDiscussion](method/channels.getGroupsForDiscussion)

  - *Get all groups that can be used as discussion groups*

---

###### :link: [channels.setDiscussionGroup](method/channels.setDiscussionGroup)

  - *Associate a group to a channel as discussion group for that channel*

---

###### :link: [channels.editCreator](method/channels.editCreator)

  - *Transfer channel ownership*

---

###### :link: [channels.editLocation](method/channels.editLocation)

  - *Edit location of geogroup, see here » for more info on geogroups*

---

###### :link: [channels.toggleSlowMode](method/channels.toggleSlowMode)

  - *Toggle supergroup slow mode: if enabled, users will only be able to send one message every seconds seconds*

---

###### :link: [channels.getInactiveChannels](method/channels.getInactiveChannels)

  - *Get inactive channels and supergroups*

---

###### :link: [channels.convertToGigagroup](method/channels.convertToGigagroup)

  - *Convert a supergroup to a gigagroup, when requested by channel suggestions*

---

###### :link: [channels.getSendAs](method/channels.getSendAs)

  - *Obtains a list of peers that can be used to send messages in a specific group*

---

###### :link: [channels.deleteParticipantHistory](method/channels.deleteParticipantHistory)

  - *Delete all messages sent by a specific participant of a given supergroup*

---

###### :link: [channels.toggleJoinToSend](method/channels.toggleJoinToSend)

  - *Set whether all users should join a discussion group in order to comment on a post »*

---

###### :link: [channels.toggleJoinRequest](method/channels.toggleJoinRequest)

  - *Set whether all users should request admin approval to join the group »*

---

###### :link: [channels.reorderUsernames](method/channels.reorderUsernames)

  - *Reorder active usernames*

---

###### :link: [channels.toggleUsername](method/channels.toggleUsername)

  - *Activate or deactivate a purchased fragment.com username associated to a supergroup or channel we own*

---

###### :link: [channels.deactivateAllUsernames](method/channels.deactivateAllUsernames)

  - *Disable all purchased usernames of a supergroup or channel*

---

###### :link: [channels.toggleForum](method/channels.toggleForum)

  - *Enable or disable forum functionality in a supergroup*

---

###### :link: [channels.createForumTopic](method/channels.createForumTopic)

  - *Create a forum topic; requires manage_topics rights*

---

###### :link: [channels.getForumTopics](method/channels.getForumTopics)

  - *Get topics of a forum*

---

###### :link: [channels.getForumTopicsByID](method/channels.getForumTopicsByID)

  - *Get forum topics by their ID*

---

###### :link: [channels.editForumTopic](method/channels.editForumTopic)

  - *Edit forum topic; requires manage_topics rights*

---

###### :link: [channels.updatePinnedForumTopic](method/channels.updatePinnedForumTopic)

  - *Pin or unpin forum topics*

---

###### :link: [channels.deleteTopicHistory](method/channels.deleteTopicHistory)

  - *Delete message history of a forum topic*

---

###### :link: [channels.reorderPinnedForumTopics](method/channels.reorderPinnedForumTopics)

  - *Reorder pinned forum topics*

---

###### :link: [channels.toggleAntiSpam](method/channels.toggleAntiSpam)

  - *Enable or disable the native antispam system*

---

###### :link: [channels.reportAntiSpamFalsePositive](method/channels.reportAntiSpamFalsePositive)

  - *Report a native antispam false positive*

---

###### :link: [channels.toggleParticipantsHidden](method/channels.toggleParticipantsHidden)

  - *Hide or display the participants list in a supergroup*

---

###### :link: [channels.updateColor](method/channels.updateColor)

  - *Update the accent color and background custom emoji » of a channel*

---

###### :link: [channels.toggleViewForumAsMessages](method/channels.toggleViewForumAsMessages)

  - *Users may also choose to display messages from all topics of a forum as if they were sent to a normal group, using a "View as messages" setting in the local client: this setting only affects the current account, and is synced to other logged in sessions using this method*

---

###### :link: [channels.getChannelRecommendations](method/channels.getChannelRecommendations)

  - *Obtain a list of similarly themed public channels, selected based on similarities in their subscriber bases*

---

###### :link: [channels.updateEmojiStatus](method/channels.updateEmojiStatus)

  - *Set an emoji status for a channel or supergroup*

---

###### :link: [channels.setBoostsToUnblockRestrictions](method/channels.setBoostsToUnblockRestrictions)

  - *Admins with ban_users admin rights » may allow users that apply a certain number of booosts » to the group to bypass slow mode » and other » supergroup restrictions, see here » for more info*

---

###### :link: [channels.setEmojiStickers](method/channels.setEmojiStickers)

  - *Set a custom emoji stickerset for supergroups. Only usable after reaching at least the boost level » specified in the group_emoji_stickers_level_min » config parameter*

---

###### :link: [channels.restrictSponsoredMessages](method/channels.restrictSponsoredMessages)

  - *Disable ads on the specified channel, for all users*

---

###### :link: [channels.searchPosts](method/channels.searchPosts)

  - *Globally search for posts from public channels » (including those we aren't a member of) containing a specific hashtag*

---

###### :link: [channels.updatePaidMessagesPrice](method/channels.updatePaidMessagesPrice)

---

###### :link: [channels.toggleAutotranslation](method/channels.toggleAutotranslation)

---

###### :link: [channels.getMessageAuthor](method/channels.getMessageAuthor)

---

###### :link: [channels.checkSearchPostsFlood](method/channels.checkSearchPostsFlood)

---

###### :link: [bots.sendCustomRequest](method/bots.sendCustomRequest)

  - *Sends a custom request; for bots only*

---

###### :link: [bots.answerWebhookJSONQuery](method/bots.answerWebhookJSONQuery)

  - *Answers a custom query; for bots only*

---

###### :link: [bots.setBotCommands](method/bots.setBotCommands)

  - *Set bot command list*

---

###### :link: [bots.resetBotCommands](method/bots.resetBotCommands)

  - *Clear bot commands for the specified bot scope and language code*

---

###### :link: [bots.getBotCommands](method/bots.getBotCommands)

  - *Obtain a list of bot commands for the specified bot scope and language code*

---

###### :link: [bots.setBotMenuButton](method/bots.setBotMenuButton)

  - *Sets the menu button action » for a given user or for all users*

---

###### :link: [bots.getBotMenuButton](method/bots.getBotMenuButton)

  - *Gets the menu button action for a given user or for all users, previously set using bots.setBotMenuButton; users can see this information in the botInfo constructor*

---

###### :link: [bots.setBotBroadcastDefaultAdminRights](method/bots.setBotBroadcastDefaultAdminRights)

  - *Set the default suggested admin rights for bots being added as admins to channels, see here for more info on how to handle them »*

---

###### :link: [bots.setBotGroupDefaultAdminRights](method/bots.setBotGroupDefaultAdminRights)

  - *Set the default suggested admin rights for bots being added as admins to groups, see here for more info on how to handle them »*

---

###### :link: [bots.setBotInfo](method/bots.setBotInfo)

  - *Set localized name, about text and description of a bot (or of the current account, if called by a bot)*

---

###### :link: [bots.getBotInfo](method/bots.getBotInfo)

  - *Get localized name, about text and description of a bot (or of the current account, if called by a bot)*

---

###### :link: [bots.reorderUsernames](method/bots.reorderUsernames)

  - *Reorder usernames associated to a bot we own*

---

###### :link: [bots.toggleUsername](method/bots.toggleUsername)

  - *Activate or deactivate a purchased fragment.com username associated to a bot we own*

---

###### :link: [bots.canSendMessage](method/bots.canSendMessage)

  - *Check whether the specified bot can send us messages*

---

###### :link: [bots.allowSendMessage](method/bots.allowSendMessage)

  - *Allow the specified bot to send us messages*

---

###### :link: [bots.invokeWebViewCustomMethod](method/bots.invokeWebViewCustomMethod)

  - *Send a custom request from a mini bot app, triggered by a web_app_invoke_custom_method event »*

---

###### :link: [bots.getPopularAppBots](method/bots.getPopularAppBots)

  - *Fetch popular Main Mini Apps, to be used in the apps tab of global search »*

---

###### :link: [bots.addPreviewMedia](method/bots.addPreviewMedia)

  - *Add a main mini app preview, see here » for more info*

---

###### :link: [bots.editPreviewMedia](method/bots.editPreviewMedia)

  - *Edit a main mini app preview, see here » for more info*

---

###### :link: [bots.deletePreviewMedia](method/bots.deletePreviewMedia)

  - *Delete a main mini app preview, see here » for more info*

---

###### :link: [bots.reorderPreviewMedias](method/bots.reorderPreviewMedias)

  - *Reorder a main mini app previews, see here » for more info*

---

###### :link: [bots.getPreviewInfo](method/bots.getPreviewInfo)

  - *Bot owners only, fetch main mini app preview information, see here » for more info*

---

###### :link: [bots.getPreviewMedias](method/bots.getPreviewMedias)

  - *Fetch main mini app previews, see here » for more info*

---

###### :link: [bots.updateUserEmojiStatus](method/bots.updateUserEmojiStatus)

  - *Change the emoji status of a user (invoked by bots, see here » for more info on the full flow)*

---

###### :link: [bots.toggleUserEmojiStatusPermission](method/bots.toggleUserEmojiStatusPermission)

  - *Allow or prevent a bot from changing our emoji status »*

---

###### :link: [bots.checkDownloadFileParams](method/bots.checkDownloadFileParams)

  - *Check if a mini app can request the download of a specific file: called when handling web_app_request_file_download events »*

---

###### :link: [bots.getAdminedBots](method/bots.getAdminedBots)

  - *Get a list of bots owned by the current user*

---

###### :link: [bots.updateStarRefProgram](method/bots.updateStarRefProgram)

  - *Create, edit or delete the affiliate program of a bot we own*

---

###### :link: [bots.setCustomVerification](method/bots.setCustomVerification)

---

###### :link: [bots.getBotRecommendations](method/bots.getBotRecommendations)

---

###### :link: [payments.getPaymentForm](method/payments.getPaymentForm)

  - *Get a payment form*

---

###### :link: [payments.getPaymentReceipt](method/payments.getPaymentReceipt)

  - *Get payment receipt*

---

###### :link: [payments.validateRequestedInfo](method/payments.validateRequestedInfo)

  - *Submit requested order information for validation*

---

###### :link: [payments.sendPaymentForm](method/payments.sendPaymentForm)

  - *Send compiled payment form*

---

###### :link: [payments.getSavedInfo](method/payments.getSavedInfo)

  - *Get saved payment information*

---

###### :link: [payments.clearSavedInfo](method/payments.clearSavedInfo)

  - *Clear saved payment information*

---

###### :link: [payments.getBankCardData](method/payments.getBankCardData)

  - *Get info about a credit card*

---

###### :link: [payments.exportInvoice](method/payments.exportInvoice)

  - *Generate an invoice deep link*

---

###### :link: [payments.assignAppStoreTransaction](method/payments.assignAppStoreTransaction)

  - *Informs server about a purchase made through the App Store: for official applications only*

---

###### :link: [payments.assignPlayMarketTransaction](method/payments.assignPlayMarketTransaction)

  - *Informs server about a purchase made through the Play Store: for official applications only*

---

###### :link: [payments.getPremiumGiftCodeOptions](method/payments.getPremiumGiftCodeOptions)

  - *Obtain a list of Telegram Premium giveaway/gift code » options*

---

###### :link: [payments.checkGiftCode](method/payments.checkGiftCode)

  - *Obtain information about a Telegram Premium giftcode »*

---

###### :link: [payments.applyGiftCode](method/payments.applyGiftCode)

  - *Apply a Telegram Premium giftcode »*

---

###### :link: [payments.getGiveawayInfo](method/payments.getGiveawayInfo)

  - *Obtain information about a Telegram Premium giveaway »*

---

###### :link: [payments.launchPrepaidGiveaway](method/payments.launchPrepaidGiveaway)

  - *Launch a prepaid giveaway »*

---

###### :link: [payments.getStarsTopupOptions](method/payments.getStarsTopupOptions)

  - *Obtain a list of Telegram Stars topup options » as starsTopupOption constructors*

---

###### :link: [payments.getStarsStatus](method/payments.getStarsStatus)

  - *Get the current Telegram Stars balance of the current account (with peer=inputPeerSelf), or the stars balance of the bot specified in peer*

---

###### :link: [payments.getStarsTransactions](method/payments.getStarsTransactions)

  - *Fetch Telegram Stars transactions*

---

###### :link: [payments.sendStarsForm](method/payments.sendStarsForm)

  - *Make a payment using Telegram Stars, see here » for more info*

---

###### :link: [payments.refundStarsCharge](method/payments.refundStarsCharge)

  - *Refund a Telegram Stars transaction, see here » for more info*

---

###### :link: [payments.getStarsRevenueStats](method/payments.getStarsRevenueStats)

  - *Get Telegram Star revenue statistics »*

---

###### :link: [payments.getStarsRevenueWithdrawalUrl](method/payments.getStarsRevenueWithdrawalUrl)

  - *Withdraw funds from a channel or bot's star balance »*

---

###### :link: [payments.getStarsRevenueAdsAccountUrl](method/payments.getStarsRevenueAdsAccountUrl)

  - *Returns a URL for a Telegram Ad platform account that can be used to set up advertisements for channel/bot in peer, paid using the Telegram Stars owned by the specified peer, see here » for more info*

---

###### :link: [payments.getStarsTransactionsByID](method/payments.getStarsTransactionsByID)

  - *Obtain info about Telegram Star transactions » using specific transaction IDs*

---

###### :link: [payments.getStarsGiftOptions](method/payments.getStarsGiftOptions)

  - *Obtain a list of Telegram Stars gift options » as starsGiftOption constructors*

---

###### :link: [payments.getStarsSubscriptions](method/payments.getStarsSubscriptions)

  - *Obtain a list of active, expired or cancelled Telegram Star subscriptions »*

---

###### :link: [payments.changeStarsSubscription](method/payments.changeStarsSubscription)

  - *Activate or deactivate a Telegram Star subscription »*

---

###### :link: [payments.fulfillStarsSubscription](method/payments.fulfillStarsSubscription)

  - *Re-join a private channel associated to an active Telegram Star subscription »*

---

###### :link: [payments.getStarsGiveawayOptions](method/payments.getStarsGiveawayOptions)

  - *Fetch a list of star giveaway options »*

---

###### :link: [payments.getStarGifts](method/payments.getStarGifts)

  - *Get a list of available gifts, see here » for more info*

---

###### :link: [payments.saveStarGift](method/payments.saveStarGift)

  - *Display or remove a received gift » from our profile*

---

###### :link: [payments.convertStarGift](method/payments.convertStarGift)

  - *Convert a received gift » into Telegram Stars: this will permanently destroy the gift, converting it into starGift.convert_stars Telegram Stars, added to the user's balance*

---

###### :link: [payments.botCancelStarsSubscription](method/payments.botCancelStarsSubscription)

  - *Cancel a bot subscription*

---

###### :link: [payments.getConnectedStarRefBots](method/payments.getConnectedStarRefBots)

  - *Fetch all affiliations we have created for a certain peer*

---

###### :link: [payments.getConnectedStarRefBot](method/payments.getConnectedStarRefBot)

  - *Fetch info about a specific bot affiliation »*

---

###### :link: [payments.getSuggestedStarRefBots](method/payments.getSuggestedStarRefBots)

  - *Obtain a list of suggested mini apps with available affiliate programs*

---

###### :link: [payments.connectStarRefBot](method/payments.connectStarRefBot)

  - *Join a bot's affiliate program, becoming an affiliate »*

---

###### :link: [payments.editConnectedStarRefBot](method/payments.editConnectedStarRefBot)

  - *Leave a bot's affiliate program »*

---

###### :link: [payments.getStarGiftUpgradePreview](method/payments.getStarGiftUpgradePreview)

---

###### :link: [payments.upgradeStarGift](method/payments.upgradeStarGift)

---

###### :link: [payments.transferStarGift](method/payments.transferStarGift)

---

###### :link: [payments.getUniqueStarGift](method/payments.getUniqueStarGift)

---

###### :link: [payments.getSavedStarGifts](method/payments.getSavedStarGifts)

---

###### :link: [payments.getSavedStarGift](method/payments.getSavedStarGift)

---

###### :link: [payments.getStarGiftWithdrawalUrl](method/payments.getStarGiftWithdrawalUrl)

---

###### :link: [payments.toggleChatStarGiftNotifications](method/payments.toggleChatStarGiftNotifications)

---

###### :link: [payments.toggleStarGiftsPinnedToTop](method/payments.toggleStarGiftsPinnedToTop)

---

###### :link: [payments.canPurchaseStore](method/payments.canPurchaseStore)

---

###### :link: [payments.getResaleStarGifts](method/payments.getResaleStarGifts)

---

###### :link: [payments.updateStarGiftPrice](method/payments.updateStarGiftPrice)

---

###### :link: [payments.createStarGiftCollection](method/payments.createStarGiftCollection)

---

###### :link: [payments.updateStarGiftCollection](method/payments.updateStarGiftCollection)

---

###### :link: [payments.reorderStarGiftCollections](method/payments.reorderStarGiftCollections)

---

###### :link: [payments.deleteStarGiftCollection](method/payments.deleteStarGiftCollection)

---

###### :link: [payments.getStarGiftCollections](method/payments.getStarGiftCollections)

---

###### :link: [stickers.createStickerSet](method/stickers.createStickerSet)

  - *Create a stickerset*

---

###### :link: [stickers.removeStickerFromSet](method/stickers.removeStickerFromSet)

  - *Remove a sticker from the set where it belongs. The sticker set must have been created by the current user/bot*

---

###### :link: [stickers.changeStickerPosition](method/stickers.changeStickerPosition)

  - *Changes the absolute position of a sticker in the set to which it belongs. The sticker set must have been created by the current user/bot*

---

###### :link: [stickers.addStickerToSet](method/stickers.addStickerToSet)

  - *Add a sticker to a stickerset. The sticker set must have been created by the current user/bot*

---

###### :link: [stickers.setStickerSetThumb](method/stickers.setStickerSetThumb)

  - *Set stickerset thumbnail*

---

###### :link: [stickers.checkShortName](method/stickers.checkShortName)

  - *Check whether the given short name is available*

---

###### :link: [stickers.suggestShortName](method/stickers.suggestShortName)

  - *Suggests a short name for a given stickerpack name*

---

###### :link: [stickers.changeSticker](method/stickers.changeSticker)

  - *Update the keywords, emojis or mask coordinates of a sticker*

---

###### :link: [stickers.renameStickerSet](method/stickers.renameStickerSet)

  - *Renames a stickerset*

---

###### :link: [stickers.deleteStickerSet](method/stickers.deleteStickerSet)

  - *Deletes a stickerset we created*

---

###### :link: [stickers.replaceSticker](method/stickers.replaceSticker)

  - *Replace a sticker in a stickerset »*

---

###### :link: [phone.getCallConfig](method/phone.getCallConfig)

  - *Get phone call configuration to be passed to libtgvoip's shared config*

---

###### :link: [phone.requestCall](method/phone.requestCall)

  - *Start a telegram phone call*

---

###### :link: [phone.acceptCall](method/phone.acceptCall)

  - *Accept incoming call*

---

###### :link: [phone.confirmCall](method/phone.confirmCall)

  - *Complete phone call E2E encryption key exchange »*

---

###### :link: [phone.receivedCall](method/phone.receivedCall)

  - *Optional: notify the server that the user is currently busy in a call: this will automatically refuse all incoming phone calls until the current phone call is ended*

---

###### :link: [phone.discardCall](method/phone.discardCall)

  - *Refuse or end running call*

---

###### :link: [phone.setCallRating](method/phone.setCallRating)

  - *Rate a call, returns info about the rating message sent to the official VoIP bot*

---

###### :link: [phone.saveCallDebug](method/phone.saveCallDebug)

  - *Send phone call debug data to server*

---

###### :link: [phone.sendSignalingData](method/phone.sendSignalingData)

  - *Send VoIP signaling data*

---

###### :link: [phone.createGroupCall](method/phone.createGroupCall)

  - *Create a group call or livestream*

---

###### :link: [phone.joinGroupCall](method/phone.joinGroupCall)

  - *Join a group call*

---

###### :link: [phone.leaveGroupCall](method/phone.leaveGroupCall)

  - *Leave a group call*

---

###### :link: [phone.inviteToGroupCall](method/phone.inviteToGroupCall)

  - *Invite a set of users to a group call*

---

###### :link: [phone.discardGroupCall](method/phone.discardGroupCall)

  - *Terminate a group call*

---

###### :link: [phone.toggleGroupCallSettings](method/phone.toggleGroupCallSettings)

  - *Change group call settings*

---

###### :link: [phone.getGroupCall](method/phone.getGroupCall)

  - *Get info about a group call*

---

###### :link: [phone.getGroupParticipants](method/phone.getGroupParticipants)

  - *Get group call participants*

---

###### :link: [phone.checkGroupCall](method/phone.checkGroupCall)

  - *Check whether the group call Server Forwarding Unit is currently receiving the streams with the specified WebRTC source IDs.
Returns an intersection of the source IDs specified in sources, and the source IDs currently being forwarded by the SFU*

---

###### :link: [phone.toggleGroupCallRecord](method/phone.toggleGroupCallRecord)

  - *Start or stop recording a group call: the recorded audio and video streams will be automatically sent to Saved messages (the chat with ourselves)*

---

###### :link: [phone.editGroupCallParticipant](method/phone.editGroupCallParticipant)

  - *Edit information about a given group call participant*

---

###### :link: [phone.editGroupCallTitle](method/phone.editGroupCallTitle)

  - *Edit the title of a group call or livestream*

---

###### :link: [phone.getGroupCallJoinAs](method/phone.getGroupCallJoinAs)

  - *Get a list of peers that can be used to join a group call, presenting yourself as a specific user/channel*

---

###### :link: [phone.exportGroupCallInvite](method/phone.exportGroupCallInvite)

  - *Get an invite link for a group call or livestream*

---

###### :link: [phone.toggleGroupCallStartSubscription](method/phone.toggleGroupCallStartSubscription)

  - *Subscribe or unsubscribe to a scheduled group call*

---

###### :link: [phone.startScheduledGroupCall](method/phone.startScheduledGroupCall)

  - *Start a scheduled group call*

---

###### :link: [phone.saveDefaultGroupCallJoinAs](method/phone.saveDefaultGroupCallJoinAs)

  - *Set the default peer that will be used to join a group call in a specific dialog*

---

###### :link: [phone.joinGroupCallPresentation](method/phone.joinGroupCallPresentation)

  - *Start screen sharing in a call*

---

###### :link: [phone.leaveGroupCallPresentation](method/phone.leaveGroupCallPresentation)

  - *Stop screen sharing in a group call*

---

###### :link: [phone.getGroupCallStreamChannels](method/phone.getGroupCallStreamChannels)

  - *Get info about RTMP streams in a group call or livestream.
This method should be invoked to the same group/channel-related DC used for downloading livestream chunks.
As usual, the media DC is preferred, if available*

---

###### :link: [phone.getGroupCallStreamRtmpUrl](method/phone.getGroupCallStreamRtmpUrl)

  - *Get RTMP URL and stream key for RTMP livestreams. Can be used even before creating the actual RTMP livestream with phone.createGroupCall (the rtmp_stream flag must be set)*

---

###### :link: [phone.saveCallLog](method/phone.saveCallLog)

  - *Save phone call debug information*

---

###### :link: [phone.createConferenceCall](method/phone.createConferenceCall)

---

###### :link: [phone.deleteConferenceCallParticipants](method/phone.deleteConferenceCallParticipants)

---

###### :link: [phone.sendConferenceCallBroadcast](method/phone.sendConferenceCallBroadcast)

---

###### :link: [phone.inviteConferenceCallParticipant](method/phone.inviteConferenceCallParticipant)

---

###### :link: [phone.declineConferenceCallInvite](method/phone.declineConferenceCallInvite)

---

###### :link: [phone.getGroupCallChainBlocks](method/phone.getGroupCallChainBlocks)

---

###### :link: [langpack.getLangPack](method/langpack.getLangPack)

  - *Get localization pack strings*

---

###### :link: [langpack.getStrings](method/langpack.getStrings)

  - *Get strings from a language pack*

---

###### :link: [langpack.getDifference](method/langpack.getDifference)

  - *Get new strings in language pack*

---

###### :link: [langpack.getLanguages](method/langpack.getLanguages)

  - *Get information about all languages in a localization pack*

---

###### :link: [langpack.getLanguage](method/langpack.getLanguage)

  - *Get information about a language in a localization pack*

---

###### :link: [folders.editPeerFolders](method/folders.editPeerFolders)

  - *Edit peers in peer folder*

---

###### :link: [stats.getBroadcastStats](method/stats.getBroadcastStats)

  - *Get channel statistics*

---

###### :link: [stats.loadAsyncGraph](method/stats.loadAsyncGraph)

  - *Load channel statistics graph asynchronously*

---

###### :link: [stats.getMegagroupStats](method/stats.getMegagroupStats)

  - *Get supergroup statistics*

---

###### :link: [stats.getMessagePublicForwards](method/stats.getMessagePublicForwards)

  - *Obtains a list of messages, indicating to which other public channels was a channel message forwarded.
Will return a list of messages with peer_id equal to the public channel to which this message was forwarded*

---

###### :link: [stats.getMessageStats](method/stats.getMessageStats)

  - *Get message statistics*

---

###### :link: [stats.getStoryStats](method/stats.getStoryStats)

  - *Get statistics for a certain story*

---

###### :link: [stats.getStoryPublicForwards](method/stats.getStoryPublicForwards)

  - *Obtain forwards of a story as a message to public chats and reposts by public channels*

---

###### :link: [chatlists.exportChatlistInvite](method/chatlists.exportChatlistInvite)

  - *Export a folder », creating a chat folder deep link »*

---

###### :link: [chatlists.deleteExportedInvite](method/chatlists.deleteExportedInvite)

  - *Delete a previously created chat folder deep link »*

---

###### :link: [chatlists.editExportedInvite](method/chatlists.editExportedInvite)

  - *Edit a chat folder deep link »*

---

###### :link: [chatlists.getExportedInvites](method/chatlists.getExportedInvites)

  - *List all chat folder deep links » associated to a folder*

---

###### :link: [chatlists.checkChatlistInvite](method/chatlists.checkChatlistInvite)

  - *Obtain information about a chat folder deep link »*

---

###### :link: [chatlists.joinChatlistInvite](method/chatlists.joinChatlistInvite)

  - *Import a chat folder deep link », joining some or all the chats in the folder*

---

###### :link: [chatlists.getChatlistUpdates](method/chatlists.getChatlistUpdates)

  - *Fetch new chats associated with an imported chat folder deep link ». Must be invoked at most every chatlist_update_period seconds (as per the related client configuration parameter »)*

---

###### :link: [chatlists.joinChatlistUpdates](method/chatlists.joinChatlistUpdates)

  - *Join channels and supergroups recently added to a chat folder deep link »*

---

###### :link: [chatlists.hideChatlistUpdates](method/chatlists.hideChatlistUpdates)

  - *Dismiss new pending peers recently added to a chat folder deep link »*

---

###### :link: [chatlists.getLeaveChatlistSuggestions](method/chatlists.getLeaveChatlistSuggestions)

  - *Returns identifiers of pinned or always included chats from a chat folder imported using a chat folder deep link », which are suggested to be left when the chat folder is deleted*

---

###### :link: [chatlists.leaveChatlist](method/chatlists.leaveChatlist)

  - *Delete a folder imported using a chat folder deep link »*

---

###### :link: [stories.canSendStory](method/stories.canSendStory)

  - *Check whether we can post stories as the specified peer*

---

###### :link: [stories.sendStory](method/stories.sendStory)

  - *Uploads a Telegram Story*

---

###### :link: [stories.editStory](method/stories.editStory)

  - *Edit an uploaded story*

---

###### :link: [stories.deleteStories](method/stories.deleteStories)

  - *Deletes some posted stories*

---

###### :link: [stories.togglePinned](method/stories.togglePinned)

  - *Pin or unpin one or more stories*

---

###### :link: [stories.getAllStories](method/stories.getAllStories)

  - *Fetch the List of active (or active and hidden) stories, see here » for more info on watching stories*

---

###### :link: [stories.getPinnedStories](method/stories.getPinnedStories)

  - *Fetch the stories pinned on a peer's profile*

---

###### :link: [stories.getStoriesArchive](method/stories.getStoriesArchive)

  - *Fetch the story archive » of a peer we control*

---

###### :link: [stories.getStoriesByID](method/stories.getStoriesByID)

  - *Obtain full info about a set of stories by their IDs*

---

###### :link: [stories.toggleAllStoriesHidden](method/stories.toggleAllStoriesHidden)

  - *Hide the active stories of a specific peer, preventing them from being displayed on the action bar on the homescreen*

---

###### :link: [stories.readStories](method/stories.readStories)

  - *Mark all stories up to a certain ID as read, for a given peer; will emit an updateReadStories update to all logged-in sessions*

---

###### :link: [stories.incrementStoryViews](method/stories.incrementStoryViews)

  - *Increment the view counter of one or more stories*

---

###### :link: [stories.getStoryViewsList](method/stories.getStoryViewsList)

  - *Obtain the list of users that have viewed a specific story we posted*

---

###### :link: [stories.getStoriesViews](method/stories.getStoriesViews)

  - *Obtain info about the view count, forward count, reactions and recent viewers of one or more stories*

---

###### :link: [stories.exportStoryLink](method/stories.exportStoryLink)

  - *Generate a story deep link for a specific story*

---

###### :link: [stories.report](method/stories.report)

  - *Report a story*

---

###### :link: [stories.activateStealthMode](method/stories.activateStealthMode)

  - *Activates stories stealth mode, see here » for more info*

---

###### :link: [stories.sendReaction](method/stories.sendReaction)

  - *React to a story*

---

###### :link: [stories.getPeerStories](method/stories.getPeerStories)

  - *Fetch the full active story list of a specific peer*

---

###### :link: [stories.getAllReadPeerStories](method/stories.getAllReadPeerStories)

  - *Obtain the latest read story ID for all peers when first logging in, returned as a list of updateReadStories updates, see here » for more info*

---

###### :link: [stories.getPeerMaxIDs](method/stories.getPeerMaxIDs)

  - *Get the IDs of the maximum read stories for a set of peers*

---

###### :link: [stories.getChatsToSend](method/stories.getChatsToSend)

  - *Obtain a list of channels where the user can post stories*

---

###### :link: [stories.togglePeerStoriesHidden](method/stories.togglePeerStoriesHidden)

  - *Hide the active stories of a user, preventing them from being displayed on the action bar on the homescreen, see here » for more info*

---

###### :link: [stories.getStoryReactionsList](method/stories.getStoryReactionsList)

  - *Get the reaction and interaction list of a story posted to a channel, along with the sender of each reaction*

---

###### :link: [stories.togglePinnedToTop](method/stories.togglePinnedToTop)

  - *Pin some stories to the top of the profile, see here » for more info*

---

###### :link: [stories.searchPosts](method/stories.searchPosts)

  - *Globally search for stories using a hashtag or a location media area, see here » for more info on the full flow*

---

###### :link: [stories.createAlbum](method/stories.createAlbum)

---

###### :link: [stories.updateAlbum](method/stories.updateAlbum)

---

###### :link: [stories.reorderAlbums](method/stories.reorderAlbums)

---

###### :link: [stories.deleteAlbum](method/stories.deleteAlbum)

---

###### :link: [stories.getAlbums](method/stories.getAlbums)

---

###### :link: [stories.getAlbumStories](method/stories.getAlbumStories)

---

###### :link: [premium.getBoostsList](method/premium.getBoostsList)

  - *Obtains info about the boosts that were applied to a certain channel or supergroup (admins only)*

---

###### :link: [premium.getMyBoosts](method/premium.getMyBoosts)

  - *Obtain which peers are we currently boosting, and how many boost slots we have left*

---

###### :link: [premium.applyBoost](method/premium.applyBoost)

  - *Apply one or more boosts » to a peer*

---

###### :link: [premium.getBoostsStatus](method/premium.getBoostsStatus)

  - *Gets the current number of boosts of a channel/supergroup*

---

###### :link: [premium.getUserBoosts](method/premium.getUserBoosts)

  - *Returns the lists of boost that were applied to a channel/supergroup by a specific user (admins only)*

---

###### :link: [smsjobs.isEligibleToJoin](method/smsjobs.isEligibleToJoin)

  - *Check if we can process SMS jobs (official clients only)*

---

###### :link: [smsjobs.join](method/smsjobs.join)

  - *Enable SMS jobs (official clients only)*

---

###### :link: [smsjobs.leave](method/smsjobs.leave)

  - *Disable SMS jobs (official clients only)*

---

###### :link: [smsjobs.updateSettings](method/smsjobs.updateSettings)

  - *Update SMS job settings (official clients only)*

---

###### :link: [smsjobs.getStatus](method/smsjobs.getStatus)

  - *Get SMS jobs status (official clients only)*

---

###### :link: [smsjobs.getSmsJob](method/smsjobs.getSmsJob)

  - *Get info about an SMS job (official clients only)*

---

###### :link: [smsjobs.finishJob](method/smsjobs.finishJob)

  - *Finish an SMS job (official clients only)*

---

###### :link: [fragment.getCollectibleInfo](method/fragment.getCollectibleInfo)

  - *Fetch information about a fragment collectible, see here » for more info on the full flow*